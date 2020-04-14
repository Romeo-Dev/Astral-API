<?php

use Illuminate\Database\Seeder;

class ExpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Expirience::class, 40)->create();
    }
}
