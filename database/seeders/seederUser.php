<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class seederUser extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'name'=>'userAdmin',
            'mail'=>'admin@gmail.com',
            'mail_verif'=>NULL,
            'contra'=>'admin',
            'remenber'=>NULL,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ]);
    }
}
