<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrecRegRequestRequest;
use App\Http\Requests\UpdateCrecRegRequestRequest;
use App\Http\Resources\Admin\CrecRegRequestResource;
use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegRequestsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_request_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegRequestResource(CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get());
    }

    public function store(StoreCrecRegRequestRequest $request)
    {
        $crecRegRequest = CrecRegRequest::create($request->all());

        return (new CrecRegRequestResource($crecRegRequest))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CrecRegRequest $crecRegRequest)
    {
        abort_if(Gate::denies('crec_reg_request_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegRequestResource($crecRegRequest->load(['country', 'governorate', 'city', 'crec_work_class']));
    }

    public function update(UpdateCrecRegRequestRequest $request, CrecRegRequest $crecRegRequest)
    {
        $crecRegRequest->update($request->all());

        return (new CrecRegRequestResource($crecRegRequest))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CrecRegRequest $crecRegRequest)
    {
        abort_if(Gate::denies('crec_reg_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegRequest->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
