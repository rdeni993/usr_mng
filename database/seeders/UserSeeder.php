<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
        for( $i = 1; $i < 1000; $i++ )
            DB::table('users')->insert([
                'first_name'    => Str::random(10),
                'last_name'     => Str::random(10),
                'email'         => Str::random(10) . $i . '@mail.com',
                'status'        => Str::random(20),
                'username'      => Str::random(18) . $i,
                'password'      => Hash::make('test1234')
            ]);
    }
}
