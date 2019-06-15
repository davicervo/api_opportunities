<?php

use Illuminate\Database\Seeder;

class WorksSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Works::class, 75)->create()->each(function ($work) {
            $work->save();
        });
    }
}
