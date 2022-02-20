<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComCity extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'com_cities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'governorate_id',
        'city_name_a',
        'city_name_l',
        'city_name_h',
        'city_cd',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function governorate()
    {
        return $this->belongsTo(ComGovernorate::class, 'governorate_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
