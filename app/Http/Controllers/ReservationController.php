<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation.index',compact('reservations'));
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
