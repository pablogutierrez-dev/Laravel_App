<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category1 = new Category;
        $category1->name = "Accion";
        $category1->description = "Categoria de peliculas de accion.";
        $category1->active = true;
        $category1->save();

        $category2 = new Category;
        $category2->name = "Comedia";
        $category2->description = "Categoria de peliculas de comedia.";
        $category2->active = true;
        $category2->save();

        $category3 = new Category;
        $category3->name = "Drama";
        $category3->description = "Categoria de peliculas dramaticas.";
        $category3->active = true;
        $category3->save();

        $category4 = new Category;
        $category4->name = "Terror";
        $category4->description = "Categoria de peliculas de terror.";
        $category4->active = true;
        $category4->save();

        $category5 = new Category;
        $category5->name = "Thriller";
        $category5->description = "Categoria de peliculas de intriga.";
        $category5->active = true;
        $category5->save();

    }
}
