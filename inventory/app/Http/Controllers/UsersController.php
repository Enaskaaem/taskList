<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        $info= User::latest()->paginate(8);
      return view('userinfo.index',compact('info')); 
    }

    public function create()
    {
        return view('userinfo.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'date_join'=>'required',
            'current_poss'=>'required',
            'user_type'=>'required',
            'previous_poss'=>'required',
            'is_active'=>'required'

        ]);
        $info= User::create($request->all());
        return redirect()->route('user.index')->with('Done','all user added ');
    }

    public function show(User $User)
    {
        return view('userinfo.show',compact('User'));
    }

    public function edit(User $User)
    {
        return view('userinfo.edit',compact('User'));
    }

    
    public function update(Request $request, User $User)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'date_join'=>'required',
            'current_poss'=>'required',
            'user_type'=>'required',
            'previous_poss'=>'required',
            'is_active'=>'required'

        ]);
        //$User= User::update($request->all());
        $User->update($request->all());
        return redirect()->route('user.index')->with('Done','all users update ');
    }

    public function destroy(User $User)
    {
        $User->delete();
        return redirect()->route('user.index')->with('Done','all users delete ');
    }
}
