<?php 

namespace App\Services;

use App\Models\User;

/**
 * 
 * Remove User
 */
class DeleteUserService {

    /**
     * Remove User
     * 
     * @param int userId
     * @return bool
     */
    public function removeUserFromSystem(int $userId) : bool {
        return (bool)User::where(['id' => $userId])->delete();
    }

}