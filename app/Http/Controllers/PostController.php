<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    
}

public function agendar()
    {
        return view('posts.agendar');
    
}

public function cancelar()
    {
        return view('posts.cancelar');
    
}




public function register()
    {
        return view('posts.register');
    
}





public function password()
    {
        return view('posts.password');
    
}




public function iniciar()
    {
        return view('posts.iniciar');
    
}
public function dashboard()
    {
        return view('dashboard');
    
}
public function d()
    {
        return view('posts/d');
    
}
}