<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\ApiUsages as ApiUsageModel;

class ApiUsages extends Controller
{

    public function index()
    {
        $sendBlade['title'] = 'Api Kullanımı';

        $user_id = Auth::id();

        // Kullanıcının api_usages tablosunda kaydı var mı?
        $sendBlade['hasUsages'] = DB::table('api_usages')
            ->where('user_id', $user_id)
            ->exists();


        if ($sendBlade['hasUsages'] != '') {
            $sendBlade['usages'] = ApiUsageModel::where('user_id', $user_id)->get()->map(function($item) {
                return [
                    $item->id,
                    $item->token,
                    $item->rate_limit,
                    $item->last_used_at ? ($item->last_used_at->isToday() ? 'Bugün' : $item->last_used_at->format('d.m.Y')) : '-', // Bugün kontrolü
                    $item->created_at ? $item->created_at->format('d.m.Y') : '-',
                ];
            })->toArray();
        }

        return view('usages.index', compact('sendBlade'));
    }

    public function createToken()
    {

        $userID = Auth::id();

        if (!$userID) {
            return redirect()->back()->with('error', 'Kullanıcı giriş yapmamış veya doğrulanmamış.');
        }

        $token = Str::random(32);
        $expires_at = Carbon::now()->addMonths(3);

        if (ApiUsageModel::where('user_id', $userID)->exists()) {
            return redirect()->back()->with('error', 'Zaten bir token oluşturulmuş.');
        }

        ApiUsageModel::create([
            'user_id'    => $userID,
            'token'      => $token,
            'rate_limit' => 1000, // Varsayılan bir rate limit istersen ekleyebilirsin
            'expires_at' => $expires_at,
            'last_used_at' => null,
        ]);

        return [
            'status'=> 'success',
            'message' => 'Token başarıyla oluşturuldu'
        ];
    }
}
