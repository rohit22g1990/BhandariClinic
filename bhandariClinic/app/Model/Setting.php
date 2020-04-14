<?php

namespace App\Model;

class Setting extends AbstractModel
{
    protected $tableColumns = [
        'clinic_name',
        'contact_person',
        'address',
        'email',
        'phone',
        'mobile',
        'emergency_contact_number',
        'fax',
        'logo',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'clinic_name',
        'contact_person',
        'address',
        'email',
        'phone',
        'mobile',
        'emergency_contact_number',
    ];
}
