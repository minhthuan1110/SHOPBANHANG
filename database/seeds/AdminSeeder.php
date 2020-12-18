<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'admin_email' => 'admin@gmail.com',
                'admin_password' => md5('123456'),
                'admin_name' => 'admin',
                'admin_phone' => '012345678',
                'created_at' => '2020-12-01',
                'updated_at' => '2020-12-01',
            ],
        ];
        DB::table('tbl_admin')->insert($data);
    }
}
