<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adressen;

class AdresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adressen = [[
        'gebruiker_id' =>    '12',
        'naam'          =>    'Zelf',
        'adres'         =>    'Kwikstaarthof 4'
      ],
      [
        'gebruiker_id' =>    '12',
        'naam'          =>    'Adres 1',
        'adres'         =>    'Straatnaam 5'
      ],
      [
        'gebruiker_id' =>    '12',
        'naam'          =>    'Adres 2',
        'adres'         =>    'Groen van prinsterensingel 15'
      ],
      [
        'gebruiker_id' =>    '13',
        'naam'          =>    'Adres 1',
        'adres'         =>    'Land van water 12'
      ],
      [
        'gebruiker_id' =>    '13',
        'naam'          =>    'Adres 2',
        'adres'         =>    'Kwikstaarthof 4'
      ],
      [
        'gebruiker_id' =>    '14',
        'naam'          =>    'Adres 1',
        'adres'         =>    'Straat 512'
      ]];

      foreach($adressen as $adres){
        Adressen::create(array(
          'gebruiker_id' => $adres['gebruiker_id'],
          'naam'         => $adres['naam'],
          'adres'        => $adres['adres']
        ));
      }
    }
}
