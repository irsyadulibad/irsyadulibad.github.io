<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    public $table = "biodata";

    protected $fillable = [
        'nim', 'fullname', 'study_program', 'address', 'phone', 'birthdate',
    ];
}
