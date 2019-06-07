<?php

use Illuminate\Database\Seeder;

class SubcommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subcomments::class, 10)->create();
    }
}
