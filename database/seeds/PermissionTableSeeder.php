<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['guard_name' => 'admin','name' => 'Administrador']);
        Permission::create(['guard_name' => 'customer','name' => 'nivel_1']);
        Permission::create(['guard_name' => 'customer','name' => 'nivel_2']);
    }
}
