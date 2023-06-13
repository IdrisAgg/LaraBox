<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dessert;
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

        Dessert::create([
            'tauxSucre'=>'10%'
        ]);
        Dessert::create([
            'tauxSucre'=>'50%'
        ]);
        Dessert::create([
            'tauxSucre'=>'70%'
        ]);
        Dessert::create([
            'tauxSucre'=>'5%'
        ]);
        Dessert::create([
            'tauxSucre'=>'0%'
        ]);


        Item::create([
            'name'=>'ToriDon',
            'description'=>'Poulet grillé et mariné 24h, accompagné de son riz blanc parfaitement cuit.',
            'price'=>'7',
            'entree_id'=>'1',
        ]);
        Item::create([
            'name'=>'Edamame',
            'description'=>'Haricot japonais',
            'price'=>'3.50',
            'entree_id'=>'2',

        ]);
        Item::create([
            'name'=>'Takoyaki',
            'description'=>'Boulette de poulpe fondant et cremeux',
            'price'=>'7',
            'entree_id'=>'3',

        ]);
        Item::create([
            'name'=>'Gyoza',
            'description'=>'Raviolis japonais moelleux et légèrement grillé, coustillant à souhait.',
            'price'=>'7',
            'entree_id'=>'4',

        ]);
        Item::create([
            'name'=>'Kaarage',
            'description'=>"Poulet frit, composé d'une chapelure ''panco''",
            'price'=>'8',
            'entree_id'=>'5',

        ]);

        Item::create([
            'name'=>'Shio paitan',
            'description'=>"Bouillon crémeux et léger, texture epaisse, fort en gout de poulet, légèrement citroné",
            'price'=>'14',
            'plat_id'=>'1',

        ]);

        Item::create([
            'name'=>'Kurogoma',
            'description'=>"Bouillon corsé en sésame noir, crémeux et léger, ",
            'price'=>'8',
            'plat_id'=>'2',

        ]);

        Item::create([
            'name'=>'Niboshi Paitan',
            'description'=>"Bouillon préparé avec une infusion de sardine, gout prononcé et salé, texture crémeuse et légère ",
            'price'=>'8',
            'plat_id'=>'3',

        ]);

        Item::create([
            'name'=>'Shio ramen',
            'description'=>"Bouillon claire et très légé, légèrement salé subtile en gout de poulet",
            'price'=>'8',
            'plat_id'=>'4',

        ]);

        Item::create([
            'name'=>'Tan Tan men',
            'description'=>"Bouillon végétatien, mijoté avec 12 légumes de saison, très riche en gout ",
            'price'=>'8',
            'plat_id'=>'5',

        ]);

        Item::create([
            'name'=>'Dorayaki',
            'description'=>"Pancake japonais fourré au thé matcha",
            'price'=>'4',
            'dessert_id'=>'1',
        ]);
        Item::create([
            'name'=>'Mochi',
            'description'=>"Gateau a base de pate de riz, fourré au fruit",
            'price'=>'3',
            'dessert_id'=>'2',
        ]);
        Item::create([
            'name'=>'Cheesecake-Yuzu',
            'description'=>"Cheesecake parfumé avec le yuzu, un agrume local dont les saveurs se situent entre la mandarine et le citron",
            'price'=>'6',
            'dessert_id'=>'3',
        ]);
        Item::create([
            'name'=>'Tiramissu Matcha',
            'description'=>"Délicat et équilibré combinant les saveurs du mascarpone et du matcha.",
            'price'=>'7',
            'dessert_id'=>'4',
        ]);
        Item::create([
            'name'=>'Dango',
            'description'=>"Cette petite brochette composée de trois boules faites de riz gluant apportera le printemps dans votre assiette",
            'price'=>'5',
            'dessert_id'=>'5',
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
