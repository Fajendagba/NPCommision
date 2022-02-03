<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct () {
        $this->middleware(['guest']);
    }

    // Responsible for showing the form
    public function index () {
        return view('auth.login');
    }

    // Responsible for signing in user
    public function store (Request $request) {
        
        $this->validate($request,
        [
            'emailorname'=> 'required',
            'password'=> 'required',
        ]);

        if(auth()->attempt(['email' => request('emailorname'), 'password' => request('password')],  $request->remember) ||
            auth()->attempt(['name' => request('emailorname'), 'password' => request('password')],  $request->remember))
        {
            return redirect()->route('/')->with('success','Welcome back <span class="fw-bold">'.auth()->user()->name.'</span>');
        } else {
            return back()->with('error', 'Invalid login details');
        }
        
    }
}
