<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $listUserWaiting = User::where('status',1)->get(['id','username','email']);
        return view('manage', ['listUserWaiting' => $listUserWaiting ]);
    }

    public function acceptForm(Request $request, $id) {
        $user = User::find($id);
        $user->status =$request->status;
        $user->save();
        return redirect()->back();
    }

    
}
