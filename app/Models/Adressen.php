<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adressen extends Model
{
    use HasFactory;

    protected $table = 'adressen';

    protected $fillable = [
      'gebruiker_id',
      'naam',
      'adres'
    ];
}
