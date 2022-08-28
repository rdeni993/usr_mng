<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRelation extends Model
{
    use HasFactory;

    protected $table = 'permissions_relations';
    protected $fillable = [
        'permission',
        'user'
    ];

    /**
     * Permission exists
     * 
     * Use this to check did user already
     * have permission
     * 
     * @param App\Models\User $user
     * @param App\Models\Permission $permission
     * @return bool
     */
    public function permissionExists(User $user, Permission $permission){
        return ( $this->where([
            'permission'    =>  $permission->id,
            'user'  =>  $user->id
        ])->first() ) ?? false;
    }
}
