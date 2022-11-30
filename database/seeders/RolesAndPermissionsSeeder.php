<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'admin_permissions']);
        Permission::create(['name' => 'student_permissions']);

        $role_1 = Role::create(['name' => 'admin'])
            ->givePermissionTo(['admin_permissions', 'student_permissions']);

        $role_1 = Role::create(['name' => 'student'])
            ->givePermissionTo(['student_permissions']);
    }
}
