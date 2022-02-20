<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComDistrict extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'com_districts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'city_id',
        'district_name_a',
        'district_name_l',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function city()
    {
        return $this->belongsTo(ComCity::class, 'city_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
