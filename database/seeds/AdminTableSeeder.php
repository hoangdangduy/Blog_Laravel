<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->email = "test@test.com";
        $admin->password = bcrypt("test_pw");
        $admin->save();

        $admin = new \App\Admin();
        $admin->email = "sa@test.com";
        $admin->password = bcrypt("123456");
        $admin->save();

        $admin = new \App\Admin();
        $admin->email = "dangduyhoang3009@gmail.com";
        $admin->password = bcrypt("123456");
        $admin->save();
    }
}
