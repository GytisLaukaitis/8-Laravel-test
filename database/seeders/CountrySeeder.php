<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('countries')->insert([
            [
            'title' => 'Argentina',
            'description' => 'Labai gera šalis.',
            'distance' => '17250',
            ],
            [
                'title' => 'Lietuva',
                'description' => 'Būna ir geriau.',
                'distance' => '150',
                ],
                [
                    'title' => 'Lenkija',
                    'description' => 'Kaip ir kaimynai.',
                    'distance' => '300',
                    ],
                    [
                        'title' => 'Ispanija',
                        'description' => 'Šilta ir smagu.',
                        'distance' => '4500',
                        ],
                        [
                            'title' => 'Kroatija',
                            'description' => 'Hmm ,ką galiu pasakyt....',
                            'distance' => '1623',
                            ],
                            [
                                'title' => 'Rusija',
                                'description' => 'Ten gyvena Putinas',
                                'distance' => '1050',
                                ],
        ]);
    }
}
