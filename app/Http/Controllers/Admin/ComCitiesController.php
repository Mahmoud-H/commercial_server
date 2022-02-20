<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComCityRequest;
use App\Http\Requests\StoreComCityRequest;
use App\Http\Requests\UpdateComCityRequest;
use App\Models\ComCity;
use App\Models\ComGovernorate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComCitiesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_city_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCities = ComCity::with(['governorate'])->get();

        return view('admin.comCities.index', compact('comCities'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_city_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comCities.create', compact('governorates'));
    }

    public function store(StoreComCityRequest $request)
    {
        $comCity = ComCity::create($request->all());

        return redirect()->route('admin.com-cities.index');
    }

    public function edit(ComCity $comCity)
    {
        abort_if(Gate::denies('com_city_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comCity->load('governorate');

        return view('admin.comCities.edit', compact('governorates', 'comCity'));
    }

    public function update(UpdateComCityRequest $request, ComCity $comCity)
    {
        $comCity->update($request->all());

        return redirect()->route('admin.com-cities.index');
    }

    public function show(ComCity $comCity)
    {
        abort_if(Gate::denies('com_city_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCity->load('governorate');

        return view('admin.comCities.show', compact('comCity'));
    }

    public function destroy(ComCity $comCity)
    {
        abort_if(Gate::denies('com_city_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCity->delete();

        return back();
    }

    public function massDestroy(MassDestroyComCityRequest $request)
    {
        ComCity::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
