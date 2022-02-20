<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyServiceNeededFeeRequest;
use App\Http\Requests\StoreServiceNeededFeeRequest;
use App\Http\Requests\UpdateServiceNeededFeeRequest;
use App\Models\ComService;
use App\Models\FeeType;
use App\Models\ServiceNeededFee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceNeededFeeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_needed_fee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceNeededFees = ServiceNeededFee::with(['fee_type', 'service'])->get();

        return view('admin.serviceNeededFees.index', compact('serviceNeededFees'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_needed_fee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fee_types = FeeType::pluck('fee_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = ComService::pluck('service_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.serviceNeededFees.create', compact('fee_types', 'services'));
    }

    public function store(StoreServiceNeededFeeRequest $request)
    {
        $serviceNeededFee = ServiceNeededFee::create($request->all());

        return redirect()->route('admin.service-needed-fees.index');
    }

    public function edit(ServiceNeededFee $serviceNeededFee)
    {
        abort_if(Gate::denies('service_needed_fee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fee_types = FeeType::pluck('fee_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $services = ComService::pluck('service_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $serviceNeededFee->load('fee_type', 'service');

        return view('admin.serviceNeededFees.edit', compact('fee_types', 'services', 'serviceNeededFee'));
    }

    public function update(UpdateServiceNeededFeeRequest $request, ServiceNeededFee $serviceNeededFee)
    {
        $serviceNeededFee->update($request->all());

        return redirect()->route('admin.service-needed-fees.index');
    }

    public function show(ServiceNeededFee $serviceNeededFee)
    {
        abort_if(Gate::denies('service_needed_fee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceNeededFee->load('fee_type', 'service');

        return view('admin.serviceNeededFees.show', compact('serviceNeededFee'));
    }

    public function destroy(ServiceNeededFee $serviceNeededFee)
    {
        abort_if(Gate::denies('service_needed_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceNeededFee->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceNeededFeeRequest $request)
    {
        ServiceNeededFee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
