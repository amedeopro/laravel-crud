<?php

use Illuminate\Database\Seeder;
use App\Work;
use Faker\Generator as Faker;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 100 ; $i++) {
        $newWork = new Work;

        $newWork->cliente = $faker->firstName;
        $newWork->lavoro = $faker->text(50);
        $newWork->assegnazione = $faker->firstName;

        $newWork->save();
      }
    }
}
