<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('customers')->insert([
            [
            'name' => 'Gytis',
            'surname' => 'Laukaitis',
            'email' => 'gytislaukaitis@gmail.com',
            'phone' => '860235995',
            'country_id' => '2',
            ],
            [
                'name' => 'Vincentas',
                'surname' => 'Jankauskas',
                'email' => 'vincenas@gmail.com',
                'phone' => '846280169',
                'country_id' => '1',
                ],
                [
                    'name' => 'Eligijus',
                    'surname' => 'Kateiva',
                    'email' => 'eligijva@gmail.com',
                    'phone' => '862748706',
                    'country_id' => '1',
                    ],
                    [
                        'name' => 'Liu',
                        'surname' => 'E veliz',
                        'email' => 'nhs5x850nz@temporary-mail.net',
                        'phone' => '734235678',
                        'country_id' => '4',
                        ],
                        [
                            'name' => 'Jose',
                            'surname' => 'Carlos Muñoz',
                            'email' => 'carlos@gmail.com',
                            'phone' => '734835995',
                            'country_id' => '4',
                            ],
                            [
                                'name' => 'Agustina',
                                'surname' => 'Joaquín',
                                'email' => 'whimsy@comcast.net',
                                'phone' => '6879235995',
                                'country_id' => '1',
                                ],
                                [
                                    'name' => 'Vladimir',
                                    'surname' => 'Putin',
                                    'email' => 'hahsler@hotmail.com',
                                    'phone' => '000000000000',
                                    'country_id' => '6',
                                    ],
                                    [
                                        'name' => 'Moskovskaya',
                                        'surname' => 'Absolutovna',
                                        'email' => 'tbeck@me.com',
                                        'phone' => '111111111',
                                        'country_id' => '6',
                                        ],
                                        [
                                            'name' => 'Vadims',
                                            'surname' => 'Karnickis',
                                            'email' => 'drolsky@yahoo.ca',
                                            'phone' => '597668942',
                                            'country_id' => '5',
                                            ],
        ]);
    }
}