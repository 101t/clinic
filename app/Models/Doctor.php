<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Doctor extends Model
{
	use Sluggable;
	const TABLE = 'doctor';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'body',
		'major',
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
