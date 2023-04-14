<?php

namespace App\Models;

class Doctor
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
        'email_verified_at',
        'phone',
        'birth_date',
        'address_street',
        'address_number',
        'address_complement',
        'address_postal_code',
        'address_neighborhood',
        'address_city',
        'address_state',
        'address_country',
        'specialties',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

}
