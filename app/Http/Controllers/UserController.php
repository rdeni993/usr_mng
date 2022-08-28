<?php

namespace App\Http\Controllers;

use App\Services\GetUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $userId
     * @param  App\Services\GetUserService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function show( GetUserService $service, int $id) : JsonResponse{
        return response()->json([
            'data'  =>  $service->getUser($id)
        ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  App\Services\GetUserService $service
     * @return \Illuminate\Http\JsonResponse
     */
    public function showAll( GetUserService $service) : JsonResponse{
        return response()->json([
            'data'  =>  $service->allUsers()
        ]);
    }

}
