<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1;$i<100;$i++){
        	DB::table('user')->insert([ 
        		'name' => str_random(10),
        		'password' => bcrypt('secret'), 
        	]);
        }
    }
}
