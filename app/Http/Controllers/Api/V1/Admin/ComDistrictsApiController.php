<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComDistrictRequest;
use App\Http\Requests\UpdateComDistrictRequest;
use App\Http\Resources\Admin\ComDistrictResource;
use App\Models\ComDistrict;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComDistrictsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_district_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComDistrictResource(ComDistrict::with(['city'])->get());
    }

    public function store(StoreComDistrictRequest $request)
    {
        $comDistrict = ComDistrict::create($request->all());

        return (new ComDistrictResource($comDistrict))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComDistrict $comDistrict)
    {
        abort_if(Gate::denies('com_district_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComDistrictResource($comDistrict->load(['city']));
    }

    public function update(UpdateComDistrictRequest $request, ComDistrict $comDistrict)
    {
        $comDistrict->update($request->all());

        return (new ComDistrictResource($comDistrict))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComDistrict $comDistrict)
    {
        abort_if(Gate::denies('com_district_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comDistrict->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
