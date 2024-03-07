<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'id_passport_number',
            'phone_number',
            'gender_id',
            'nationality',
            'dob'
        ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
