<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\LoginUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param App\Http\Requests\LoginRequest
     * @param App\Services\LoginUserService;
     * @return Illuminate\Http\JsonResponse
     */
    public function index(LoginRequest $request, LoginUserService $service) : JsonResponse {

        $token = $service->doLogin($request);

        if(empty($token))
            return response()->json([], 401);
        else 
            return response()->json([
                'token' =>  $token
            ]);

    }
}
