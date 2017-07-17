<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lonny Peng',
                'email' => 'xingchenyekong@163.com',
                'password' => '$2y$10$eh2j.ajO.vBz1aA/8XWwHuU2aRQPB9ruaB8Z9Afyj0JyVZjLX96Vu',
                'avatar' => 'https://o75u5ooep.qnssl.com/avatar_2017-03-18',
                'remember_token' => 'tDpcjqLYBeWU11ULTVcmsIFaaSiqdvVh8zDeNbFZ29lhqQNUR3Ki0QtEzCNd',
                'created_at' => '2017-02-04 08:04:57',
                'updated_at' => '2017-03-18 08:48:00',
            ),
        ));
        
        
    }
}