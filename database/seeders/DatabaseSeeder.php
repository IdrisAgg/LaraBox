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
use App\Models\Specialisation;
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
            'password' => bcrypt("mdpmdpmdp"),
        ]);

        User::create([
            'name' => 'Idris',
            'email' => 'idris@gmail.com',
            'isAdmin' => '0',
            'password' => bcrypt("mdpmdpmdp"),
        ]);

        //restaurents::factory(10)->create();

        Specialisation::create([
            'nom' => 'Ramen',
            'tempsXp' => '10 ans',

        ]);
        Specialisation::create([
            'nom' => 'Udon',
            'tempsXp' => '7 ans',
        ]);

        restaurent::create([
            'nom' => 'kodawari-Ramen Yokocho',
            'ville' => 'Paris',
            'adresse' => '26 rue Mazarine',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.1875519103205!2d2.3359149156742665!3d48.854633879287185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d8cee50be3%3A0xe73cffb0381b3105!2sKodawari%20Ramen%20(Yokoch%C5%8D)!5e0!3m2!1sfr!2sfr!4v1686752642477!5m2!1sfr!2sfr",
            'image' => '/images/Kodawari_Ramen_Yaokocho.jpg',
            'spe_id'=>'1'
        ]);

        restaurent::create([
            'nom' => 'Udon Jubei',
            'ville' => 'Paris',
            'adresse' => '39 Rue Sainte-Anne',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:15',
            'numero' => '01 40 15 92 54',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10498.26940897338!2d2.335525!3d48.86646!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2534c93697%3A0xec71142f395db4e6!2sUdon%20Jubey!5e0!3m2!1sfr!2sfr!4v1688386758351!5m2!1sfr!2sfr",
            'image' => '/images/jubey.jpg',
            'spe_id'=>'2'

        ]);

        restaurent::create([
            'nom' => 'kodawari-Ramen Tsukiji',
            'ville' => 'Paris',
            'adresse' => '12, rue de Richelieu ',
            'horaireDebut' => '12:30',
            'horaireFin' => '23:30',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6784314295573!2d2.3336702762339123!3d48.864342071332956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ff5e668ed99%3A0x17f9a41c53f5e4ce!2sKodawari%20Ramen%20(Tsukiji)!5e0!3m2!1sfr!2sfr!4v1686753079952!5m2!1sfr!2sfr",
            'image' => '/images/kodawaro_ramen_tsujiki.jpg',
            'spe_id'=>'1'

        ]);

        restaurent::create([
            'nom' => 'Kadoya',
            'ville' => 'Paris',
            'adresse' => '28 rue Saint-Anne',
            'horaireDebut' => '12:30',
            'horaireFin' => '22:30',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.578733561249!2d2.3307311873653798!3d48.86624299741801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e0cc0a699d%3A0x9171b3e2fcc449ef!2sKadoya!5e0!3m2!1sfr!2sfr!4v1686753030398!5m2!1sfr!2sfr",
            'image' => '/images/Kadoya.jpg',
            'spe_id'=>'1'

        ]);

        restaurent::create([
            'nom' => 'Ippudo',
            'ville' => 'Paris',
            'adresse' => '76 Rue Jean-Jacques Rousseau',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:00',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10498.670399042692!2d2.3256584871581962!3d48.86454860000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e229af33599%3A0xdb688f7b1c4c4719!2sIppudo%20Louvre!5e0!3m2!1sfr!2sfr!4v1686752976045!5m2!1sfr!2sfr",
            'image' => '/images/ippudo.jpg',
            'spe_id'=>'1'
        ]);

        restaurent::create([
            'nom' => 'Umami-Ramen',
            'ville' => 'Bordeaux',
            'adresse' => '8 Pl. Fernand Lafargue',
            'horaireDebut' => '12:00',
            'horaireFin' => '22:30',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.249045614287!2d-0.5766291142787224!3d44.83686129647832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527cf0d74eb63%3A0xce7ad8bf3f81685f!2sUmami%20ramen!5e0!3m2!1sfr!2sfr!4v1686752927412!5m2!1sfr!2sfr",
            'image' => '/images/umami.jpg',
            'spe_id'=>'1'

        ]);

        restaurent::create([
            'nom' => 'Noodle-Bar',
            'ville' => 'Bordeaux',
            'adresse' => '37 Rue Saint-Rémi',
            'horaireDebut' => '11:30',
            'horaireFin' => '23:00',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.0289259933247!2d-0.5749674240086172!3d44.84134427107066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d06fadd8bb%3A0xc1bc78e6af2abb9b!2sFufu%20Ramen!5e0!3m2!1sfr!2sfr!4v1686752854609!5m2!1sfr!2sfr",
            'image' => '/images/fufu.jpg',
            'spe_id'=>'1'

        ]);

        restaurent::create([
            'nom' => 'Ebisu',
            'ville' => 'Bordeaux',
            'adresse' => '265 Rue Sainte-Catherine',
            'horaireDebut' => '11:30',
            'horaireFin' => '22:30',
            'numero' => '01.01.01.01.01',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2897397.6893590153!2d-5.450905487499984!3d44.83195499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527c87620b8c1%3A0x3fa226b04d177247!2sEbisu!5e0!3m2!1sfr!2sfr!4v1686752792624!5m2!1sfr!2sfr",
            'image' => '/images/ebisu.jpg',
            'spe_id'=>'1'
        ]);

        restaurent::create([
            'nom' => 'Sanukiya',
            'ville' => 'Paris',
            'adresse' => "9 Rue d'Argenteui",
            'horaireDebut' => '11:30',
            'horaireFin' => '22:30',
            'numero' => ' 01 42 60 52 61',
            'localisation' => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10498.634861313372!2d2.333787!3d48.864718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2f886ab119%3A0x788e359dee972d2!2sSanukiya!5e0!3m2!1sfr!2sfr!4v1688388325702!5m2!1sfr!2sfr",
            'image' => '/images/Sanukiya.jpg',
            'spe_id'=>'2'
        ]);


        Entree::create([
            'nom' => 'Kaarage'
        ]);
        Entree::create([
            'nom' => 'Takoyaki'
        ]);
        Entree::create([
            'nom' => 'ToriDon'
        ]);
        Entree::create([
            'nom' => 'Edamame'
        ]);
        Entree::create([
            'nom' => 'Gyoza'
        ]);






        Item::create([
            'name' => 'Shio paitan',
            'description' => "Bouillon crémeux et léger, texture epaisse, fort en gout de poulet, légèrement citroné",
            'price' => '14',
            'resto_id' => '1'

        ]);

        Item::create([
            'name' => 'Kurogoma',
            'description' => "Bouillon corsé en sésame noir, crémeux et léger, ",
            'price' => '8',
            'resto_id' => '1'


        ]);

        Item::create([
            'name' => 'Niboshi Paitan',
            'description' => "Bouillon préparé avec une infusion de sardine, gout prononcé et salé, texture crémeuse et légère ",
            'price' => '8',
            'resto_id' => '1'

        ]);

        Item::create([
            'name' => 'Shio ramen',
            'description' => "Bouillon claire et très légé, légèrement salé subtile en gout de poulet",
            'price' => '8',
            'resto_id' => '1'

        ]);

        Item::create([
            'name' => 'Tan Tan men',
            'description' => "Bouillon végétatien, mijoté avec 12 légumes de saison, très riche en gout ",
            'price' => '8',
            'resto_id' => '1'

        ]);
        Item::create([
            'name' => 'Udon Curry',
            'description' => "Bouillon à base de curry piquant, boeuf finement tranché, bouillon tès riche en gout  ",
            'price' => '18',
            'resto_id' => '2'

        ]);
        Item::create([
            'name' => ' Tanuki Udon',
            'description' => "Bouillon très épais et gras, non piquant mais fort en assaissonnement",
            'price' => '15',
            'resto_id' => '2'

        ]);
        Item::create([
            'name' => 'Tempura Udon',
            'description' => "Udon claire, servi avec un tempura de crevette ",
            'price' => '18',
            'resto_id' => '2'

        ]);
        Item::create([
            'name' => 'Spicy udon',
            'description' => "Le udon le plus piquant, bouillon épais et riche en saveur ",
            'price' => '16',
            'resto_id' => '2'

        ]);
        Item::create([
            'name' => 'Niku udon',
            'description' => "Bouillon végétatien, mijoté avec 12 légumes de saison, très riche en gout ",
            'price' => '17',
            'resto_id' => '2'

        ]);
        Item::create([
            'name' => 'Royal Daurade',
            'description' => "Bouillon crémeux et léger, texture epaisse, fort en gout de poulet, légèrement citroné",
            'price' => '14',
            'resto_id' => '3'

        ]);

        Item::create([
            'name' => 'Dorayaki',
            'description' => "Pancake japonais fourré au thé matcha",
            'price' => '4',
            'resto_id' => '1'

        ]);

        Item::create([
            'name' => 'Mochi',
            'description' => "Gateau a base de pate de riz, fourré au fruit",
            'price' => '3',
            'resto_id' => '2'

        ]);

        Item::create([
            'name' => 'Cheesecake-Yuzu',
            'description' => "Cheesecake parfumé avec le yuzu, un agrume local dont les saveurs se situent entre la mandarine et le citron",
            'price' => '6',
            'resto_id' => '1'

        ]);

        Item::create([
            'name' => 'Tiramissu Matcha',
            'description' => "Délicat et équilibré combinant les saveurs du mascarpone et du matcha.",
            'price' => '2',
        ]);

        Item::create([
            'name' => 'Dango',
            'description' => "Cette petite brochette composée de trois boules faites de riz gluant apportera le printemps dans votre assiette",
            'price' => '5',
            'resto_id' => '2'
        ]);

        Plat::create([
            'item_id' => '1',
            'gras' => 'peu',
            'lvlPiment' => 'faible',
        ]);
        Plat::create([
            'item_id' => '2',
            'gras' => 'beaucoup',
            'lvlPiment' => 'faible',
        ]);
        Plat::create([
            'item_id' => '3',
            'gras' => 'peaucoup',
            'lvlPiment' => 'très fort',
        ]);
        Plat::create([
            'item_id' => '4',
            'gras' => 'beaucoup',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '5',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '6',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '7',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '8',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '9',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '10',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);
        Plat::create([
            'item_id' => '11',
            'gras' => 'peu',
            'lvlPiment' => 'moyen',
        ]);

        Dessert::create([
            'item_id' => '12',
            'tauxSucre' => '10%'
        ]);
        Dessert::create([
            'item_id' => '13',
            'tauxSucre' => '50%'
        ]);
        Dessert::create([
            'item_id' => '14',
            'tauxSucre' => '70%'
        ]);
        Dessert::create([
            'item_id' => '15',
            'tauxSucre' => '5%'
        ]);
        Dessert::create([
            'item_id' => '16',
            'tauxSucre' => '0%'
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
