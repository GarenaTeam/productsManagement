<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $faker = Faker\Factory::create();
        for ($i=0; $i<101; $i++){
        	User::create([
        		]);
    }
}
