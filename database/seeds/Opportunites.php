<?php

use Illuminate\Database\Seeder;

class Opportunites extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Opportunites::class, 50)->create()->each(function ($opportunite) {
            $opportunite->save();
        });
    }
}
