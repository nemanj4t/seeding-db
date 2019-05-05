<?php

use Illuminate\Database\Seeder;

class PropertyOwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\PropertyOwner::class, 100)->create()->each(function($owner) {
            $number_of_addresses = random_int(1, 4);
            for($i = 0; $i < $number_of_addresses; $i++) {
                $owner->addresses()->save(factory(App\Address::class)->make());
            }
        });
    }
}
