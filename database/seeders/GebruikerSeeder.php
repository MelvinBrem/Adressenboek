<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class GebruikerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $gebruikers = [[
          'name'      => 'Melvin Brem',
          'email'     => 'melvinbrembrem@live.com',
          'password'  => 'wachtwoord'
        ],
        [
          'name'      => 'John Doe',
          'email'     => 'johndoe@gmail.com',
          'password'  => 'wachtwoord2'
        ],
        [
          'name'      => 'Jane Doe',
          'email'     => 'JaneDoe@hotmail.com',
          'password'  => 'wachtwoord3'
        ]];

        foreach($gebruikers as $gebruiker) {
          User::create(array(
            'name'      =>    $gebruiker['name'],
            'email'     =>    $gebruiker['email'],
            'password'  =>    $gebruiker['password']
          ));
        }

    }
}
