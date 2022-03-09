<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function reza(){
        return "hello my friends";
    }

    public function index(){
        return "ana index method in PostsController";
    }

    public function showMyView($id){
        return view('pages.my-view')->with('id',$id);
    }
}
