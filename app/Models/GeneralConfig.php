<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralConfig extends Model
{
	const TABLE = 'generalconfig';
    protected $table = self::TABLE;
    protected $fillable = [
		'name',
		'logo',
		'logo2',
		'favicon',
		'footer',
		'short_about',
		'short_services',
		'short_blog',
		'short_faq',
		'meta_description',
		'meta_keywords',
		'google_analytics',
		'about',
		'address',
		'phone1',
		'phone2',
		'mobile',
		'fax',
		'website',
		'email',
		'reset_password',
		'theme',
		'welcome',
		'facebook',
		'whatsapp',
		'viber',
		'skype',
		'linkedin',
		'twitter',
		'instagram',
		'google',
		'youtube',
		'vimeo',
		'useterms',
		'privacypolicy',
		'latitude',
		'longitude',
		'copyright',
		'lang'
    ];
}
