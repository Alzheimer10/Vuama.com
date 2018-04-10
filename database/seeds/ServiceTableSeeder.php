<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
        	'name'	=> 'Otros',
        	'description'	=> 'Para cualquier servicio que no posea una caracteristica definida.'
        ]);
    }
}
