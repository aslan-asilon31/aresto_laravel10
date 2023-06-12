<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('review.index',compact('reviews'));
    }
        
    public function create()
    {

    }


    public function store(Request $request)
    {
        
    }


    public function edit(ProductImage $productimage)
    {
    }

    public function update(Request $request, ProductImage $productimage)
    {
        
    }


    public function destroy($id)
    {

    }
}
