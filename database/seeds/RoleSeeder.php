<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'administradores','description'=>'ADMINISTRADORES']);
        Role::create(['name'=>'maestros','description'=>'MAESTROS']);
        Role::create(['name'=>'secretaría','description'=>'SECRETARÍA']);

    }
}
