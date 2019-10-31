<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Categoría principal',
            'description' => 'Categoría totalmente relevante para poder concretar el circuito',
            'color' => 'rgba(145,0,241,0.98)',
            'is_active' => 1,
            'slug' => 'categoria-principal'
        ]);
    }
}
