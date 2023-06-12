<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDetail;


class CategoryDetailController extends Controller
{
    public function index()
    {
        $categorydetails = CategoryDetail::all();
        return view('category-detail.index',compact('categorydetails'));
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
