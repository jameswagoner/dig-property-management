<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit properties']);
        Permission::create(['name' => 'delete properties']);
        Permission::create(['name' => 'edit tenants']);
        Permission::create(['name' => 'delete tenants']);

        // create roles and assign existing permissions
        $staffRole = Role::create(['name' => 'staff']);
        $staffRole->givePermissionTo('edit properties');
        $staffRole->givePermissionTo('delete properties');
        $staffRole->givePermissionTo('edit tenants');
        $staffRole->givePermissionTo('delete tenants');

        // create a tenant role
        Role::create(['name' => 'tenant']);

        // create an admin role
        Role::create(['name' => 'admin']);

        // super admin gets all permissions via Gate::before rule; see AuthServiceProvider
        Role::create(['name' => 'super-admin']);
    }
}
