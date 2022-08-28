<?php 

namespace App\Services;

use App\Models\User;
use App\Models\Permission;
use App\Models\PermissionRelation;

class StorePermissionService{

    /**
     * 
     * Permission Exists
     * 
     * @param int $userId
     * @param int $permissionId
     * @return bool
     */
    public function permissionExists(int $userId, int $permissionId) {
        
        try{
            return (bool)( new PermissionRelation() )->permissionExists(
                User::where( ['id'  =>  $userId] )->get()[0],
                Permission::where( ['id' => $permissionId] )->get()[0]
            );
        } catch ( \Exception $e ){
            return false;
        }
        return false;
    } 

    public function permissionCreate(int $userId, int $permissionId) : bool {
        if( $this->permissionExists($userId, $permissionId) ){
            return false;
        }else{
            return (bool)PermissionRelation::create([
                'user'          =>  $userId,
                'permission'    =>  $permissionId
            ]);
        }
    }

}