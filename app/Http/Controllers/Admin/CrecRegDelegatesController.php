<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegDelegateRequest;
use App\Http\Requests\StoreCrecRegDelegateRequest;
use App\Http\Requests\UpdateCrecRegDelegateRequest;
use App\Models\CrecRegDelegate;
use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
class CrecRegDelegatesController extends Controller
{
    
  public function  createcrecregdelegates($crecRegRequestid)
  {
      //dd($crecRegRequestid);
              abort_if(Gate::denies('crec_reg_delegate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
   $crec_reg_requests = CrecRegRequest::where('id',$crecRegRequestid)->pluck('crec_comp_name_a', 'id');


        return view('admin.crecRegDelegates.create', compact('crec_reg_requests'));

  }
    
    public function index()
    {
        abort_if(Gate::denies('crec_reg_delegate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDelegates = CrecRegDelegate::with(['crec_reg_request'])->get();

        return view('admin.crecRegDelegates.index', compact('crecRegDelegates'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_delegate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegDelegates.create', compact('crec_reg_requests'));
    }

    public function store(StoreCrecRegDelegateRequest $request)
    {
        $crecRegDelegate = CrecRegDelegate::create($request->all());
return Redirect::to('/admin/crec-reg-requests/'.$crecRegDelegate->
crec_reg_request_id.'/edit');
     //   return redirect()->route('admin.crec-reg-delegates.index');
    }

    public function edit(CrecRegDelegate $crecRegDelegate)
    {
        abort_if(Gate::denies('crec_reg_delegate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegDelegate->load('crec_reg_request');

        return view('admin.crecRegDelegates.edit', compact('crec_reg_requests', 'crecRegDelegate'));
    }

    public function update(UpdateCrecRegDelegateRequest $request, CrecRegDelegate $crecRegDelegate)
    {
        $crecRegDelegate->update($request->all());
return Redirect::to('/admin/crec-reg-requests/'.$crecRegDelegate->
crec_reg_request_id.'/edit');
       // return redirect()->route('admin.crec-reg-delegates.index');
    }

    public function show(CrecRegDelegate $crecRegDelegate)
    {
        abort_if(Gate::denies('crec_reg_delegate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDelegate->load('crec_reg_request');

        return view('admin.crecRegDelegates.show', compact('crecRegDelegate'));
    }

    public function destroy(CrecRegDelegate $crecRegDelegate)
    {
        abort_if(Gate::denies('crec_reg_delegate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDelegate->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegDelegateRequest $request)
    {
        CrecRegDelegate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
