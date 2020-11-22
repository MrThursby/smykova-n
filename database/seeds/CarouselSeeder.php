<?php

use Illuminate\Database\Seeder;
use App\Models\Posts\Carousels\CarouselItemModel;
use App\Models\Posts\Carousels\CarouselModel;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CarouselModel::class, 500)->create()
            ->each(function ($carousel){
                $carousel->items()->createMany(
                    factory(CarouselItemModel::class, 3)->make()->toArray()
                );
            });
    }
}
