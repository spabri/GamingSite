<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederProva extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Gioco1',
            'category' => 'categoria1',
            'user_id' => 1,
            'body' => 'testo1',
            'price'=> 99.99,
            'img' => '/images/gioco1.png'
        ]);
        Article::create([
            'title' => 'Gioco2',
            'category' => 'categoria2',
            'user_id' => 1,
            'body' => 'testo2',
            'price'=> 109.99,

            'img' => '/images/gioco2.png'
        ]);
        Article::create([
            'title' => 'Gioco3',
            'category' => 'categoria3',
            'user_id' => 1,
            'body' => 'testo3',
            'price'=> 69.99,
            'img' => '/images/gioco3.jpg'
        ]);
        
    }
}
    