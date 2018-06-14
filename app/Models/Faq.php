<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Faq extends Model
{
	use Sluggable;
	const TABLE = 'faq_faq';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'icon',
		'lang'
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
