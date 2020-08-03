<?php

namespace App\Http\Controllers;

use App\User;
use App\Tip;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function agregaruser(){
        return view('agregar-usuario');
    }
    public function agregar(){
        $users = User::all();
        $tips = Tip::all();
        
        return view('agregar', ['users' => $users, 'tips' => $tips]);
    }
}
