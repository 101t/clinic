<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailServer extends Model
{
	const TABLE = 'emailserver';
    protected $table = self::TABLE;
    protected $fillable = [
		'server',
		'port',
		'username',
		'password',
		'ssl',
		'active'
    ];
}
