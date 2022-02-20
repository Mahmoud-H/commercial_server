<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComDistrictRequest;
use App\Http\Requests\StoreComDistrictRequest;
use App\Http\Requests\UpdateComDistrictRequest;
use App\Models\ComCity;
use App\Models\ComDistrict;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComDistrictsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_district_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comDistricts = ComDistrict::with(['city'])->get();

        return view('admin.comDistricts.index', compact('comDistricts'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_district_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comDistricts.create', compact('cities'));
    }

    public function store(StoreComDistrictRequest $request)
    {
        $comDistrict = ComDistrict::create($request->all());

        return redirect()->route('admin.com-districts.index');
    }

    public function edit(ComDistrict $comDistrict)
    {
        abort_if(Gate::denies('com_district_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comDistrict->load('city');

        return view('admin.comDistricts.edit', compact('cities', 'comDistrict'));
    }

    public function update(UpdateComDistrictRequest $request, ComDistrict $comDistrict)
    {
        $comDistrict->update($request->all());

        return redirect()->route('admin.com-districts.index');
    }

    public function show(ComDistrict $comDistrict)
    {
        abort_if(Gate::denies('com_district_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comDistrict->load('city');

        return view('admin.comDistricts.show', compact('comDistrict'));
    }

    public function destroy(ComDistrict $comDistrict)
    {
        abort_if(Gate::denies('com_district_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comDistrict->delete();

        return back();
    }

    public function massDestroy(MassDestroyComDistrictRequest $request)
    {
        ComDistrict::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
