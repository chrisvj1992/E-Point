<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotencialClienteController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
