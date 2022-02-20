<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrecRegFee extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'crec_reg_fees';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_reg_request_id',
        'fee_type_id',
        'fee_type_amt',
        'fee_qty',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function crec_reg_request()
    {
        return $this->belongsTo(CrecRegRequest::class, 'crec_reg_request_id');
    }

    public function fee_type()
    {
        return $this->belongsTo(FeeType::class, 'fee_type_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
