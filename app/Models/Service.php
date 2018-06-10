<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	const TABLE = 'service';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'img',
		'lang'
    ];
}
