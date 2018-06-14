<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class HairTrans extends Model
{
	use Sluggable;
	const TABLE = 'hairtrans';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
        'slug',
		'body',
		'img',
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
