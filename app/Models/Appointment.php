<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'anamnese_id',
        'date',
        'status',
        'payment_status',
        'notes',
        'duration',
        'images',
    ];

    /**
     * Get the doctor associated with the appointment
     * 
     * @return HasOne
     */
    public function doctor(): HasOne
    {
        return $this->hasOne(Doctor::class, 'doctor_id');
    }

    /**
     * Get the patient associated with the appointment
     * 
     * @return HasOne
     */
    public function patient(): HasOne
    {
        return $this->hasOne(Patient::class, 'patient_id');
    }

    /**
     * Get the anamnese associated with the appointment
     * 
     * @return HasOne
     */
    public function anamnese(): HasOne
    {
        return $this->hasOne(Anamnese::class, 'anamnese_id');
    }

}
