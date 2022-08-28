<?php 

namespace App\Services;

use App\Models\PermissionRelation;
use \Illuminate\Database\Eloquent\Collection;

class ReturnUserPermissionService {

    /**
     * Return Permission for selected
     * user
     * 
     * @param int userId
     * @return array
     */
    public function permissions( int $userId ) : Collection {
        return  
            PermissionRelation::select(
                'permissions.id as pid',
                'permissions.permission as pname',
                'permissions_relations.user',
                'permissions_relations.id as rid'
            )
            ->join('permissions', 'permissions.id', '=', 'permissions_relations.permission' )
            ->where([ 'user' => $userId ])
            ->get();
    }

}