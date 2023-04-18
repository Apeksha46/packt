<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use File;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();
        $data = File::get("database/data/books.json");
        $books = json_decode($data);

        foreach($books->data as $book){
            DB::table('books')->insert([
                [
                    'title' => $book->title,
                    'author' => $book->author,
                    'genre' => $book->genre,
                    "description" => $book->description,
                    "isbn" => $book->isbn,
                    "image" => $book->image,
                    "published" => $book->published,
                    "publisher" => $book->publisher,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]
            ]);
        };
    }
}
