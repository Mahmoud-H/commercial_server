<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegBranchRequest;
use App\Http\Requests\StoreCrecRegBranchRequest;
use App\Http\Requests\UpdateCrecRegBranchRequest;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\ComWorkClass;
use App\Models\CrecRegBranch;
use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
class CrecRegBranchesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_branch_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegBranches = CrecRegBranch::with(['crec_reg_request', 'country', 'governorate', 'city', 'branch_work_class'])->get();

        return view('admin.crecRegBranches.index', compact('crecRegBranches'));
    }
  public function  createcrecregbranches($crecRegRequestid)
  {
    //  dd($crecRegRequestid);
              abort_if(Gate::denies('crec_reg_branch_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
      
      
             $crec_reg_requests = CrecRegRequest::where('id',$crecRegRequestid)->pluck('crec_comp_name_a', 'id');


        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $branch_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegBranches.create', compact('crec_reg_requests', 'countries', 'governorates', 'cities', 'branch_work_classes'));

  }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_branch_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $branch_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegBranches.create', compact('crec_reg_requests', 'countries', 'governorates', 'cities', 'branch_work_classes'));
    }

    public function store(StoreCrecRegBranchRequest $request)
    {
        $crecRegBranch = CrecRegBranch::create($request->all());
return Redirect::to('/admin/crec-reg-requests/'.$crecRegBranch->
crec_reg_request_id.'/edit');
      //  return redirect()->route('admin.crec-reg-branches.index');
    }

    public function edit(CrecRegBranch $crecRegBranch)
    {
        abort_if(Gate::denies('crec_reg_branch_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $branch_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegBranch->load('crec_reg_request', 'country', 'governorate', 'city', 'branch_work_class');

        return view('admin.crecRegBranches.edit', compact('crec_reg_requests', 'countries', 'governorates', 'cities', 'branch_work_classes', 'crecRegBranch'));
    }

    public function update(UpdateCrecRegBranchRequest $request, CrecRegBranch $crecRegBranch)
    {
        $crecRegBranch->update($request->all());
return Redirect::to('/admin/crec-reg-requests/'.$crecRegBranch->
crec_reg_request_id.'/edit');
      //  return redirect()->route('admin.crec-reg-branches.index');
    }

    public function show(CrecRegBranch $crecRegBranch)
    {
        abort_if(Gate::denies('crec_reg_branch_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegBranch->load('crec_reg_request', 'country', 'governorate', 'city', 'branch_work_class');

        return view('admin.crecRegBranches.show', compact('crecRegBranch'));
    }

    public function destroy(CrecRegBranch $crecRegBranch)
    {
        abort_if(Gate::denies('crec_reg_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegBranch->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegBranchRequest $request)
    {
        CrecRegBranch::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
