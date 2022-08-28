<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class GetUserService {

    /**
     * 
     * Return User Based on ID
     * @param int userId
     * @return App\Model\User
     */
    public function getUser( int $userId ) :User{
        return User::where(
            [
                'id'    =>  $userId
            ]    
        )->first();
    }

    /**
     * 
     * Return User Based on ID
     * @return Illuminate\Database\Eloquent\Collection user
     */
    public function allUsers() : Collection {
        return User::all();
    }

}