<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComServiceRequest;
use App\Http\Requests\UpdateComServiceRequest;
use App\Http\Resources\Admin\ComServiceResource;
use App\Models\ComService;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComServiceApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComServiceResource(ComService::with(['account'])->get());
    }

    public function store(StoreComServiceRequest $request)
    {
        $comService = ComService::create($request->all());

        return (new ComServiceResource($comService))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComService $comService)
    {
        abort_if(Gate::denies('com_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComServiceResource($comService->load(['account']));
    }

    public function update(UpdateComServiceRequest $request, ComService $comService)
    {
        $comService->update($request->all());

        return (new ComServiceResource($comService))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComService $comService)
    {
        abort_if(Gate::denies('com_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comService->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
