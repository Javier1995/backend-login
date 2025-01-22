<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin =  Role::factory()->create([
            'name' => 'Admin',
         ]);
        $editor =  Role::factory()->create([
            'name' => 'Editor',
         ]);
        $viewer =  Role::factory()->create([
            'name' => 'Viewer',
         ]);

         $permissions = Permission::all();
         $admin->permissions()->attach($permissions->pluck('id'));
         $editor->permissions()->attach($permissions->pluck('id'));
         $editor->permissions()->detach(12);
         $viewer->permissions()->attach([9,11,13,15]);
         
    }
}
