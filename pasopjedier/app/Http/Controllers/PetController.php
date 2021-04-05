<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PetController extends Controller
{
    public function index(){
        return view('pets.index',[
            'pet' =>  \App\Models\Pet::all()
        ]);

    }
    public function index_admin(){
        return view('pets.index_admin',[
            'pet' =>  \App\Models\Pet::all()
        ]);

    }

    public function show($id){

        return view('pets.show',[
            'pet' => \App\Models\Pet::find($id),

        ]);

    }
    public function create(){
        
        return view('pets.create', [
            'kind_of_pet' =>\App\Models\KindOfPet::all(),
            'images'=> \App\Models\Image::all(),
            
        ]);
    }
    public function destroy($id) {
        DB::delete('delete from pet where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        echo 'Click Here to go back.';
        }

    public function redirect(){
        return redirect('/pet');
    }



    public function store(Request $request, \App\Models\Pet $pet){
        $pet ->naam = $request ->input('naam');
        $pet ->soort = $request ->input('soort');
        $pet ->datum = $request ->input('datum');
        $pet ->uurtarief = $request ->input('uurtarief');
        $pet ->aantal_dagen = $request ->input('aantal_dagen');
        $pet ->belangrijke_zaken = $request ->input('belangrijke_zaken');
        $pet ->image = $request ->input('image');
        $pet ->owner= Auth::user()->id;


        try{ 
            $pet->save();
            return redirect('/pet');
        }
        catch(Exception $e){
            return redirect('/pet/create');
        }
        
    }



}
