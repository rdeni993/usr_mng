<?php 

namespace App\Services;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

/**
 * 
 * Update User
 * 
 */

class UpdateUserService {

    /**
     * 
     * Update User
     * 
     * @param App\Http\Requests\UpdateUserRequest
     * @param int userId
     * @return array userData
     */
    public function updateUser(UpdateUserRequest $request, int $targetUserId) : array {

        return( 
            [
                User::where(
                    [ 'id' => $targetUserId]
                )->update( $request->only(['first_name', 'last_name', 'status', 'email', 'username']) )
            ] 
        );

    }

}