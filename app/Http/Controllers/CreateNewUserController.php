<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewUserRequest;
use App\Services\CreateNewUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreateNewUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateNewUserRequest  $request
     * @param  \App\Services\CreateNewUserService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateNewUserRequest $request, CreateNewUserService $service) : JsonResponse{
        
        return response()->json([
            'data'  =>  $service->createNewUser($request)
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
