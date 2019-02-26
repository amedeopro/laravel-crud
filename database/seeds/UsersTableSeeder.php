<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //qui posso creare un nuovo record nel database singolarmente o tramite un array di array
        for ($i=0; $i < 100 ; $i++) {
          $newUser = new User;

          $newUser->name = $faker->firstName;
          $newUser->lastname = $faker->lastName;
          $newUser->age = rand(10,90);

          $newUser->save();
        }
    }
}
