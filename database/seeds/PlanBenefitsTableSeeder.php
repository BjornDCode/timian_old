<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlanBenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plan_benefits')->insert([
            'plan_id' => 1,
            'value' => 'Nullam quis risus eget urna mollis ornare vel eu leo',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 1,
            'value' => 'Donec sed odio dui',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 1,
            'value' => 'Cras justo odio, dapibus ac facilisis in',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('plan_benefits')->insert([
            'plan_id' => 2,
            'value' => 'Vegestas eget quam',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 2,
            'value' => 'Sed posuere consectetur est at lobortis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 2,
            'value' => 'Cum sociis natoque penatibus et magnis dis parturient montes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 2,
            'value' => 'Anascetur ridiculus mus',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('plan_benefits')->insert([
            'plan_id' => 3,
            'value' => 'Donec ullamcorper nulla non metus auctor fringilla',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 3,
            'value' => 'Cum sociis natoque penatibus et magnis dis parturient montes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 3,
            'value' => 'Anteger posuere erat a ante venenatis dapibus posuere velit aliquet',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 3,
            'value' => 'Donec id elit non mi porta gravida at eget metus',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('plan_benefits')->insert([
            'plan_id' => 3,
            'value' => 'Praesent commodo cursus magna',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
