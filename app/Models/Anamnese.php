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

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'appointments',
    ];


    /**
     * Get appointments associated with the anamnese
     * 
     * @return HasMany
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'anamnese_id');
    }

}
