<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' =>'destroy']);
    }

    public function create() {

        return view('sessions.create');

    }

    public function store() {

        //Attempt to authenticate the user.
        //if not, redirect back
        //If so, Sign them in
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' =>'Please check your credentials and try again.'
            ]);
        }

        return redirect()->home();
        //redirect to the homepage

    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }

}
