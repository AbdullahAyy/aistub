<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Settings;
class SettingsController extends Controller
{
    private $model;

    public function __construct(){
        $this->model = new Settings();
    }

    public function index(){
        $sendBlade['title'] = 'Ayarlar';
        return view('settings.index', compact('sendBlade'));
    }

    public function profile(){
        $sendBlade['title'] = 'Profilim';
        return view('settings.profile', compact('sendBlade'));
    }
}
