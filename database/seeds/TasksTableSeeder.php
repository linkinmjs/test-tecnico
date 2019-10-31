<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Desarrollo',
            'description' => 'Concretar prueba tecnica',
            'category_id' => 1,
            'is_compleated' => 0
        ]);
    }
}
