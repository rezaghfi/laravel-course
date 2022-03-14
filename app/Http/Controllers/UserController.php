<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('pages.myView');
    }

    public function create()
    {
        return "post method for example";
    }

    public function showID($id)
    {
        return "ID is ". $id;
    }
}

