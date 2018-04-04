<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Carlos',
            'email' => 'carlosanselmi3@hotmail.com',
            'password' => bcrypt('19901020')
        ]);
    }
}
