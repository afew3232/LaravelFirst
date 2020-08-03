<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->delete();//Query Builder を使って、Articlesテーブルのレコードを全て削除。

/*
        $faker = Faker\Factory::create('en_US');// Faker を使用してダミーデータを作成しています。Laravel では標準で Faker が使用できるようになっています。

        for ($i = 0; $i < 10; $i++) {    // ③
            App\Article::create([
                'title' => $faker->sentence(),
                'body' => $faker->paragraph()
            ]);
        }
*/
        factory(App\Article::class, 20)->create();
    }
}
