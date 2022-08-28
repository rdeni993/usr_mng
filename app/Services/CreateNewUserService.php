<?php 

namespace App\Services;

use App\Http\Requests\CreateNewUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

/**
 * 
 * Store New User in database
 * 
 */

class CreateNewUserService {

    /**
     * Create New User in database
     * 
     * @param App\Http\Requests\CreateNewUserRequest $request
     * @return array
     */
    public function createNewUser( CreateNewUserRequest $request ) : array {

        // Take Validated response
        // and create HASHed password
        // and empty statue
        $updatedRequest = $request->post();

        $updatedRequest['password'] =   Hash::make($request->password);
        $updatedRequest['status']  = $request->status ?? '';

        $newUser = User::create($updatedRequest);

        return ([$newUser]) ?? [];
    }

}