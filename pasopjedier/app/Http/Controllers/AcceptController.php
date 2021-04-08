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
        //return dd(\App\Models\Accept::where('nanny', Auth::user()->id)->get()->skip(1)->first()->user->name);
        return view('pets.index_accept',[

            'accept_on_pet' => \App\Models\Accept::where([['nanny', Auth::user()->id], ['status', '=', 0]])->get(),
            'user' => Auth::user(),

       ]);
}



    public function store_accept(Request $request, \App\Models\Accept $accept){
        $accept ->pet = $request->input('pet');
        $accept ->owner= Auth::user()->id;
        $accept ->nanny = $request->input('nanny');
        $response = \App\Models\Response::find($request->input('id'));
        $response->status = 1;
        $response->save();
       
        
       

       

        try{ 
            $accept->save();
            return redirect('/response');
            
        }
        catch(Exception $e){
            return redirect('/response');
        }
        
        
    }
    public function destroy_accept($id) {
        DB::delete('delete from accept_on_pet where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        return redirect('/accept');
        }
}
