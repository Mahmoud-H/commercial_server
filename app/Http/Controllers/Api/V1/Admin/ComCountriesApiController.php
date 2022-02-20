<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComCountryRequest;
use App\Http\Requests\UpdateComCountryRequest;
use App\Http\Resources\Admin\ComCountryResource;
use App\Models\ComCountry;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComCountriesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_country_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComCountryResource(ComCountry::all());
    }

    public function store(StoreComCountryRequest $request)
    {
        $comCountry = ComCountry::create($request->all());

        return (new ComCountryResource($comCountry))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComCountry $comCountry)
    {
        abort_if(Gate::denies('com_country_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComCountryResource($comCountry);
    }

    public function update(UpdateComCountryRequest $request, ComCountry $comCountry)
    {
        $comCountry->update($request->all());

        return (new ComCountryResource($comCountry))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComCountry $comCountry)
    {
        abort_if(Gate::denies('com_country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCountry->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
