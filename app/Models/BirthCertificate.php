<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BirthCertificate extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'health_status', 'hospital_name', 'hospital_code', 'parents_surname', 'birth_date'];
}
