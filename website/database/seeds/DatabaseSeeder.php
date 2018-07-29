<?php

use Illuminate\Database\Seeder;
use App\Models\Language;
use App\Models\Domain;

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

        $defaultLanguages = [
            [ 'id' => 1, 'name' => 'English', 'code' => 'en' ],
            [ 'id' => 2, 'name' => 'French', 'code' => 'fr' ],
            [ 'id' => 3, 'name' => 'Italian', 'code' => 'it' ],
            [ 'id' => 4, 'name' => 'Japanese', 'code' => 'ja' ],
            [ 'id' => 5, 'name' => 'Vietnamese', 'code' => 'vi' ],
        ];
        $domains = [
            [ 'language_id' => 1, 'code' => 'en', 'name' => 'mb.en' ],
            [ 'language_id' => 2, 'code' => 'fr', 'name' => 'mb.fr' ],
            [ 'language_id' => 3, 'code' => 'it', 'name' => 'mb.it' ],
            [ 'language_id' => 4, 'code' => 'ja', 'name' => 'mb.ja' ],
            [ 'language_id' => 5, 'code' => 'vi', 'name' => 'mb.vn' ],
        ];
        foreach ($defaultLanguages as $key => $language) {
            Language::create($language);
            Domain::create($domains[$key]);
        }
    }
}
