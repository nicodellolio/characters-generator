<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $character = new Character();

            $character->name = $faker->firstNameMale();
            $character->description = $faker->sentence(15);
            $character->attack = $faker->numberBetween(50, 99);
            $character->defense = $faker->numberBetween(10, 99);
            $character->speed = $faker->numberBetween(10, 99);
            $character->save();
        }
    }
}
