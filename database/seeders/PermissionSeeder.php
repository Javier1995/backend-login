<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'view_users'],
            ['name' => 'edit_users'],
            ['name' => 'view_roles'],
            ['name' => 'edit_roles'],
            ['name' => 'view_products'],
            ['name' => 'edit_products'],
        ];
        
       foreach($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
