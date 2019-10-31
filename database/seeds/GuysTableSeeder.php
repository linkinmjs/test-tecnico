<?php

use Illuminate\Database\Seeder;

class GuysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guys')->insert([
            'name' => 'Mauricio Stampella',
            'position' => 'Developer',
            'task_id' => 1
        ]);
    }
}
