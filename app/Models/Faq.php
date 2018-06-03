<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	const TABLE = 'faq_faq';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'icon',
		'lang'
    ];
}
