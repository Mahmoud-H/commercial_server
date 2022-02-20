<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Setting extends Model
{
    use HasFactory;

    public $table = 'settings';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'prefix_folder',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
