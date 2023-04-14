<?php

namespace App\Models;

class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone',
        'birth_date',
        'gender',
        'notes',
        'address_street',
        'address_number',
        'address_complement',
        'address_postal_code',
        'address_neighborhood',
        'address_city',
        'address_state',
        'address_country',
    ];

}
