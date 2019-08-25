<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('languages')->insert([
            'name'       => 'Spanish',
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        DB::table('languages')->insert([
            'name'       => 'English',
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        DB::table('languages')->insert([
            'name'       => 'German',
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        //glossary seeding
        DB::table('glossaries')->insert([
            'name'        => 'Family things',
            'language_id' => 2,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);
        DB::table('glossaries')->insert([
            'name'        => 'The second one',
            'language_id' => 1,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);
        // terms seeding
        DB::table('terms')->insert([
            'word'        => 'Car',
            'glossary_id' => 1,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);
        DB::table('terms')->insert([
            'word'        => 'Boat',
            'glossary_id' => 1,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);

        //translation seeding
        DB::table('translations')->insert([
            'word'        => 'Auto',
            'language_id' => 1,
            'term_id'     => 1,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);
        DB::table('translations')->insert([
            'word'        => 'Bote',
            'language_id' => 1,
            'term_id'     => 2,
            "created_at"  => \Carbon\Carbon::now(),
            "updated_at"  => \Carbon\Carbon::now(),
        ]);

    }
}
