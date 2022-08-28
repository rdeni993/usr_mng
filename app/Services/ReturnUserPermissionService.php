<?php 

namespace App\Services;

use App\Models\PermissionRelation;

class ReturnUserPermissionService {

    /**
     * Return Permission for selected
     * user
     * 
     * @param int userId
     * @return array
     */
    public function permissions( int $userId ) : array {
        return [
            PermissionRelation::select(
                'permissions.id as pid',
                'permissions.permission as pname',
                'permissions_relations.user'
            )
            ->join('permissions', 'permissions.id', '=', 'permissions_relations.permission' )
            ->get()
        ];

    }

}