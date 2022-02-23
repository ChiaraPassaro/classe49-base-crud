<?php

use Faker\Generator as Faker;
use App\Keyboard;
use Illuminate\Database\Seeder;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 200; $i++) {
            $newKeyboard = new Keyboard();
            $newKeyboard->sku = $faker->ean13();
            $newKeyboard->name = $faker->words(3, true);
            $newKeyboard->features =  $faker->paragraphs(3, true);
            $newKeyboard->switches = $faker->words(3, true);
            $newKeyboard->keycaps = $faker->words(2, true);
            $newKeyboard->photo = $faker->imageUrl(640, 480, 'keyboards', true);
            $newKeyboard->price = $faker->randomFloat(1, 20, 100);

            $newKeyboard->save();
        }
    }
}
