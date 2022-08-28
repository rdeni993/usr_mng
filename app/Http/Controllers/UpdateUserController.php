<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Services\UpdateUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Services\UpdateUserService $service
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateUserRequest $request, UpdateUserService $service, $id) : JsonResponse{

        $statusCode = $service->updateUser($request, $id) ? 200 : 401;
        
        return response()->json([], $statusCode);
    }

}
