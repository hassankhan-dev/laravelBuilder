<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function showAllUser(){
        $users = DB::table('users')->get();
        return view('users',['data'=>$users]);
    }

    function showSpecificUser(string $id){
        $users = DB::table('users')->where('UserId',$id)->get();
        return view('specificuser',['data'=>$users]);
    }
}
        

        
        
