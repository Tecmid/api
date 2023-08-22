<?php

namespace App\Models;

class Anamnese extends TecmidModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'appointment_id',
        'complaint',
        'sickness',
        'conduct',
        'height',
        'weight',
        'blood_pressure',
        'heart_rate',
        'hypothesis',
        'notes',
    ];
}
