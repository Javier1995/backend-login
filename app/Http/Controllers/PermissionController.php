<?php

namespace App\Http\Controllers;

use App\Http\Resources\PermissionResource;
use App\Models\Permission;

class PermissionController extends Controller
{
    
        public function index()
        {
            return PermissionResource::collection(Permission::all());
        }
}
