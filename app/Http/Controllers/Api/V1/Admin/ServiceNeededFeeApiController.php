<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceNeededFeeRequest;
use App\Http\Requests\UpdateServiceNeededFeeRequest;
use App\Http\Resources\Admin\ServiceNeededFeeResource;
use App\Models\ServiceNeededFee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceNeededFeeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_needed_fee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceNeededFeeResource(ServiceNeededFee::with(['fee_type', 'service'])->get());
    }

    public function store(StoreServiceNeededFeeRequest $request)
    {
        $serviceNeededFee = ServiceNeededFee::create($request->all());

        return (new ServiceNeededFeeResource($serviceNeededFee))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ServiceNeededFee $serviceNeededFee)
    {
        abort_if(Gate::denies('service_needed_fee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ServiceNeededFeeResource($serviceNeededFee->load(['fee_type', 'service']));
    }

    public function update(UpdateServiceNeededFeeRequest $request, ServiceNeededFee $serviceNeededFee)
    {
        $serviceNeededFee->update($request->all());

        return (new ServiceNeededFeeResource($serviceNeededFee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ServiceNeededFee $serviceNeededFee)
    {
        abort_if(Gate::denies('service_needed_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceNeededFee->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
