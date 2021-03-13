<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach(App\Restaurant::all() as $r) {
            for ($i = 0; $i < 3; $i++) {
                $data[] = [
                    'restaurant_id' => $r->id,
                    'img_path' => 'storage/menu_image/' . rand(1,9) . '.jpg'
                ];
            }
        }
        DB::table('menus')->insert($data);
    }
}
