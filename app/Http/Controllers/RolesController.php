<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kodeine\Acl\Models\Eloquent\Permission;
use Kodeine\Acl\Models\Eloquent\Role;

class RolesController extends Controller
{
    //

    public function createRole($name, $slug, $description)
    {
        $role = new Role();
        $role->name = $name;
        $role->slug = $slug;
        $role->description = $description;

        if ($role->save()) {
            return true;
        } else {
            return false;
        }
    }

    public function createPermission($name, $slug, $description)
    {

        $permission = new Permission();
        $permission->name = $name;
        $permission->slug = $slug;
        $permission->description = $description;

        if ($permission->save()) {
            return true;
        } else {
            return false;
        }

    }

    public function assignRole($userid, $role)
    {
        $user = User::find($userid);
        if ($user->assignRole($role)) {
            return true;
        } else {
            return false;
        }
    }

    public function assignPermission($userid, $permission)
    {

    }
}
