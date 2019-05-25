<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;

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
        factory(Product::class, 20)->create();
        User::create([
            'email'=>'sadmin@fmontero.com.mx',
            'name' => 'Fabián Montero',
            'password' => bcrypt('123456')
        ]);
    }
}
