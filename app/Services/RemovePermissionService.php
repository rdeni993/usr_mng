<?php 

namespace App\Services;

use App\Models\PermissionRelation;

class RemovePermissionService {

    /**
     * 
     * Remove Permission
     * 
     * @param int $userId
     * @param int $permissionId
     * @return bool
     */
    public function removePermission(int $userId, int $permissionId) : bool {
        return (bool)PermissionRelation::where(
            [
                'user'          =>  $userId,
                'permission'    =>  $permissionId
            ]
        )->delete();
    }    
    
    /**
    * 
    * Remove Permission
    * 
    * @param int $relationId
    * @return bool
    */
   public function removeRelationPermission(int $relationId) : bool {
       return (bool)PermissionRelation::where(
           [
               'id'          =>  $relationId
           ]
       )->delete();
   }

}