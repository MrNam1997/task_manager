<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('view');
    }
    public function create(){
        return view('create');
    }
    public function edit(){
        return view('edit');
    }
    public function show(){
        return view('show');
    }
    public function delete(){
        return view('delete');
    }
}
