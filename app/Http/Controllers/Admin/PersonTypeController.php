<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPersonTypeRequest;
use App\Http\Requests\StorePersonTypeRequest;
use App\Http\Requests\UpdatePersonTypeRequest;
use App\Models\PersonType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('person_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personTypes = PersonType::all();

        return view('admin.personTypes.index', compact('personTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('person_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.personTypes.create');
    }

    public function store(StorePersonTypeRequest $request)
    {
        $personType = PersonType::create($request->all());

        return redirect()->route('admin.person-types.index');
    }

    public function edit(PersonType $personType)
    {
        abort_if(Gate::denies('person_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.personTypes.edit', compact('personType'));
    }

    public function update(UpdatePersonTypeRequest $request, PersonType $personType)
    {
        $personType->update($request->all());

        return redirect()->route('admin.person-types.index');
    }

    public function show(PersonType $personType)
    {
        abort_if(Gate::denies('person_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.personTypes.show', compact('personType'));
    }

    public function destroy(PersonType $personType)
    {
        abort_if(Gate::denies('person_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personType->delete();

        return back();
    }

    public function massDestroy(MassDestroyPersonTypeRequest $request)
    {
        PersonType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
