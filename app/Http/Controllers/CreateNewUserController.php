<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewUserRequest;
use App\Services\CreateNewUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreateNewUserController extends Controller
{

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

}
