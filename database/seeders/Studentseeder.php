<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Studentseeder extends Seeder
{
    public function run(): void
    {
        DB::table('student')->insert([
            [
                'name' => 'Yuyun Aulia Afrianty',
                'student_id_number' => 'F55123025',
                'email' => 'yuyunauliaafriyanti123@gmail.com',
                'phone_number' => '082196738446',
                'birth_date' => '2004-06-21',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Sofia Qatrunnada',
                'student_id_number' => 'F55123035',
                'email' => 'SofiaQatrunn@gmail.com',
                'phone_number' => '085396063609',
                'birth_date' => '2006-05-04',
                'gender' => 'Female',
                'status' => 'active',
                'major_id' => 2,
            ],
        ]);
    }
}