<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('brands')->insert([
            ['name'=> str_random(10) ],
            ['name'=> str_random(10) ],
            ['name'=> str_random(10) ]
        ]);
        DB::table('products')->insert([
            [
                'name'=> str_random(10),
                'image'=> str_random(10),
                'price'=> '100000',
                'color'=> str_random(5),
                'size'=> '30',
                'gender'=> 'Nam',
                'id_brand'=> '1',
                'description'=> str_random(100)
            ],
            [
                'name'=> str_random(10),
                'image'=> str_random(10),
                'price'=> '100000',
                'color'=> str_random(5),
                'size'=> '30',
                'gender'=> 'Nam',
                'id_brand'=> '1',
                'description'=> str_random(100)
            ],
            [
                'name'=> str_random(10),
                'image'=> str_random(10),
                'price'=> '100000',
                'color'=> str_random(5),
                'size'=> '30',
                'gender'=> 'Nam',
                'id_brand'=> '1',
                'description'=> str_random(100)
            ],
        ]);
    }
}
