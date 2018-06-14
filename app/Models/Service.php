<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
	use Sluggable;
	const TABLE = 'service';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'img',
		'lang'
    ];
}
