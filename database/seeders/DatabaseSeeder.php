<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Entree;
use App\Models\Item;
use App\Models\Plat;
use Illuminate\Database\Seeder;
use App\Models\Restaurent;
use App\Models\Selection;
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
             'name' => 'AdminIdris',
             'email' => 'admin@gmail.com',
             'isAdmin' => '1',
             'password' =>bcrypt("mdpmdpmdp"),
         ]);

         User::create([
            'name' => 'Idris',
            'email' => 'idris@gmail.com',
            'isAdmin' => '0',
            'password' =>bcrypt("mdpmdpmdp"),
        ]);

         //restaurents::factory(10)->create();

        restaurent::create([
            'nom' => 'kodawari-Ramen Yokocho',
            'ville' => 'Paris',
            'adresse' => '26 rue Mazarine',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/Kodawari_Ramen_Yaokocho.jpg',
        ]);

        restaurent::create([
            'nom' => 'Kintaro',
            'ville' => 'Paris',
            'adresse' => '24 Rue Saint-Augustin',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:15',
            'numero'=> '01 47 42 13 14',
            'image'=> '/images/kintaro.jpg',
        ]);

        restaurent::create([
            'nom' => 'kodawari-Ramen Tsukiji',
            'ville' => 'Paris',
            'adresse' => '12, rue de Richelieu ',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/kodawaro_ramen_tsujiki.jpg',

        ]);

        restaurent::create([
            'nom' => 'Kadoya',
            'ville' => 'Paris',
            'adresse' => '28 rue Saint-Anne',
            'horaireDebut' => '12:30',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/Kadoya.jpg',

        ]);

        restaurent::create([
            'nom' => 'Ippudo',
            'ville' => 'Paris',
            'adresse' => '76 Rue Jean-Jacques Rousseau',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:00',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/ippudo.jpg',
        ]);

        restaurent::create([
            'nom' => 'Umami-Ramen',
            'ville' => 'Bordeaux',
            'adresse' => '8 Pl. Fernand Lafargue',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/umami.jpg',

        ]);

        restaurent::create([
            'nom' => 'Noodle-Bar',
            'ville' => 'Bordeaux',
            'adresse' => '37 Rue Saint-Rémi',
            'horaireDebut' => '11:30',
            'horaireFin' => '23:00',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/fufu.jpg',

        ]);

        restaurent::create([
            'nom' => 'Ebisu',
            'ville' => 'Bordeaux',
            'adresse' => '265 Rue Sainte-Catherine',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'image'=> '/images/ebisu.jpg',

        ]);

        Plat::create([
            'gras' => 'peu',
            'lvlPiment' => 'faible',
        ]);
        Plat::create([
            'gras' => 'beaucoup',
            'lvlPiment' => 'faible',
        ]);
        Plat::create([
            'gras' => 'peaucoup',
            'lvlPiment' => 'très fort',
        ]);
        Plat::create([
            'gras' => 'beaucoup',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);


        Entree::create([
        ]);
        Entree::create([
        ]);
        Entree::create([
        ]);
        Entree::create([
        ]);
        Entree::create([
        ]);


        Item::create([
            'name'=>'ToriDon',
            'description'=>'',
            'price'=>'7',
            'entree_id'=>'1',
        ]);
        Item::create([
            'name'=>'Edamame',
            'description'=>'',
            'price'=>'3.50',
            'entree_id'=>'2',

        ]);
        Item::create([
            'name'=>'Takoyaki',
            'description'=>'',
            'price'=>'7',
            'entree_id'=>'3',

        ]);
        Item::create([
            'name'=>'Gyoza',
            'description'=>'',
            'price'=>'7',
            'entree_id'=>'4',

        ]);
        Item::create([
            'name'=>'Kaarage',
            'description'=>'',
            'price'=>'8',
            'entree_id'=>'5',

        ]);



        // Selection::create([
        //     'name'=>'selectKoda',
        //     'resto_id'=>'1',
        // ]);
        // Selection::create([
        //     'name'=>'selectUmami',
        //     'resto_id'=>'2',
        // ]);
        // Selection::create([
        //     'name'=>'selectIppudo',
        //     'resto_id'=>'3',
        // ]);
        // Selection::create([
        //     'name'=>'selectKinta',
        //     'resto_id'=>'4',
        // ]);




    }
}
