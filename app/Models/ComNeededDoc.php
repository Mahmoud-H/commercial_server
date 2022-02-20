<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComNeededDoc extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'com_needed_docs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_reg_request_id',
        'needed_doc_name_a',
        'needed_doc_name_l',
        'needed_doc_is_required',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    
//    public function crec_reg_request()
//    {
//        return $this->belongsTo(CrecRegRequest::class, 'crec_reg_request_id');
//    }
}
