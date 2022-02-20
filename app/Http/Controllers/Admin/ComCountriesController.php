<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComCountryRequest;
use App\Http\Requests\StoreComCountryRequest;
use App\Http\Requests\UpdateComCountryRequest;
use App\Models\ComCountry;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComCountriesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_country_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCountries = ComCountry::all();

        return view('admin.comCountries.index', compact('comCountries'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_country_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comCountries.create');
    }

    public function store(StoreComCountryRequest $request)
    {
        $comCountry = ComCountry::create($request->all());

        return redirect()->route('admin.com-countries.index');
    }

    public function edit(ComCountry $comCountry)
    {
        abort_if(Gate::denies('com_country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comCountries.edit', compact('comCountry'));
    }

    public function update(UpdateComCountryRequest $request, ComCountry $comCountry)
    {
        $comCountry->update($request->all());

        return redirect()->route('admin.com-countries.index');
    }

    public function show(ComCountry $comCountry)
    {
        abort_if(Gate::denies('com_country_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comCountries.show', compact('comCountry'));
    }

    public function destroy(ComCountry $comCountry)
    {
        abort_if(Gate::denies('com_country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comCountry->delete();

        return back();
    }

    public function massDestroy(MassDestroyComCountryRequest $request)
    {
        ComCountry::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
