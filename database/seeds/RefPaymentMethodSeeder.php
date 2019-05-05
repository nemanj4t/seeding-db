<?php

use Illuminate\Database\Seeder;

class RefPaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\RefPaymentMethod', 5)->create();
    }
}
