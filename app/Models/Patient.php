<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_card_number',
        'address',
        'phone',
        'birth_date',
        'id_card_type',
        'bpjs_status'
    ];
}
