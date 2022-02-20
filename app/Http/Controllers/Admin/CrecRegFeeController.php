<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegFeeRequest;
use App\Http\Requests\StoreCrecRegFeeRequest;
use App\Http\Requests\UpdateCrecRegFeeRequest;
use App\Models\CrecRegFee;
use App\Models\CrecRegRequest;
use App\Models\FeeType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegFeeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_fee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegFees = CrecRegFee::with(['crec_reg_request', 'fee_type'])->get();

        return view('admin.crecRegFees.index', compact('crecRegFees'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_fee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fee_types = FeeType::pluck('fee_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegFees.create', compact('crec_reg_requests', 'fee_types'));
    }

    public function store(StoreCrecRegFeeRequest $request)
    {
        $crecRegFee = CrecRegFee::create($request->all());

        return redirect()->route('admin.crec-reg-fees.index');
    }

    public function edit(CrecRegFee $crecRegFee)
    {
        abort_if(Gate::denies('crec_reg_fee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $fee_types = FeeType::pluck('fee_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegFee->load('crec_reg_request', 'fee_type');

        return view('admin.crecRegFees.edit', compact('crec_reg_requests', 'fee_types', 'crecRegFee'));
    }

    public function update(UpdateCrecRegFeeRequest $request, CrecRegFee $crecRegFee)
    {
        $crecRegFee->update($request->all());

        return redirect()->route('admin.crec-reg-fees.index');
    }

    public function show(CrecRegFee $crecRegFee)
    {
        abort_if(Gate::denies('crec_reg_fee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegFee->load('crec_reg_request', 'fee_type');

        return view('admin.crecRegFees.show', compact('crecRegFee'));
    }

    public function destroy(CrecRegFee $crecRegFee)
    {
        abort_if(Gate::denies('crec_reg_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegFee->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegFeeRequest $request)
    {
        CrecRegFee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
