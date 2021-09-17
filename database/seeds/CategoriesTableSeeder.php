<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['gialli', 'verdi', 'rossi', 'blu', 'viola'];

        foreach($categories as $category){
            //creare l'istanza
            $newCategory = new Category();

            // popolare i dati
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($category,'-');
            
            // salvare i dati
            $newCategory->save();
            
        }
    }
}
