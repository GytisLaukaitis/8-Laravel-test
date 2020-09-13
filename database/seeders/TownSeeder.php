<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
        DB::table('towns')->insert([
            [
            'title' => 'Vilnius',
            'population' => '544386',
            'country_id' => '2',
            ],
            [
                'title' => 'Marijampolė',
                'population' => '34975',
                'country_id' => '2',
                ],
                [
                    'title' => 'Wroclaw',
                    'population' => '632067',
                    'country_id' => '3',
                    ],
                    [
                        'title' => 'Suvalkai',
                        'population' => '69527',
                        'country_id' => '3',
                        ],
                        [
                            'title' => 'Buenos Aires',
                            'population' => '2890000',
                            'country_id' => '1',
                            ],
                            [
                                'title' => 'Rio Negras',
                                'population' => '688873',
                                'country_id' => '1',
                                ],
                                [
                                    'title' => 'Barcelona',
                                    'population' => '5575000',
                                    'country_id' => '4',
                                    ],
                                    [
                                        'title' => 'Madrid',
                                        'population' => '6642000',
                                        'country_id' => '4',
                                        ],
                                        [
                                            'title' => 'Zagrebo',
                                            'population' => '806341',
                                            'country_id' => '5',
                                            ],
                                            [
                                                'title' => 'Bakar',
                                                'population' => '113018',
                                                'country_id' => '5',
                                                ],
                                                [
                                                    'title' => 'Moscow',
                                                    'population' => '11920000',
                                                    'country_id' => '6',
                                                    ],
                                                    [
                                                        'title' => 'St. Petersburg',
                                                        'population' => '4491000',
                                                        'country_id' => '6',
                                                        ],
        ]);
    }
}
