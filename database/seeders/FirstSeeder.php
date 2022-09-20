<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Moneys;
use App\Models\Payments;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Withdraws;
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

        Bank::create([
            'rekening' => 12064,
            'money' => 1500000,
        ]);
        Bank::create([
            'rekening' => 12065,
            'money' => 1500000,
        ]);
        Bank::create([
            'rekening' => 12066,
            'money' => 1500000,
        ]);

        Transfer::create([
            'from_rekening' => 12064,
            'to_rekening' => 12065,
            'total' => 10000,
        ]);
        Transfer::create([
            'from_rekening' => 12065,
            'to_rekening' => 12066,
            'total' => 15000,
        ]);
        Transfer::create([
            'from_rekening' => 12066,
            'to_rekening' => 12064,
            'total' => 20000,
        ]);

        Withdraws::create([
            'rekening' => 12064,
            'total' => 100000,
        ]);
        Withdraws::create([
            'rekening' => 12065,
            'total' => 150000,
        ]);
        Withdraws::create([
            'rekening' => 12065,
            'total' => 200000,
        ]);

        Payments::create([
            'rekening' => 12064,
            'type' => 'pulsa',
            'no_payment' => "81218019667",
            'total' => 50000,
        ]);
        Payments::create([
            'rekening' => 12065,
            'type' => 'listrik',
            'no_payment' => "89046348",
            'total' => 100000,
        ]);
        Payments::create([
            'rekening' => 12066,
            'type' => 'pulsa',
            'no_payment' => "81218019667",
            'total' => 250000,
        ]);



    }
}
