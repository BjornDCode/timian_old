<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => 'personal',
            'price' => 29900,
            'description' => 'The perfect plan for freelancers and other individuals',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('plans')->insert([
            'name' => 'professional',
            'price' => 49900,
            'description' => 'The perfect plan for small businesses',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('plans')->insert([
            'name' => 'enterprise',
            'price' => 99900,
            'description' => 'The perfect plan for medium and large businesses',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
