<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PickupPointsTableSeeder extends Seeder
{
    public function run()
    {
        $points = [
            [
                'region' => 'timur',
                'title' => 'Hotel Dafam Pacific Caesar T1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '20:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'region' => 'timur',
                'title' => 'Hotel Dafam Pacific Caesar T2',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 4,
                'seats_t' => 4
            ],
            [
                'region' => 'barat',
                'title' => 'Hotel Dafam Pacific Caesar B1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'region' => 'selatan',
                'title' => 'Hotel Dafam Pacific Caesar S1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'region' => 'pusat',
                'title' => 'Hotel Dafam Pacific Caesar P1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'region' => 'pusat',
                'title' => 'Hotel Dafam Pacific Caesar P2',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16:00:00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ]
        ];

        DB::table('pickup_points')->insert($points);
    }
}
