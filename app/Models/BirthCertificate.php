<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificate extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'parents_surname', 'birth_date', 'weight', 'country'];
}
