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
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.1875519103205!2d2.3359149156742665!3d48.854633879287185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d8cee50be3%3A0xe73cffb0381b3105!2sKodawari%20Ramen%20(Yokoch%C5%8D)!5e0!3m2!1sfr!2sfr!4v1686752642477!5m2!1sfr!2sfr",
            'image'=> '/images/Kodawari_Ramen_Yaokocho.jpg',
        ]);

        restaurent::create([
            'nom' => 'Kintaro',
            'ville' => 'Paris',
            'adresse' => '24 Rue Saint-Augustin',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:15',
            'numero'=> '01 47 42 13 14',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20997.42823325844!2d2.3156456357807076!3d48.86434020794388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3a886e99b5%3A0x1e3e11397842cf55!2sKintaro!5e0!3m2!1sfr!2sfr!4v1686753119730!5m2!1sfr!2sfr",
            'image'=> '/images/kintaro.jpg',
        ]);

        restaurent::create([
            'nom' => 'kodawari-Ramen Tsukiji',
            'ville' => 'Paris',
            'adresse' => '12, rue de Richelieu ',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6784314295573!2d2.3336702762339123!3d48.864342071332956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ff5e668ed99%3A0x17f9a41c53f5e4ce!2sKodawari%20Ramen%20(Tsukiji)!5e0!3m2!1sfr!2sfr!4v1686753079952!5m2!1sfr!2sfr",
            'image'=> '/images/kodawaro_ramen_tsujiki.jpg',

        ]);

        restaurent::create([
            'nom' => 'Kadoya',
            'ville' => 'Paris',
            'adresse' => '28 rue Saint-Anne',
            'horaireDebut' => '12:30',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.578733561249!2d2.3307311873653798!3d48.86624299741801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e0cc0a699d%3A0x9171b3e2fcc449ef!2sKadoya!5e0!3m2!1sfr!2sfr!4v1686753030398!5m2!1sfr!2sfr",
            'image'=> '/images/Kadoya.jpg',

        ]);

        restaurent::create([
            'nom' => 'Ippudo',
            'ville' => 'Paris',
            'adresse' => '76 Rue Jean-Jacques Rousseau',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:00',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10498.670399042692!2d2.3256584871581962!3d48.86454860000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e229af33599%3A0xdb688f7b1c4c4719!2sIppudo%20Louvre!5e0!3m2!1sfr!2sfr!4v1686752976045!5m2!1sfr!2sfr",
            'image'=> '/images/ippudo.jpg',
        ]);

        restaurent::create([
            'nom' => 'Umami-Ramen',
            'ville' => 'Bordeaux',
            'adresse' => '8 Pl. Fernand Lafargue',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.249045614287!2d-0.5766291142787224!3d44.83686129647832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cf0d74eb63%3A0xce7ad8bf3f81685f!2sUmami%20ramen!5e0!3m2!1sfr!2sfr!4v1686752927412!5m2!1sfr!2sfr",
            'image'=> '/images/umami.jpg',

        ]);

        restaurent::create([
            'nom' => 'Noodle-Bar',
            'ville' => 'Bordeaux',
            'adresse' => '37 Rue Saint-Rémi',
            'horaireDebut' => '11:30',
            'horaireFin' => '23:00',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0289259933247!2d-0.5749674240086172!3d44.84134427107066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d06fadd8bb%3A0xc1bc78e6af2abb9b!2sFufu%20Ramen!5e0!3m2!1sfr!2sfr!4v1686752854609!5m2!1sfr!2sfr",
            'image'=> '/images/fufu.jpg',

        ]);

        restaurent::create([
            'nom' => 'Ebisu',
            'ville' => 'Bordeaux',
            'adresse' => '265 Rue Sainte-Catherine',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:30',
            'numero'=> '01.01.01.01.01',
            'localisation'=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897397.6893590153!2d-5.450905487499984!3d44.83195499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527c87620b8c1%3A0x3fa226b04d177247!2sEbisu!5e0!3m2!1sfr!2sfr!4v1686752792624!5m2!1sfr!2sfr",
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
