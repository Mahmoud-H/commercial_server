<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeeTypeRequest;
use App\Http\Requests\StoreFeeTypeRequest;
use App\Http\Requests\UpdateFeeTypeRequest;
use App\Models\ComCurrency;
use App\Models\FeeClass;
use App\Models\FeeType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeeTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fee_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeTypes = FeeType::with(['fee_class', 'currency'])->get();

        return view('admin.feeTypes.index', compact('feeTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('fee_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fee_classes = FeeClass::pluck('fee_class_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = ComCurrency::pluck('currency_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.feeTypes.create', compact('fee_classes', 'currencies'));
    }

    public function store(StoreFeeTypeRequest $request)
    {
        $feeType = FeeType::create($request->all());

        return redirect()->route('admin.fee-types.index');
    }

    public function edit(FeeType $feeType)
    {
        abort_if(Gate::denies('fee_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fee_classes = FeeClass::pluck('fee_class_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = ComCurrency::pluck('currency_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $feeType->load('fee_class', 'currency');

        return view('admin.feeTypes.edit', compact('fee_classes', 'currencies', 'feeType'));
    }

    public function update(UpdateFeeTypeRequest $request, FeeType $feeType)
    {
        $feeType->update($request->all());

        return redirect()->route('admin.fee-types.index');
    }

    public function show(FeeType $feeType)
    {
        abort_if(Gate::denies('fee_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeType->load('fee_class', 'currency');

        return view('admin.feeTypes.show', compact('feeType'));
    }

    public function destroy(FeeType $feeType)
    {
        abort_if(Gate::denies('fee_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeType->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeeTypeRequest $request)
    {
        FeeType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
