<?php

use Illuminate\Database\Seeder;

class inserttable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'username' => str_random(10),
            'password' => bcrypt('secret'),
        ]);
    }
}
