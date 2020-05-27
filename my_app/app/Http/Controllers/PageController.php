<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $users = Users::all();
        return view('index')->with('users', $users);
    }

    public function add() {
        return view('add');
    }
}
