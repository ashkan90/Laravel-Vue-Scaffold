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
        $domains = ["http://127.0.0.1:8000", "http://192.168.1.30:8080"];

        foreach ($domains as $domain) {
            App\Domain::create(["domain" => $domain]);
        }

        //factory(App\Article::class, 50)->create();
    }
}
