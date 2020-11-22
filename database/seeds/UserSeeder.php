<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'Агент',
                'lastname' => 'Администрации',
                'nickname' => 'agent007',
                'namedisplay' => '1',
                'email' => 'admin@smykova-n.ru',
                'password' => Hash::make('........'),
                'about' => ''
            ],
            [
                'firstname' => 'Jack',
                'lastname' => 'Thursby',
                'nickname' => 'JackThursby',
                'namedisplay' => '3',
                'email' => 'smykov.03@gmail.com',
                'password' => Hash::make('........'),
                'about' => ''
            ],
            [
                'firstname' => 'Наталия',
                'lastname' => 'Смыкова',
                'nickname' => 'Nataly',
                'namedisplay' => '1',
                'email' => 'lybow75@ya.ru',
                'password' => Hash::make('........'),
                'about' => 'Я Смыкова Наталия, учитель-дефектолог, родилась 15 июля1975г. Закончила Высоковскую среднюю школу в 1992г. В этом же году поступила в Торжокское педагогическое училище. Закончила - в 1994г, получив диплом «Учитель начальных классов». В 1994г. Принята в Высоковскую среднюю школу в качестве учителя русского языка и литературы. В 2017г принята в МБДОУ №27 в качестве воспитателя. В 2018г принята вГКОУ Вышневолоцкая школа интернат №1, где и работаю в натоящее время.

Здесь будут собраны материалы по развитию зрительного восприятия, ориентировки в пространстве, социально-бытовой ориентировки, развитию тактильной чувствительности и мелкой моторики, полезные ссылки и многое другое. Материалы представлены как и из открытых источников с указанием автора.'
            ]
        ];
        factory(UserModel::class)->createMany($users);
        factory(UserModel::class, 100)->create();
    }
}
