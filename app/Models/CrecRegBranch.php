<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrecRegBranch extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'crec_reg_branches';

    protected $dates = [
        'branch_open_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_reg_request_id',
        'branch_no',
        'branch_brand_name',
        'branch_open_date',
        'country_id',
        'governorate_id',
        'city_id',
        'branch_address_a',
        'branch_address_l',
        'branch_street',
        'branch_bldg_no',
        'branch_tel_no',
        'branch_fax_no',
        'branch_mobile_no',
        'branch_po_box',
        'branch_email',
        'branch_website',
        'branch_contact_person',
        'branch_work_class_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function crec_reg_request()
    {
        return $this->belongsTo(CrecRegRequest::class, 'crec_reg_request_id');
    }

    public function getBranchOpenDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBranchOpenDateAttribute($value)
    {
        $this->attributes['branch_open_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
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

    public function branch_work_class()
    {
        return $this->belongsTo(ComWorkClass::class, 'branch_work_class_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
