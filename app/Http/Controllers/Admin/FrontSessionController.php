<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\CrecRegPerson;
use App\Models\CrecRegRequest;
use App\Models\PersonType;
use App\Models\CrecRegDoc;
use App\Models\CrecRegDocTemp;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
use App\Models\ComNeededDoc;
use Session;

class FrontSessionController extends Controller
{
    public function createsteptwo123api(Request $request)
    {
        $ident = $request->person_id_no;
        $url = 'http://eservices.mtit.gov.ps/ws/gov-services/ws/getData';
             $data = '{
            "WB_USER_NAME_IN":"MNE",
            "WB_USER_PASS_IN":"1GT619A72669856214752DDB80DD87E9",
            "DATA_IN": {
            "package":"MOI_GENERAL_PKG",
            "procedure":"CITZN_INFO",
            "ID": '.$ident.'
            }
        }';

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $data
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }
        $resultt = json_decode($result, true);
//                 $res = $resultt['DATA'][0]['FNAME_ARB']." ".$resultt['DATA'][0]['SNAME_ARB']." ".$resultt['DATA'][0]['TNAME_ARB']." ".$resultt['DATA'][0]['LNAME_ARB'];
             //echo $res ;
        $FNAME_ARB = $resultt['DATA'][0]['FNAME_ARB'];
        $SNAME_ARB = $resultt['DATA'][0]['SNAME_ARB'];
        $TNAME_ARB = $resultt['DATA'][0]['TNAME_ARB'];
        $LNAME_ARB = $resultt['DATA'][0]['LNAME_ARB'];
        
        
        $ENG_NAME = $resultt['DATA'][0]['ENG_NAME'];
        $BIRTH_DT = $resultt['DATA'][0]['BIRTH_DT'];
        $BIRTH_PMAIN = $resultt['DATA'][0]['BIRTH_PMAIN'];
        $SEX = $resultt['DATA'][0]['SEX'];
        $CI_CITY = $resultt['DATA'][0]['CI_CITY'];
        $CI_RELIGION = $resultt['DATA'][0]['CI_RELIGION'];
                $REGION_CD = $resultt['DATA'][0]['REGION_CD'];
        $CITY_CD = $resultt['DATA'][0]['CITY_CD'];

        $res2 = [$FNAME_ARB,$SNAME_ARB,$TNAME_ARB,$LNAME_ARB,$ENG_NAME,$BIRTH_DT,$BIRTH_PMAIN,$SEX,$CI_CITY,$CI_RELIGION,$REGION_CD,$CITY_CD];
//        dd($res2);
        return response()->json(compact('res2'));
//        var_dump($res2);
    }

    public $arr = [];

    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
       // dd($product2);
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

       // $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $governorates = ComGovernorate::all();
       // $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $cities = ComCity::all();
        $person_types = PersonType::pluck('person_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.front.create-step-two',compact('product','crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities', 'person_types','product2'));
    } 

    public function postCreateStepTwo22(Request $request) {
        $product = $request->session()->get('product');
        $product2 =  $request->session()->get('product2');
        return redirect()->route('admin.front.create_step_three');
   }
    
    public function postCreateStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
//        $person_name_aa = substr($request->person_name_aa, 1, -1);
//        $person_name_b = substr($request->person_name_b, 1, -1) ;
//        $person_name_c = substr($request->person_name_c, 1, -1);
//        $person_name_d = substr($request->person_name_d, 1, -1);
//        $person_name_a_full = $person_name_aa." ".$person_name_b." ".$person_name_c." ".$person_name_d;
        $validatedData = array(
            "person_id_no"=> $request->person_id_no,
            "person_name_a"=> $request->person_name_a,
            "person_name_l"=> $request->person_name_l,
            "person_birth_date" => $request->person_birth_date,
            "person_birth_place"=> $request->person_birth_place,
            "person_gender"=> $request->person_gender,
            "person_nationality_id"=> $request->person_nationality_id,
            "country_id"=> $request->country_id,
            "governorate_id"=> $request->governorate_id,
            "city_id"=> $request->city_id,
            "person_address_a"=> $request->person_address_a,
            "person_address_l"=> $request->person_address_l,
            "person_street"=> $request->person_street,
            "person_bldg_no"=> $request->person_bldg_no,
            "person_tel_no"=>  $request->person_tel_no,
            "person_fax_no"=>  $request->person_fax_no,
            "person_mobile_no"=>  $request->person_mobile_no,
            "person_po_box"=>  $request->person_po_box,
            "person_email"=>  $request->person_email,
            "person_notes"=> $request->person_notes,
            "person_type_id"=> $request->person_type_id,
        );

        $city = ComCity::where('city_name_a',$request->city_id)->first();

      /*  if($city != null)
        {
           $validatedData['city_id'] = $city->id;
        }
        else{
            $validatedData['city_id'] = 5;
        }*/

        if(empty($request->session()->get('product2'))){
            $product2 = new CrecRegPerson();
            $product2->fill($validatedData);
            $request->session()->put('product2', $product2);
        }else{
            $product2 = $request->session()->get('product2');
            $product2->fill($validatedData);
            $request->session()->put('product2', $product2);
        }
       //dd($product2);
       
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

       // $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
$governorates = ComGovernorate::all();
       // $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
$cities = ComCity::all();
        $person_types = PersonType::pluck('person_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.front.create-step-two',compact('product','crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities', 'person_types','product2'));
    }
    
    public function createStepthree(Request $request)
    {
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
        $product3_regdocs = $request->session()->get('product3_regdocs');
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $neededdocscount = ComNeededDoc::all();

        return view('admin.front.create-step-three',compact('product','product2','crec_reg_requests','neededdocs','neededdocscount','product3_regdocs'));
    }

    public function postCreateStepThree(Request $request) {
       //  dd("test");
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
        $product3_regdocs = $request->session()->get('product3_regdocs');

        $validatedData =   $request->all();
       // dd($validatedData);
        Session::put('neededdocsid', $request->neededdocsid);
        $neededdocsid = Session::get('neededdocsid');
        $request->session()->put('neededdocsid', $request->neededdocsid);

        if(empty($request->session()->get('product3_regdocs'))){
            $product3_regdocs = new CrecRegDoc();
            $product3_regdocs->fill($validatedData);
            $request->session()->put('product3_regdocs', $product3_regdocs);
        }else{
            $product3_regdocs = $request->session()->get('product3_regdocs');
            $product3_regdocs->fill($validatedData);
            $request->session()->put('product3_regdocs', $product3_regdocs);
        }

        $a =  [];
           //dd($request->file('doc_file'));
        if (is_array($request->file('doc_file')) || is_object($request->file('doc_file'))){
            foreach($request->file('doc_file') as $index => $file)
            {
                // dd($product->crec_appl_no);
                $full_name = $file->getClientOriginalName();
                //dd($full_name);
                $file->move(public_path("uploads"), $product->crec_appl_no.'_'.($index+1).'_'.$full_name);
               // dd($full_name);
                //$file->move(public_path("uploads"), auth()->user()->id.'_'.($index+1).'_'.$full_name);
              //  dd(auth()->user()->id);
               // array_push($a,auth()->user()->id.'_'.($index+1).'_'.$full_name);
                array_push($a,$product->crec_appl_no.'_'.($index+1).'_'.$full_name);
            }
        }

        $product3_regdocs->doc_file = $a;
        $crecRegRequest = $request->session()->get('product');
        $crecRegPerson = $request->session()->get('product2');
        $crecRegDoc = $request->session()->get('product3_regdocs');
       //    dd($crecRegRequest);
      //  dd($crecRegPerson);
        $country_id =  $crecRegRequest->country_id;
        $ComCountry =   ComCountry::where('id',$country_id)->first();
        $country_name_a =  $ComCountry->country_name_a;

        return view('admin.front.create-step-four',compact('crecRegPerson','crecRegRequest','crecRegDoc','country_name_a','country_id','neededdocsid'));
    }
    
    public function createStepfour(Request $request)
    {
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
        $product3_regdocs =   $request->session()->get('product3_regdocs');
    }
}
