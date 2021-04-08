<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create_review($id){
        

        return view('pets.create_review', [
            'accept' =>  \App\Models\Accept::find($id),
        ]);
    }
    public function store_review(Request $request, \App\Models\Review $review){
        $review ->owner= $request->input('owner');
        $review ->review = $request->input('review');
        $accept = \App\Models\Accept::find($request->input('id_accept'));
        $accept->status = 1;
        $accept->save();
        

        try{ 
            $review->save();
            return redirect('/user/reviews');
        }
        catch(Exception $e){
            return redirect('/pet');
        }
        

     
 }
    public function index_review(){
        return view('pets.index_review',[
            'review_on_user' =>  \App\Models\Review::all()

    ]);
    }
}
