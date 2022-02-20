<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrecRegPerson extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'crec_reg_people';

    protected $dates = [
        'person_birth_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'crec_reg_request_id',
        'person_id_no',
        'person_type',
        'person_name_a',
        'person_name_l',
        'person_birth_date',
        'person_birth_place',
        'person_gender',
        'person_nationality_id',
        'country_id',
        'governorate_id',
        'city_id',
        'person_address_a',
        'person_address_l',
        'person_street',
        'person_bldg_no',
        'person_tel_no',
        'person_fax_no',
        'person_mobile_no',
        'person_po_box',
        'person_email',
        'person_notes',
        'deleg_address_a',
        'deleg_address_l',
        'deleg_street',
        'deleg_bldg_no',
        'deleg_tel_no',
        'deleg_fax_no',
        'deleg_mobile_no',
        'deleg_po_box',
        'deleg_email',
        'deleg_website',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function crec_reg_request()
    {
        return $this->belongsTo(CrecRegRequest::class, 'crec_reg_request_id');
    }

    public function getPersonBirthDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setPersonBirthDateAttribute($value)
    {
        $this->attributes['person_birth_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function person_nationality()
    {
        return $this->belongsTo(ComCountry::class, 'person_nationality_id');
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
      public function person_type()
    {
        return $this->belongsTo(PersonType::class, 'person_type_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
