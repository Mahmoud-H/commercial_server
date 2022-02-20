<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComGovernorateRequest;
use App\Http\Requests\UpdateComGovernorateRequest;
use App\Http\Resources\Admin\ComGovernorateResource;
use App\Models\ComGovernorate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComGovernoratesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_governorate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComGovernorateResource(ComGovernorate::with(['country'])->get());
    }

    public function store(StoreComGovernorateRequest $request)
    {
        $comGovernorate = ComGovernorate::create($request->all());

        return (new ComGovernorateResource($comGovernorate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComGovernorate $comGovernorate)
    {
        abort_if(Gate::denies('com_governorate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComGovernorateResource($comGovernorate->load(['country']));
    }

    public function update(UpdateComGovernorateRequest $request, ComGovernorate $comGovernorate)
    {
        $comGovernorate->update($request->all());

        return (new ComGovernorateResource($comGovernorate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComGovernorate $comGovernorate)
    {
        abort_if(Gate::denies('com_governorate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comGovernorate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
