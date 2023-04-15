<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends TecmidModel
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
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'doctor',
        'patient',
        'anamnese',
    ];

    /**
     * Get the doctor associated with the appointment
     * 
     * @return BelongsTo
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    /**
     * Get the patient associated with the appointment
     * 
     * @return BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    /**
     * Get the anamnese associated with the appointment
     * 
     * @return BelongsTo
     */
    public function anamnese(): BelongsTo
    {
        return $this->belongsTo(Anamnese::class, 'anamnese_id');
    }

}
