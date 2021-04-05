<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AcceptController extends Controller
{
    public function create_accept($id){
        
        

        return view('pets.create_accept', [
            'response' =>  \App\Models\response::find($id),
            'nanny' =>  \App\Models\User::where('id', \App\Models\response::find($id)->nanny )->first(),


        ]);
    }

    public function index_accept(){
        return view('pets.index_accept',[

           'accept_on_pet' => \App\Models\Accept::where('nanny', Auth::user()->id)->get()
       ]);
}



    public function store_accept(Request $request, \App\Models\Accept $accept){
        $accept ->pet = $request->input('pet');
        $accept ->owner= Auth::user()->id;
        $accept ->nanny = $request->input('nanny');


       

        try{ 
            $accept->save();
            return redirect('/response');
        }
        catch(Exception $e){
            return redirect('/response');
        }
        
        
    }
}
