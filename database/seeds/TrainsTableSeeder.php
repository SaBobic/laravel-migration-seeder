<?php

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $train = new Train();
            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'Frecciarossa']);
            $train->stazione_partenza = $faker->randomElement(['Firenze Santa Maria Novella', 'Prato Centrale', 'Pisa']);
            $train->stazione_arrivo = $faker->randomElement(['Roma Termini', 'Roma Tiburtina']);
            $train->orario_partenza = $faker->time('H:i');
            $train->orario_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->isbn10();
            $train->numero_carrozze = $faker->numberBetween(0, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}