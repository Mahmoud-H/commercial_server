<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComGovernorateRequest;
use App\Http\Requests\StoreComGovernorateRequest;
use App\Http\Requests\UpdateComGovernorateRequest;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComGovernoratesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_governorate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comGovernorates = ComGovernorate::with(['country'])->get();

        return view('admin.comGovernorates.index', compact('comGovernorates'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_governorate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comGovernorates.create', compact('countries'));
    }

    public function store(StoreComGovernorateRequest $request)
    {
        $comGovernorate = ComGovernorate::create($request->all());

        return redirect()->route('admin.com-governorates.index');
    }

    public function edit(ComGovernorate $comGovernorate)
    {
        abort_if(Gate::denies('com_governorate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comGovernorate->load('country');

        return view('admin.comGovernorates.edit', compact('countries', 'comGovernorate'));
    }

    public function update(UpdateComGovernorateRequest $request, ComGovernorate $comGovernorate)
    {
        $comGovernorate->update($request->all());

        return redirect()->route('admin.com-governorates.index');
    }

    public function show(ComGovernorate $comGovernorate)
    {
        abort_if(Gate::denies('com_governorate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comGovernorate->load('country');

        return view('admin.comGovernorates.show', compact('comGovernorate'));
    }

    public function destroy(ComGovernorate $comGovernorate)
    {
        abort_if(Gate::denies('com_governorate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comGovernorate->delete();

        return back();
    }

    public function massDestroy(MassDestroyComGovernorateRequest $request)
    {
        ComGovernorate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
