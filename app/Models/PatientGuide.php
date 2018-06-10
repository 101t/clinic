<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientGuide extends Model
{
	const TABLE = 'patientguide';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'img',
		'lang'
    ];
}
