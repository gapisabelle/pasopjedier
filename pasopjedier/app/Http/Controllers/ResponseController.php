<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class ResponseController extends Controller
{

    public function create_response($id){
        

        return view('pets.create_response', [
            'pet' =>  \App\Models\Pet::find($id),
            'owner' =>  \App\Models\User::where('id', \App\Models\pet::find($id)->owner )->first(),
            
        ]);
    }
    
    

    public function index_response(){
        return view('pets.index_response',[

           'response_on_pet' => \App\Models\Response::where([['owner', Auth::user()->id], ['status', '=', 0]])->get(),
          
       ]);




    }



    public function store_response(Request $request, \App\Models\Response $response){
        $response ->pet = $request->input('pet');
        $response ->owner= $request->input('owner');
        $response ->nanny = Auth::user()->id;
        $response ->bericht = $request ->input('bericht');
        



        try{ 
            $response->save();
            return redirect('/pet');
        }
        catch(Exception $e){
            return redirect('/oops');
        }
        
    }

    public function destroy_response($id) {
        DB::delete('delete from response_on_pet where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        return redirect('/response');
        }
}
