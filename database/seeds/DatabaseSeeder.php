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
        $this->call(UserSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(VideopostSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(MenuItemSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
