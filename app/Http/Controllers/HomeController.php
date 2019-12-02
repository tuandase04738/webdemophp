<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =auth()->user();
        return view('home',[
            'user' => $user
        ]);
    }

    public function updateStatus(Request $request) {
     $user = auth()->user();
     $user->status = 1;
     $user->save();
     return redirect()->back();
    }

}
