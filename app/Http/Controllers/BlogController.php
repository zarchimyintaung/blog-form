<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request){
        $title = $request->title;
        $desc = $request->desc;

        $validate = $request->validate([
            'title' => 'required|min:3|max:10',
            'desc'=>'nullable'
        ]);

        // return "<h1>$title</h1><br><p>$desc</p>";
        session()->flash('success','blog create is successfully');

        return to_route('about');
    }
}
