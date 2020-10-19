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
            'username'=>'admin',
            'role_id'=>1,
            'email'=>'ringku.mmj@gmail.com',
            'password'=>bcrypt('ringkuislam'),
            'name'=>'ringku',
        ],
            [
                'name'=>'rakib',
                'username'=>'author',
                'role_id'=>2,
                'email'=>'rakib.mmj@gmail.com',
                'password'=>bcrypt('rakibislam'),
                'name'=>'ringku',
            ]

            );
    }
}
