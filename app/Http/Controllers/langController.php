<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langController extends Controller
{
    public function show(){
        if (session()->has('lang')) {
            return session('lang');
        }else{
            return"Thers is no way";
        }
    }

    public function store(){
        session(['lang'=>'en']);

        return "English Language is store";
    }

    public function delete(){
        session()->forget('lang');

        return "Delete data is successfully";
    }

    public function change(){
        session(['lang'=>'mm']);

        return "Myanmar  Language is store";
    }
}
