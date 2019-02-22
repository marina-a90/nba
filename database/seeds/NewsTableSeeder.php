<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\News::class, 30)->create()
        // ->each(function ($news) {
        //     $user = App\User::inRandomOrder()->first();
        //     $news -> user_id = $user->id;
        //     $news -> save();
        // });

        App\User::all()->each(function (App\User $u) {
            $u->news()->saveMany(factory(App\News::class, 5)->make());
        });
    }
}