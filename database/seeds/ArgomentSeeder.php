<?php

use Illuminate\Database\Seeder;

class ArgomentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Argoment::class, 100)->create();
    }
}
