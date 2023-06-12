<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index',compact('orders'));
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
