<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'title'       => 'Meu Primeiro Projeto',
                'description' => 'Descrição detalhada…',
                'image_url'   => null,
                'tags'        => json_encode(['Laravel','React']),
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            // ... outros exemplos
        ]);
    }

}
