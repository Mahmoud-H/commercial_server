<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceNeededFee extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'service_needed_fees';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fee_type_id',
        'service_id',
        'is_required',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function fee_type()
    {
        return $this->belongsTo(FeeType::class, 'fee_type_id');
    }

    public function service()
    {
        return $this->belongsTo(ComService::class, 'service_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
