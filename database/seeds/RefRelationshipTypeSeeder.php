<?php

use Illuminate\Database\Seeder;

class RefRelationshipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RefRelationshipType::class, 3)->create();
    }
}
