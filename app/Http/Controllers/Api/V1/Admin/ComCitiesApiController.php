<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComCityRequest;
use App\Http\Requests\UpdateComCityRequest;
use App\Http\Resources\Admin\ComCityResource;
use App\Models\ComCity;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComCitiesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_city_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComCityResource(ComCity::with(['governorate'])->get());
    }

    public function store(StoreComCityRequest $request)
    {
        $comCity = ComCity::create($request->all());

        return (new ComCityResource($comCity))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComCity $comCity)
    {
        abort_if(Gate::denies('com_city_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComCityResource($comCity->load(['governorate']));
    }

    public function update(UpdateComCityRequest $request, ComCity $comCity)
    {
        $comCity->update($request->all());

        return (new ComCityResource($comCity))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComCity $comCity)
    {
        abort_if(Gate::denies('com_city_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCity->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
