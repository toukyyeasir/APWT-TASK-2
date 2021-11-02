<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class userController extends Controller
{
    //
    function getData(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        return $request->input();
    }

     function addData(Request $req)
    {
        $member = new member;

        $req->validate([
            'name' => 'required|min:2|max:10',
            'email' => 'required',
            'password' => 'required|min:3|max:6'

        ]);

        $member->name = $req->name;
        $member->email = $req->email;
        $member->password = $req->password;
        $member->save();

        $data = $req->name;
        $req->session()->flash('user',$data);
        return redirect ('signup');
    }


}
