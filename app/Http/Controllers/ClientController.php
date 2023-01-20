<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store (request $request)
    {
        Client::create([
            
            'name' =>$request-> name,
            'email' => $request->email,
            'phone' =>$request->phone,

        ]);
    }

    public function index(){
        return view('register');
    }

    public function blade(){
        $name = 'Taylor';
        return view('hello',compact('name'));
    }
}

// depois de editar tudo roda o migrate
