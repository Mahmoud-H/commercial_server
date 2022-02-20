<?php

namespace App\Exports;

use App\Models\CrecRegRequest;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;
 class CrecRegRequestsearchExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
     
  protected $userid;
function __construct($userid) {
      $this->userid = $userid;
}
        public function headings():array{
        return[
        'id',
        'crec_code',
        'crec_appl_no',
        'crec_appl_date',
        'crec_register_no',
        'crec_comp_name_a',
        'crec_comp_name_l',
        'crec_comp_name_h',
        'crec_start_date',
        'crec_brand_name',
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
         'crec_work_name',
        'created_at',
        'updated_at',
        'deleted_at',
'country_name',
        'governorate_name',
        'city_name',
              'crec_work_class_id',
      //  'userid',
            'service_id ',
        'status' 
        ];
    }
         public function map($reg) : array {
        return [
             $reg->id,
            $reg->crec_code,
            $reg->crec_appl_no,
            $reg->crec_appl_date,
            $reg->crec_register_no,
            $reg->crec_comp_name_a,
            $reg->crec_comp_name_l,
            $reg->crec_comp_name_h,
            $reg->crec_start_date,
            $reg->crec_brand_name,
            $reg->crec_address_a,
            $reg->crec_address_l,
            $reg->crec_street,
            $reg->crec_bldg_no,
            $reg->crec_tel_no,
            $reg->crec_fax_no,
            $reg->crec_mobile_no,
            $reg->crec_po_box,
            $reg->crec_email,
            $reg->crec_website,
            $reg->crec_applicant_id_no,
            $reg->crec_applicant_name,
            $reg->crec_end_date,
            $reg->crec_notes,
            $reg->crec_work_name,
            $reg->created_at,
            $reg->updated_at,
            $reg->deleted_at,
           // $reg->country_id,
       

           $reg->country->country_name_a,
           // $reg->governorate_id,
             $reg->governorate != NULL ? $reg->governorate->governorate_name_a : 'not found',
           // $reg->governorate->governorate_name_a, 
            
            //$reg->city_id,
            $reg->city->city_name_a,
            //$reg->crec_work_class_id,
            $reg->crec_work_class != NULL ? $reg->crec_work_class->work_class_desc_a : 'not found',
           // $reg->crec_work_class->work_class_desc_a,
         //   $reg->userid,
            //$reg->service_id,
            $reg->service != NULL ? $reg->service->service_name_a : 'not found',
           // $reg->service->service_name_a,
            $reg->status,
        
        ] ;
     }

        public function collection()
    {
            
       return CrecRegRequest::with('city')
            ->with('country')
            ->with('governorate')
            ->with('crec_work_class')
            ->with('service')
            
            
           // ->where('userid',$this->userid)
           ->get();
      // return CrecRegRequest::where('userid',$this->userid)->get();
}
 //dd($this->userid);           
            
//              return Jmcharadva::where(‘lifeskill_id’,$this->id)->get()([
//‘first_name’, ’email’
//]);
        //   return $crecRegRequests;
    }
