<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        $user = new User();
//        $user->name = "Nam";
//        $user->email = "nam@gmail.com";
//        $user->password = "123456";
//        $user->save();
//
//        $user = new User();
//        $user->name = "Tiep";
//        $user->email = "tiep@gmail.com";
//        $user->password = "123456";
//        $user->save();
//
//        $user = new User();
//        $user->name = "Luc";
//        $user->email = "luc@gmail.com";
//        $user->password = "123456";
//        $user->save();
        User::factory(100)->create();
    }
}
