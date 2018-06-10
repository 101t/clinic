<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HairTrans extends Model
{
	const TABLE = 'hairtrans';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'img',
		'lang'
    ];
}
