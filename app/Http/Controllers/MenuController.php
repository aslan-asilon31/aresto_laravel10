<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index',compact('menus'));
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
