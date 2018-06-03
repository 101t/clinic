<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
	const TABLE = 'home_sliders';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'img',
		'float',
		'url',
		'lang'
    ];
}
