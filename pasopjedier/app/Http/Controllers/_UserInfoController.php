<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class UserInfoController extends Controller
{
    public function show_profile($id){

        return view('pets.show_profile',[
            'user_info' => \App\Models\UserInfo::find($id),
            'reviews' => \App\Models\Review::where('owner', $id)->get(),

        ]);

    }
    public function index_profile(){
        return view('pets.index_profile',[
            'user_info' => \App\Models\Users::all(),
        ]);

    }
    public function create_profile(){
        
        return view('pets.create_profile', [
            'images'=> \App\Models\Image::all(),
            'user_info' => \App\Models\Users::all(),
            
        ]);
    }
    public function store_profile(Request $request, \App\Models\Users $user_info){
        $user_info ->naam = $request ->input('naam');
        $user_info ->informatie = $request ->input('informatie');
        $user_info ->image = $request ->input('image');
        $user_info ->user= Auth::user()->id;


        try{ 
            $user_info->save();
            return redirect('/pet');
        }
        catch(Exception $e){
            return redirect('/pet/create');
        }
        
    }
}
