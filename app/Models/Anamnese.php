<?php

namespace App\Models;

class Anamnese extends Model
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
     * Get appointments associated with the anamnese
     * 
     * @return HasMany
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'anamnese_id');
    }

}
