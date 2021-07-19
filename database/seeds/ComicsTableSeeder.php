<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $item) {
            $comic = new Comic();
            $comic->title = $item['title'];
            $comic->description = $item['description'];
            $comic->thumb = $item['thumb'];
            $slug = Str::of($item['title'])->slug('-');
            $comic->slug = $slug;
            $comic->price = $item['price'];
            $comic->series = $item['series'];
            $comic->sale_date = $item['sale_date'];
            $comic->type = $item['type'];
            $comic->save();
        }
        
    }
}
