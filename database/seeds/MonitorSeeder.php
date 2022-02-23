<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Monitor;

class MonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $monitor = new Monitor();
            $monitor->brand = $faker->word();
            $monitor->model = $faker->words(3, true);
            $monitor->inches =  $faker->randomFloat(1, 20, 49);
            $monitor->resolution = '1920x1080';
            $monitor->frameRate =
                $faker->randomNumber(3, false);
            $monitor->lightness =
                $faker->randomNumber(2, false);
            $monitor->photo = $faker->imageUrl(640, 480, 'monitors', true);
            $monitor->price =  $faker->randomFloat(2, 50, 200);

            $monitor->save();
        }
    }
}
