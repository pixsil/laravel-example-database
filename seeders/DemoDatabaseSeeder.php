<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DemoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cars')->insert([
            [
                'id' => 1,
                'name' => 'Fast car',
                'description' => 'Red car with a blue window',
                'brand_id' => 1,
                'build_year' => 2012,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Big John',
                'description' => 'One of its kind!',
                'brand_id' => 2,
                'build_year' => 1980,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Stone wheel car',
                'description' => 'Not comfortable',
                'brand_id' => 1,
                'build_year' => 1801,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Spaceship look o like',
                'description' => 'Crashes a lot',
                'brand_id' => 3,
                'build_year' => 2060,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('driving_logs')->insert([
            [
                'id' => 1,
                'car_id' => 1,
                'from' => 'London',
                'to' => 'Paris',
                'mileage' => 200,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'car_id' => 1,
                'from' => 'Amsterdam',
                'to' => 'New York',
                'mileage' => 443,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'car_id' => 2,
                'from' => 'Paris',
                'to' => 'Hawaii',
                'mileage' => 532,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'car_id' => 2,
                'from' => 'Lisbon',
                'to' => 'Hong Kong',
                'mileage' => 356,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'car_id' => 3,
                'from' => 'Rome',
                'to' => 'Hawaii',
                'mileage' => 456,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'car_id' => 3,
                'from' => 'Boston',
                'to' => 'New York',
                'mileage' => 864,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'car_id' => 4,
                'to' => 'Dublin',
                'from' => 'Amsterdam',
                'mileage' => 493,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'car_id' => 4,
                'from' => 'New York',
                'to' => 'Lisabon',
                'mileage' => 145,
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('brands')->insert([
            [
                'id' => 1,
                'name' => 'Volkswagen',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Mercedes',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Fiat',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('features')->insert([
            [
                'id' => 1,
                'name' => 'Airbags',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Spoiler',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Nitrogen',
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
        DB::table('car_feature')->insert([
            [
                'id' => 1,
                'car_id' => 1,
                'feature_id' => 2,
            ],
            [
                'id' => 2,
                'car_id' => 1,
                'feature_id' => 3,
            ],
            [
                'id' => 3,
                'car_id' => 2,
                'feature_id' => 2,
            ],
            [
                'id' => 4,
                'car_id' => 3,
                'feature_id' => 1,
            ],
            [
                'id' => 5,
                'car_id' => 3,
                'feature_id' => 2,
            ],
            [
                'id' => 6,
                'car_id' => 3,
                'feature_id' => 3,
            ],
            [
                'id' => 7,
                'car_id' => 4,
                'feature_id' => 3,
            ],
        ]);
    }
}
