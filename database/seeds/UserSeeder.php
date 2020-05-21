<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Alexander',
            'email'=>'estudiante@example.com',
            'password'=>bcrypt('123123123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
        factory(User::class,30)->create();
    }
}
