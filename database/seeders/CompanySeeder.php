<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'ООО СК "ГЕФЕСТ"',
                'desc' => 'Строительство газопровода и подключения к линиям подачи газа в течении 30 дней!',
                'tel' => '+7 (913) 853-03-90',
                'telAdd' => '+7 (3822) 33-03-90',
                'email' => 'gefestcom@mail.ru',
                'address' => 'Томск, пр-кт Ленина 238',
                'navigator' => 'https://yandex.ru/maps/67/tomsk/?ll=84.936932%2C56.520623&mode=routes&rtext=~56.520623%2C84.936932&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNTExMDI0NjQzEjzQoNC-0YHRgdC40Y8sINCi0L7QvNGB0LosINC_0YDQvtGB0L_QtdC60YIg0JvQtdC90LjQvdCwLCAyMzgiCg2136lCFR8VYkI%2C&z=16.7',
                'wa' => '//wa.me/79138530390',
            ]
        ]);
    }
}
