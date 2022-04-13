<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperadminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $existingSuperadmin = DB::table('users')
            ->where('name', 'superadmin')
            ->get();

        if(!is_null($existingSuperadmin)) {
            DB::table('users')->insert([
                'name' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
