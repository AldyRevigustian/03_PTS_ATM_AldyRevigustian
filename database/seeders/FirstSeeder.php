<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'aldy',
            'email' => 'aldy@gmail.com',
            'password' =>	'pwaldy',
            'rekening' => 12064
        ]);

        User::create([
            'name' => 'revi',
            'email' => 'revi@gmail.com',
            'password' =>	'pwrevi',
            'rekening' => 12065
        ]);

        User::create([
            'name' => 'gustian',
            'email' => 'gustian@gmail.com',
            'password' =>	'pwgustian',
            'rekening' => 12066
        ]);
    }
}
