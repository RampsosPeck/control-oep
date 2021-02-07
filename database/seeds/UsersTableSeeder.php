<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suadmin = new User;
        $suadmin->name = 'Jorge Peralta';
        $suadmin->cedula = '12345678';
        $suadmin->telefono = '75729198';
        $suadmin->type = 'admin';
        $suadmin->email = 'jorge@gmail.com';
        $suadmin->password = bcrypt('secret');
        $suadmin->bio = 'Developwr web segurity mentrax';
        $suadmin->save();
    }
}
