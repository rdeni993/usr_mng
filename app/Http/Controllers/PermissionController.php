<?php

namespace App\Http\Controllers;

use App\Services\RemovePermissionService;
use App\Services\ReturnUserPermissionService;
use App\Services\StorePermissionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(StorePermissionService $service, int $userId, int $permissionId) : JsonResponse{

        try{
            $createStatus = ($service->permissionCreate($userId, $permissionId)) ? 200 : 406;
        } catch( \Illuminate\Database\QueryException $e){
            $createStatus = 400;
        } catch( \Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e){
            $createStatus = 400;
        }

        return response()->json([], $createStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show( ReturnUserPermissionService $service, $userId) : JsonResponse{
        return response()->json([
            'data'  =>  $service->permissions($userId)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $userId
     * @param  int  $permissionId
     * @return \Illuminate\Http\JsonResponse;
     */
    public function destroy(RemovePermissionService $service, int $userId, int $permissionId) : JsonResponse{

        $status = ( $service->removePermission($userId, $permissionId)  ? 200 : 406);

        return response()->json([], $status);
    }
}
