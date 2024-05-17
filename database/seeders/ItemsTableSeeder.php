<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('db.php');

        dd($items);

        foreach ($items as $item) {

            $newItem = new Item();
            $newItem->name = $item['name'];
            $newItem->slug = $item['slug'];
            $newItem->type = $item['type'];
            $newItem->category = $item['category'];
            $newItem->weight = $item['weight'];
            $newItem->cost = $item['cost'];
            $newItem->damage_dice = $item['damage_dice'];
            $newItem->save();
        }

    }
}
