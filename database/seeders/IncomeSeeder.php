<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\Backend\Income;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user                        = new Income();
        $user->account_head_id       = 1;
        $user->from                  = 1;
        $user->merchant_id           = 1;
        $user->parcel_id             = 1;
        $user->account_id            = 1;
        $user->amount                = 00;
        $user->date                  = "2022-05-17";
        $user->receipt               = null;
        $user->note                  = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, provident!";
        $user->save();

    }
}
