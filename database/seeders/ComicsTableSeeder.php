<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');
        foreach($data as $comic){
            $newComic = new Comic();
            $newComic->title= $comic['title'];
            $newComic->description= $comic['description'];
            $newComic->price= $comic['price'];
            $newComic->series= $comic['series'];
            $newComic->sale_date= $comic['sale_date'];
            $newComic->type= $comic['type'];
            $newComic->image= $comic['thumb'];
            $newComic->save();
        }
    }
}
