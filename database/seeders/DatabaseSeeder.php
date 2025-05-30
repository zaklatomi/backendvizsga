<?php

namespace Database\Seeders;

use App\Models\Szo;
use App\Models\Tema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tema::factory(3)->create();

        DB::table('szos')->insert([
            'angol' => Str::random(10),
            'magyar' => Str::random(10),
            'temaId' => 1
        ]);
        DB::table('szos')->insert([
            'angol' => Str::random(10),
            'magyar' => Str::random(10),
            'temaId' => 2
        ]);
        DB::table('szos')->insert([
            'angol' => Str::random(10),
            'magyar' => Str::random(10),
            'temaId' => 3
        ]);
    }
}
