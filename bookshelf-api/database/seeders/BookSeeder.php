<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    public function run(): void
    {
        $genreIds = Genre::pluck('id', 'name');

        $books = [
            // Fantasy
            ['genre' => 'Fantasy', 'title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'pages' => 310, 'status' => 'finished', 'rating' => 5],
            ['genre' => 'Fantasy', 'title' => 'A Game of Thrones', 'author' => 'George R.R. Martin', 'pages' => 694, 'status' => 'reading', 'rating' => null],
            ['genre' => 'Fantasy', 'title' => 'The Name of the Wind', 'author' => 'Patrick Rothfuss', 'pages' => 662, 'status' => 'to_read', 'rating' => null],

            // Science Fiction
            ['genre' => 'Science Fiction', 'title' => 'Dune', 'author' => 'Frank Herbert', 'pages' => 412, 'status' => 'finished', 'rating' => 5],
            ['genre' => 'Science Fiction', 'title' => 'The Martian', 'author' => 'Andy Weir', 'pages' => 369, 'status' => 'finished', 'rating' => 4],
            ['genre' => 'Science Fiction', 'title' => 'Neuromancer', 'author' => 'William Gibson', 'pages' => 271, 'status' => 'to_read', 'rating' => null],

            // Romance
            ['genre' => 'Romance', 'title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'pages' => 279, 'status' => 'finished', 'rating' => 4],
            ['genre' => 'Romance', 'title' => 'Me Before You', 'author' => 'Jojo Moyes', 'pages' => 369, 'status' => 'reading', 'rating' => null],
            ['genre' => 'Romance', 'title' => 'The Notebook', 'author' => 'Nicholas Sparks', 'pages' => 214, 'status' => 'to_read', 'rating' => null],

            // Mystery
            ['genre' => 'Mystery', 'title' => 'And Then There Were None', 'author' => 'Agatha Christie', 'pages' => 272, 'status' => 'finished', 'rating' => 5],
            ['genre' => 'Mystery', 'title' => 'The Girl with the Dragon Tattoo', 'author' => 'Stieg Larsson', 'pages' => 465, 'status' => 'finished', 'rating' => 4],
            ['genre' => 'Mystery', 'title' => 'Gone Girl', 'author' => 'Gillian Flynn', 'pages' => 415, 'status' => 'reading', 'rating' => null],
        ];

        foreach ($books as $book) {
            Book::create([
                'genre_id'   => $genreIds[$book['genre']],
                'title'      => $book['title'],
                'author'     => $book['author'],
                'pages'      => $book['pages'],
                'status'     => $book['status'],
                'rating'     => $book['rating'],
            ]);
        }

    }
}
