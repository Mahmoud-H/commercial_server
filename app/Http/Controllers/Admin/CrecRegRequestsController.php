<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegRequestRequest;
use App\Http\Requests\StoreCrecRegRequestRequest;
use App\Http\Requests\UpdateCrecRegRequestRequest;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\ComService;
use App\Models\ComWorkClass;
use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Redirect;

class CrecRegRequestsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_request_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();

        return view('admin.crecRegRequests.index', compact('crecRegRequests'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_request_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
//        $countries = ComCountry::pluck('country_tel_prefix', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crec_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = ComService::pluck('service_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegRequests.create', compact('countries', 'governorates', 'cities', 'crec_work_classes','services'));
    }

    public function store(StoreCrecRegRequestRequest $request)
    {
       // dd("123");
        $CrecRegRequest = CrecRegRequest::all();
        $count_type =  count($CrecRegRequest)+1;
        $count_type_pad = str_pad($count_type,10,"0",STR_PAD_LEFT);       // $num_mesg = date('Y').'-'.$msg_type_num.'-'.$count_type_pad;
        $num_RegRequest = $count_type_pad;

        $CrecRegRequest = new CrecRegRequest();
        $CrecRegRequest->userid   = Auth::user()->id;
        $CrecRegRequest->crec_code   = $num_RegRequest ;
        $CrecRegRequest->crec_appl_no  = $request->crec_appl_no ;
        $CrecRegRequest->crec_appl_date  = $request->crec_appl_date ;
        $CrecRegRequest->crec_register_no  = $request->crec_register_no ;
        $CrecRegRequest->crec_comp_name_a  = $request->crec_comp_name_a ;
        $CrecRegRequest->crec_comp_name_l  = $request->crec_comp_name_l ;
        $CrecRegRequest->crec_comp_name_h  = $request->crec_comp_name_h ;
        $CrecRegRequest->crec_start_date  = $request->crec_start_date ;
        $CrecRegRequest->crec_brand_name  = $request->crec_brand_name ;
        $CrecRegRequest->country_id  = $request->country_id ;
        $CrecRegRequest->governorate_id  = $request->governorate_id ;
        $CrecRegRequest->city_id  = $request->city_id ;
        $CrecRegRequest->crec_address_a  = $request->crec_address_a ;
        $CrecRegRequest->crec_address_l  = $request->crec_address_l ;
        $CrecRegRequest->crec_street  = $request->crec_street ;
        $CrecRegRequest->crec_bldg_no  = $request->crec_bldg_no ;
        $CrecRegRequest->crec_tel_no  = $request->crec_tel_no ;
        $CrecRegRequest->crec_fax_no  = $request->crec_fax_no ;
        $CrecRegRequest->crec_mobile_no  = $request->crec_mobile_no ;
        $CrecRegRequest->crec_po_box  = $request->crec_po_box ;
        $CrecRegRequest->crec_email  = $request->crec_email ;
        $CrecRegRequest->crec_website  = $request->crec_website ;
        $CrecRegRequest->crec_applicant_id_no  = $request->crec_applicant_id_no ;
        $CrecRegRequest->crec_applicant_name  = $request->crec_applicant_name ;
        $CrecRegRequest->crec_end_date  = $request->crec_end_date ;
        $CrecRegRequest->crec_notes  = $request->crec_notes ;
        $CrecRegRequest->crec_work_class_id  = $request->crec_work_class_id ;
        $CrecRegRequest->crec_work_name  = $request->crec_work_name ;
        $CrecRegRequest->save();
        //dd($CrecRegRequest->id);
       //return back()->withInput();
       // return back()->with(["crecRegRequest" => $CrecRegRequest->id]);
        return redirect()->route('admin.front.create', ['crecRegRequest' => $CrecRegRequest->id]);


        if($request->save_edit == "save_edit")
        {
            return Redirect::to('/admin/crec-reg-requests/'.$CrecRegRequest->id.'/edit');
        }else{
            return redirect()->route('admin.crec-reg-requests.index');
        }
    }

    public function edit(CrecRegRequest $crecRegRequest)
    {
        abort_if(Gate::denies('crec_reg_request_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    //   dd($crecRegRequest->crecRegPersons);
     //   dd($crecRegRequest->crecRegBranchs);
     //  dd($crecRegRequest->crecRegDelegates);
   //    dd($crecRegRequest->comNeededDocs);
    //  dd($crecRegRequest->id);
 //   dd($crecRegRequest->crecRegDocs);
        
        $countries = ComCountry::pluck('country_tel_prefix', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crec_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegRequest->load('country', 'governorate', 'city', 'crec_work_class');

        $services = ComService::pluck('service_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegRequests.edit', compact('countries', 'governorates', 'cities', 'crec_work_classes', 'crecRegRequest','services'));
    }

    public function update(UpdateCrecRegRequestRequest $request, CrecRegRequest $crecRegRequest)
    {
        $crecRegRequest->update($request->all());

        return redirect()->route('admin.crec-reg-requests.index');
    }

    public function show(CrecRegRequest $crecRegRequest)
    {
        abort_if(Gate::denies('crec_reg_request_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegRequest->load('country', 'governorate', 'city', 'crec_work_class');

        return view('admin.crecRegRequests.show', compact('crecRegRequest'));
    }

    public function destroy(CrecRegRequest $crecRegRequest)
    {
        abort_if(Gate::denies('crec_reg_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegRequest->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegRequestRequest $request)
    {
        CrecRegRequest::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
