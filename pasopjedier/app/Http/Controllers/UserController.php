<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class UserController extends Controller
{
        public function index_users(){
            return view('users.index',[
                'user' =>  \App\Models\User::all()
            
        ]);
    }
        public function index_users_blocked(){
            return view('users.index_deblokkeren',[
                'user' =>  \App\Models\User::all()
            
        ]);
    }

        public function update($id){
           $affected =  DB::table('users')
                    ->where('id', $id )
                    ->update(['blocked' => True]);

                    return redirect('/pet');

        
    }

    public function update_deblock($id){
        $affected =  DB::table('users')
                 ->where('id', $id )
                 ->update(['blocked' => False]);

                 return redirect('/pet');

     
 }
}