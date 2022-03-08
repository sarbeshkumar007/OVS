<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        $data=[
            'name'=>'admin',
           // 'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('123456'),
        ];
        DB::table('admins')->insert($data);

    }
}
