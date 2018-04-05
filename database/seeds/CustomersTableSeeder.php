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
            'lastname'  =>  'Anselmi',
            'status'    =>  1,
            'confirmed' =>  false,
            'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione hic atque ad repudiandae, iste illum. Libero excepturi accusantium doloribus consequuntur, temporibus quibusdam consequatur consectetur corporis, sunt provident minus, deleniti odio.',
            'email' => 'carlosanselmi3@hotmail.com',
            'password' => bcrypt('19901020')
        ]);
    }
}
