<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\restaurent;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();

        User::create([
             'name' => 'Idris',
             'email' => 'idris@gmail.com',
             'password' =>bcrypt("mdpmdpmdp"),
         ]);

         //restaurents::factory(10)->create();

        restaurent::create([
            'nom' => 'kodawari-Ramen Yokocho',
            'ville' => 'Paris',
            'adresse' => '26 rue Mazarine',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
        ]);

        restaurent::create([
            'nom' => 'kodawari-Ramen Tsukiji',
            'ville' => 'Paris',
            'adresse' => '12, rue de Richelieu ',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
        ]);

        restaurent::create([
            'nom' => 'Kadoya',
            'ville' => 'Paris',
            'adresse' => '28 rue Saint-Anne',
            'horaireDebut' => '12:30',
            'horaireFin' => '22:30',
        ]);

        restaurent::create([
            'nom' => 'Ippudo',
            'ville' => 'Paris',
            'adresse' => '76 Rue Jean-Jacques Rousseau',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:00',
        ]);

    }
}
