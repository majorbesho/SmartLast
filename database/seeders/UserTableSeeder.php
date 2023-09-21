<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([

        //     [
        //         'name'=>'customer',
        //         'email'=>'customer@gmail.com',
        //         'password'=>Hash::make('1111'),
        //         //'role'=>'customer',
        //         'status'=>'active',
        //         'nationality'=>'egypt',
        //         'dateOfbarth'=>'1/1/2000',
        //         'photo' =>'',
        //         'phone' =>'971545060710',
        //         'address' =>'',
        //         'phone_verfiy'=>'0',

        //     ],
        //     [
        //         'name'=>'customer2',
        //         'email'=>'operation.smartboxdxb@gmail.com',
        //         'password'=>Hash::make('1111'),
        //         //'role'=>'customer',
        //         'status'=>'active',
        //         'nationality'=>'egypt',
        //         'dateOfbarth'=>'1/1/2000',
        //         'photo' =>'',
        //         'phone' =>'971545060711',
        //         'address' =>'',
        //         'phone_verfiy'=>'0',
        //     ],


        //]);

        DB::table('admins')->insert([
                [
                'name'=>'admin',
                'email'=>'beshog32@gmail.com',
                'password'=>Hash::make('1111'),
                'status'=>'active',
                'photo' =>'',
                'phone' =>'+971545060739',
                // 'phone_verfiy'=>'0',
                ],
            ]);



            DB::table('suppliers')->insert([
                [
                // 'name'=>'beshosup',
                'email'=>'supp@gmail.com',
                'title'=>'title',
                'company'=>'company',
                'contactNo'=>'contactNo',
                'discreption'=>'discreption',
                'resName'=>'resName',
                'tele'=>'tele',
                'web'=>'web',
                'nots'=>'nots',
                'password'=>Hash::make('1111'),
                'status'=>'active',
                'photo' =>'',
                'slug'=>'slug1',
                ],
            ]);

    }
}
