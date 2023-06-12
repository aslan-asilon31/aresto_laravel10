<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;


class OrderDetailController extends Controller
{
    public function index()
    {
        $orderdetails = OrderDetail::all();
        return view('order-detail.index',compact('orderdetails'));
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
