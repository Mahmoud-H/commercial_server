<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeeClassRequest;
use App\Http\Requests\UpdateFeeClassRequest;
use App\Http\Resources\Admin\FeeClassResource;
use App\Models\FeeClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeeClassApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fee_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FeeClassResource(FeeClass::all());
    }

    public function store(StoreFeeClassRequest $request)
    {
        $feeClass = FeeClass::create($request->all());

        return (new FeeClassResource($feeClass))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(FeeClass $feeClass)
    {
        abort_if(Gate::denies('fee_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FeeClassResource($feeClass);
    }

    public function update(UpdateFeeClassRequest $request, FeeClass $feeClass)
    {
        $feeClass->update($request->all());

        return (new FeeClassResource($feeClass))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(FeeClass $feeClass)
    {
        abort_if(Gate::denies('fee_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeClass->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
