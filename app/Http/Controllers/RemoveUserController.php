<?php

namespace App\Http\Controllers;

use App\Services\DeleteUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RemoveUserController extends Controller
{
    /**
     * Delete User
     * 
     * @param App\Services\DeleteUserService $service
     * @param int $userId
     * @return Illuminate\Http\JsonResponse
     */
    public function delete(DeleteUserService $service, int $id) : JsonResponse {
        return response()->json([
            'data'  =>  $service->removeUserFromSystem($id)
        ]);
    }
}
