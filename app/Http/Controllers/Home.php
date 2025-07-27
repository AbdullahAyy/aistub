<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home as HomeModel;

class Home extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }
    public function index(){
        $sendBlade['text'] = $this->model->index();
        $sendBlade['title'] = 'Ana Sayfa';
        return view('home.index', compact('sendBlade'));
    }
}
