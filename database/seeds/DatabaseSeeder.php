<?php

use Illuminate\Database\Seeder;
use App\Livro;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::insert([
            [
                'titulo' => 'O Senhor dos Anéis',
                'paginas' => 1232,
                'autor' => 'J. R. R. Tolkien',
                'categoria' => 'Fantasia',
            ],[
                'titulo' => 'A Guerra dos Tronos',
                'paginas' => 888,
                'autor' => 'George R. R. Martin',
                'categoria' => 'Fantasia',
            ],[
                'titulo' => 'O Guia do Mochileiro das Galáxias',
                'paginas' => 208,
                'autor' => 'Douglas Adams',
                'categoria' => 'Ficção',
            ],[
                'titulo' => 'Cinquenta Tons de Cinza',
                'paginas' => 480,
                'autor' => 'E. L. James',
                'categoria' => 'Romance',
            ],[
                'titulo' => 'Cinquenta Tons de Liberdade',
                'paginas' => 544,
                'autor' => 'E. L. James',
                'categoria' => 'Romance',
            ]
        ]);
    }
}
