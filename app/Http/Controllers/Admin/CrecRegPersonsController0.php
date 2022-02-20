<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegPersonRequest;
use App\Http\Requests\StoreCrecRegPersonRequest;
use App\Http\Requests\UpdateCrecRegPersonRequest;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\CrecRegPerson;
use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
class CrecRegPersonsController extends Controller
{
    
  public function  createcrecregpeople ($crecRegRequestid)
  {
   //   dd($crecRegRequestid);
              abort_if(Gate::denies('crec_reg_person_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

      
       $crec_reg_requests = CrecRegRequest::where('id',$crecRegRequestid)->pluck('crec_comp_name_a', 'id');
      
      
        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
         return view('admin.crecRegPeople.create', compact('crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities','crecRegRequestid'));

  }
    
    public function index()
    {
        abort_if(Gate::denies('crec_reg_person_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegPeople = CrecRegPerson::with(['crec_reg_request', 'person_nationality', 'country', 'governorate', 'city'])->get();

        return view('admin.crecRegPeople.index', compact('crecRegPeople'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_person_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegPeople.create', compact('crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities'));
    }

    public function store(StoreCrecRegPersonRequest $request)
    {
        $crecRegPerson = CrecRegPerson::create($request->all());
return Redirect::to('/admin/crec-reg-requests/'.$crecRegPerson->
crec_reg_request_id.'/edit');
  
       // return redirect()->route('admin.crec-reg-people.index');
    }

    public function edit(CrecRegPerson $crecRegPerson)
    {
        abort_if(Gate::denies('crec_reg_person_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegPerson->load('crec_reg_request', 'person_nationality', 'country', 'governorate', 'city');

        return view('admin.crecRegPeople.edit', compact('crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities', 'crecRegPerson'));
    }

    public function update(UpdateCrecRegPersonRequest $request, CrecRegPerson $crecRegPerson)
    {
        $crecRegPerson->update($request->all());
              return Redirect::to('/admin/crec-reg-requests/'.$crecRegPerson->
crec_reg_request_id.'/edit');
  

     //   return redirect()->route('admin.crec-reg-people.index');
    }

    public function show(CrecRegPerson $crecRegPerson)
    {
        abort_if(Gate::denies('crec_reg_person_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegPerson->load('crec_reg_request', 'person_nationality', 'country', 'governorate', 'city');

        return view('admin.crecRegPeople.show', compact('crecRegPerson'));
    }

    public function destroy(CrecRegPerson $crecRegPerson)
    {
        abort_if(Gate::denies('crec_reg_person_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegPerson->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegPersonRequest $request)
    {
        CrecRegPerson::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
