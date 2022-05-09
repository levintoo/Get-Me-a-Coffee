<?php

namespace Database\Seeders;


use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
class Roles extends Seeder
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
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'ban users']);
        Permission::create(['name' => 'unban users']);
        Permission::create(['name' => 'create users']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('edit user');
        $role1->givePermissionTo('delete user');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('edit users');
        $role2->givePermissionTo('delete users');
        $role2->givePermissionTo('ban users');
        $role2->givePermissionTo('unban users');
        $role2->givePermissionTo('create users');

        $role3 = Role::create(['name' => 'Super-Admin']);

        $user =  User::create([
            'userid' => Helper::IDGenerator(new User(),'userid',4,'GMAC'),
            'name' => 'admin',
            'username'=> 'admin',
            'phone' => '+254700000000',
            'national_id' => '000000',
            'category' => 'admin',
            'about' => 'temporary admin',
            'email' => 'admin@admin.admin',
            'utype' => '',
            'status' => '0',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole($role3);
    }
}
