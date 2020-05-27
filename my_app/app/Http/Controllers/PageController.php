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

    public function show($id) {
        
        return view('show')->with('user', Users::find($id));
    }

    public function adduser() {

        $this->validate(request(), [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required'
        ]);
        $data = request()->all();

        $user = new Users();

        $user->fname = $data['fname'];
        $user->lname = $data['lname'];
        $user->email = $data['email'];

        $user->save();

        return redirect('/');

    }
}
