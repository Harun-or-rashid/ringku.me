<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'ringku',
            'role_id'=>1,
            'email'=>'ringku.mmj@gmail.com',
            'passsword'=>bcrypt('ringku'),
            'name'=>'ringku',
        ],
            [
                'name'=>'ringku',
                'role_id'=>1,
                'email'=>'ringku.mmj@gmail.com',
                'passsword'=>bcrypt('ringku'),
                'name'=>'ringku',
            ]

            );
    }
}
