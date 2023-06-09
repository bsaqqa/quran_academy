<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuranAyatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get sql dump file
        $sql_dump_file = database_path('seeders/quran_ayat.sql');

        // get sql dump file content
        $sql_dump_file_content = file_get_contents($sql_dump_file);

        // run sql dump file content
        DB::unprepared($sql_dump_file_content);
    }
}
