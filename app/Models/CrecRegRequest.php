<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrecRegRequest extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'crec_reg_requests';

    protected $dates = [
        'crec_appl_date',
        'crec_start_date',
        'crec_end_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_code',
        'crec_appl_no',
        'crec_appl_date',
        'crec_register_no',
        'crec_comp_name_a',
        'crec_comp_name_l',
        'crec_comp_name_h',
        'crec_start_date',
        'crec_brand_name',
        'country_id',
        'governorate_id',
        'city_id',
        'crec_address_a',
        'crec_address_l',
        'crec_street',
        'crec_bldg_no',
        'crec_tel_no',
        'crec_fax_no',
        'crec_mobile_no',
        'crec_po_box',
        'crec_email',
        'crec_website',
        'crec_applicant_id_no',
        'crec_applicant_name',
        'crec_end_date',
        'crec_notes',
        'crec_work_class_id',
        'crec_work_name',
        'userid',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getCrecApplDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCrecApplDateAttribute($value)
    {
        $this->attributes['crec_appl_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCrecStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCrecStartDateAttribute($value)
    {
        $this->attributes['crec_start_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function country()
    {
        return $this->belongsTo(ComCountry::class, 'country_id');
    }

    public function governorate()
    {
        return $this->belongsTo(ComGovernorate::class, 'governorate_id');
    }

    public function city()
    {
        return $this->belongsTo(ComCity::class, 'city_id');
    }

    public function getCrecEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setCrecEndDateAttribute($value)
    {
        $this->attributes['crec_end_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function crec_work_class()
    {
        return $this->belongsTo(ComWorkClass::class, 'crec_work_class_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    
    
     public function crecRegPersons()
    {
        return $this->hasMany(CrecRegPerson::class);
    }  
    
    public function crecRegBranchs()
    {
        return $this->hasMany(CrecRegBranch::class);
    }   
    
    public function crecRegDelegates()
    {
        return $this->hasMany(CrecRegDelegate::class);
    }  
    
    public function crecRegDocs()
    {
        return $this->hasMany(CrecRegDoc::class);
    }

    public function receipt()
    {
        return $this->hasOne(Receipt::class,'crec_reg_request_id');
    }

    public function service()
    {
        return $this->belongsTo(ComService::class, 'service_id');
    }

}
