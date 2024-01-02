<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


    /**
    *    @OA\Get(
    *       path="/User",
    *       tags={"User"},
    *       operationId="User",
    *       summary="User Data",
    *       description="Get User Data",
    *       @OA\Response(
    *           response="200",
    *           description="Ok",
    *           @OA\JsonContent
    *           (example={
    *               "success": true,
    *               "message": "Success to get user data",
    *               "data": {
    *                   {
    *                   "id": "1",
    *                   "name": "User",
    *                  }
    *              }
    *          }),
    *      ),
    *  )
    */
    
class UserAPIController extends Controller
{
    public function listdata()
    {
        $users = User::all();

        return $users;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
