<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	const TABLE = 'video';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'url',
		'img',
		'lang'
    ];
}
