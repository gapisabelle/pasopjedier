<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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
    public function update_profile(Request $request){

        
        $request->validate([
            'image' => 'mimes:jpeg,bmp,png',
            'image_info' => 'mimes:jpeg,bmp,png'
        ]);
        $random = Str::random(40);

        $user = Auth::user();

        
        if ($request->image!== NULL && $request->image_info !==NULL){
            $path = $request->image->storeAs('user', $random .'.jpg', 'public_uploads');
            $path_info = $request->image_info->storeAs('user_info', $random .'.jpg', 'public_uploads');
            $user->image_info = '/img/' . $path_info;
            $user->image = '/img/' . $path;
        }
        if ($request->image_info !==NULL){
            $path_info = $request->image_info->storeAs('user_info', $random .'.jpg', 'public_uploads');
            $user->image_info = '/img/' . $path_info;
            
        }
        if ($request->image !==NULL){
            $path = $request->image->storeAs('user', $random .'.jpg', 'public_uploads');
            $user->image = '/img/' . $path;
            
        }
        if ($request->informatie !==NULL){
            $user->informatie = $request->input('informatie');
            
        }
        

        

        

        try{ 
            $user->save();
            return redirect('/pet');
        }
        catch(Exception $e){
            return redirect('/oops');
        }
    }
    public function index_profile(){
        return view('pets.index_profile',[
            'user' =>  \App\Models\User::all()
        
    ]);
}

    public function show_profile($id){

        return view('pets.show_profile',[
            'user' => \App\Models\User::find($id),
            'review' => \App\Models\review::find($id),

        ]);

    }
    public function edit_profile(){
        return view('pets.create_profile' ,[
            'images' => \App\Models\Image::all(), 
        ]);
    }

    public function show_oops(){
        return view('pets.show_oops', [

        ]);
    }


}

            