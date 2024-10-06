<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Default cities data
         * |  1 | ООО СК "ГЕФЕСТ"            | Услуги по газификации и газоснабжению в Томске и Томской области. Подключение газа к частным домам и промышленным сооружениям. Поможем провести газ в дом под ключ по отличной цене 
         * |    |                            | +7 (913) 853-03-90
         * |    |                            | +7 (3822) 33-03-90
         * |    |                            | gefestcom@mail.ru
         * |    |                            | Томск, пр-кт Ленина 238
         * |    |                            | https://yandex.ru/maps/67/tomsk/?ll=84.936932%2C56.520623&mode=routes&rtext=~56.520623%2C84.936932&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNTExMDI0NjQzEjzQoNC-0YHRgdC40Y8sINCi0L7QvNGB0LosINC_0YDQvtGB0L_QtdC60YIg0JvQtdC90LjQvdCwLCAyMzgiCg2136lCFR8VYkI%2C&z=16.7 
         * |    |                            | //wa.me/79138530390
         * |    |                            | NULL 
         * |    |                            | NULL 

         */

        DB::table('cities')->insert([
            [
                'title' => 'ООО СК "ГЕФЕСТ" | Томск',
                'uri' => 'tomsk',
                'description' => 'Газификация в Томске: Мы предлагаем услуги по подключению газа к домам. Обращайтесь для получения качественных работ и выгодных предложений!',
                'phone' => '+7 (3822) 33-03-90',
                'wa' => 'https://wa.me/79138530390?text=Здравствуйте! Меня интересует газификация в Томске.',
                'address' => 'Томск, пр-кт Ленина 238',
                'worktime' => 'Томск',
                'email' => 'gefestcom@mail.ru',
            ],
            [
                'title' => 'ООО СК "ГЕФЕСТ" | Асино',
                'uri' => 'asino',
                'description' => 'Газификация в Асино: Услуги по подключению газа к домам и коммерческим объектам. Обращайтесь для консультаций и выгодных предложений!',
                'phone' => '+7 (913) 853-03-90',
                'wa' => 'https://wa.me/79138530390?text=Здравствуйте! Меня интересует газификация в Асино.',
                'address' => 'Асино',
                'worktime' => 'Асино',
                'email' => 'gefestcom@mail.ru',
            ],
        ]);
    }
}
