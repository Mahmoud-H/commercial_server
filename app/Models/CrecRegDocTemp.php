<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrecRegDocTemp extends Model
{
    use SoftDeletes , HasFactory;

    public $table = 'crec_reg_docs_temp';

    protected $dates = [
        'docs_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_reg_request_id',
        'neededdoc_id',
        'docs_date',
        'docs_ref_code',
        'doc_file',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function files()
    {
        return $this->morphMany(Media::class, 'fileable');
    }

    public function crec_reg_request()
    {
        return $this->belongsTo(CrecRegRequest::class, 'crec_reg_request_id');
    }

    public function neededdoc()
    {
        return $this->belongsTo(ComNeededDoc::class, 'neededdoc_id');
    }

    public function getDocsDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDocsDateAttribute($value)
    {
        $this->attributes['docs_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
