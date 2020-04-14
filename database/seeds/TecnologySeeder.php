<?php

use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Tecnology::class, 15)->create();
    }
}
