<?php

use Illuminate\Database\Seeder;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Admin::create([
		    'name' => 'Carlos Anselmi',
		    'email' => 'carlosanselmi2@gmail.com',
		    'password' => bcrypt('19901020')
		]);
    }
}