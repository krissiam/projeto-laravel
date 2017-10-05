<?php

namespace App\Http\Controllers\ScaffoldInterface;

use App\Http\Controllers\Controller;


class AppController extends Controller
{

    public function dashboard()
    {
        $users = \App\User::all()->count();
        $roles = \Spatie\Permission\Models\Role::all()->count();
        $permissions = \Spatie\Permission\Models\Permission::all()->count();
        $entities = \Amranidev\ScaffoldInterface\Models\Scaffoldinterface::all();
        return view('scaffold-interface.dashboard.dashboard', compact('users', 'roles', 'permissions', "entities"));
    }
}
