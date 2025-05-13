<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoDestaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('curso_destaques')->insert([
            [
                'nome' => 'Linguagem C',
                'url_capa' => 'destaques/curso_c.png'
            ],
            [
                'nome' => 'Linguagem C#',
                'url_capa' => 'destaques/curso_sharp.png'
            ],
            [
                'nome' => 'Fundamentos de CSS',
                'url_capa' => 'destaques/curso_css.png'
            ],
            [
                'nome' => 'Curso de HTML',
                'url_capa' => 'destaques/curso_html.png'
            ],
            [
                'nome' => 'Curso de Java',
                'url_capa' => 'destaques/curso_java.png'
            ],
            [
                'nome' => 'Curso de JavaScript',
                'url_capa' => 'destaques/curso_javascript.png'
            ],
            [
                'nome' => 'Curso de Kotlin',
                'url_capa' => 'destaques/curso_kotlin.png'
            ],
            [
                'nome' => 'Curso de MySQL',
                'url_capa' => 'destaques/curso_mysql.png'
            ],
            [
                'nome' => 'Curso de Node JS',
                'url_capa' => 'destaques/curso_nodejs.png'
            ],
            [
                'nome' => 'Curso de PHP',
                'url_capa' => 'destaques/curso_php.png'
            ],
            [
                'nome' => 'Curso de Python',
                'url_capa' => 'destaques/curso_python.png'
            ],
            [
                'nome' => 'Curso de React JS',
                'url_capa' => 'destaques/curso_react_js.png'
            ]
        ]);
    }
}
