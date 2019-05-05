<?php

use Illuminate\Database\Seeder;

class RefAddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RefAddressType::class, 5)->create();
    }
}
