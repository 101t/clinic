<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	const TABLE = 'doctor';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'major',
		'img',
		'lang'
    ];
}
