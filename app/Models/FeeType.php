<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeeType extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'fee_types';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fee_type_name_a',
        'fee_type_name_l',
        'fee_class_id',
        'currency_id',
        'fee_type_amt',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function fee_class()
    {
        return $this->belongsTo(FeeClass::class, 'fee_class_id');
    }

    public function currency()
    {
        return $this->belongsTo(ComCurrency::class, 'currency_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
