<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComCountry extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'com_countries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'country_name_a',
        'country_name_l',
        'iso_3',
        'iso_num',
        'country_tel_prefix',
        'nationality_a',
        'nationality_l',
        'country_is_valid',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
