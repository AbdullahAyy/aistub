<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ai as AiModel;
use Illuminate\Support\Facades\Auth;

class Ais extends Controller
{
    protected $model;

    public $languageMap = [
        'tr' => 'Türkçe',
        'en' => 'İngilizce',
        'de' => 'Almanca',
        'fr' => 'Fransızca',
        'ar' => 'Arapça',
    ];

    public function __construct()
    {
        $this->model = new AiModel();
    }
    public function index(){

        $user_id = Auth::id();

        $sendBlade['headers'] = [
            'ID', 'Name', 'Slug', 'Language', 'Tone', 'Prefix Prompt', 'Active', 'Created At', 'Updated At'
        ];
        $sendBlade['ais'] = $this->model->where('user_id', $user_id)->get()->map(function($item) {
            return [
                $item->id,
                $item->name,
                $item->slug,
                $this->languageMap[$item->language] ?? $item->language,
                $item->tone,
                $item->prefix_prompt,
                $item->is_active ? 'Active' : 'Disabled',
                $item->created_at->format('d.m.Y'),
                $item->updated_at->format('d.m.Y')
            ];
        })->toArray();

        $sendBlade['title'] = 'Yapay Zekalarım';
        return view('ais.index', compact('sendBlade'));
    }

    public function create(){
        $sendBlade['title'] = 'Yeni Yapay Zeka Oluştur';
        return view('ais.create', compact('sendBlade'));
    }

    public function store(Request $request){
        $validated = $request->validate([
           'name' => 'required|string|max:255',
           'slug' => 'required|string|max:255|unique:ais,slug',
           'language' => 'required|string'
        ]);

        $ai = new \App\Models\Ai();
        $ai->user_id = Auth::id();
        $ai->name = $validated['name'];
        $ai->slug = $validated['slug'];
        $ai->language = $validated['language'];
        $ai->tone = $request->input('tone', 'default');
        $ai->prefix_prompt = $request->input('prefix_prompt', '');
        $ai->sample_json = $request->input('sample_json', '{}');
        $ai->is_active = $request->input('is_active', 1);
        $ai->save();

        return response()->json([
           'status' => 'success',
           'message' => 'Yeni Yapay Zeka Başarıyla Oluşturuldu',
           'data' => $ai
        ]);
    }
}
