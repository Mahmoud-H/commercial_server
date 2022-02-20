<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrecRegFeeRequest;
use App\Http\Requests\UpdateCrecRegFeeRequest;
use App\Http\Resources\Admin\CrecRegFeeResource;
use App\Models\CrecRegFee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegFeeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_fee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegFeeResource(CrecRegFee::with(['crec_reg_request', 'fee_type'])->get());
    }

    public function store(StoreCrecRegFeeRequest $request)
    {
        $crecRegFee = CrecRegFee::create($request->all());

        return (new CrecRegFeeResource($crecRegFee))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CrecRegFee $crecRegFee)
    {
        abort_if(Gate::denies('crec_reg_fee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegFeeResource($crecRegFee->load(['crec_reg_request', 'fee_type']));
    }

    public function update(UpdateCrecRegFeeRequest $request, CrecRegFee $crecRegFee)
    {
        $crecRegFee->update($request->all());

        return (new CrecRegFeeResource($crecRegFee))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CrecRegFee $crecRegFee)
    {
        abort_if(Gate::denies('crec_reg_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegFee->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
