<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComWorkClassRequest;
use App\Http\Requests\StoreComWorkClassRequest;
use App\Http\Requests\UpdateComWorkClassRequest;
use App\Models\ComWorkClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComWorkClassController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_work_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comWorkClasses = ComWorkClass::all();

        return view('admin.comWorkClasses.index', compact('comWorkClasses'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_work_class_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comWorkClasses.create');
    }

    public function store(StoreComWorkClassRequest $request)
    {
        $comWorkClass = ComWorkClass::create($request->all());

        return redirect()->route('admin.com-work-classes.index');
    }

    public function edit(ComWorkClass $comWorkClass)
    {
        abort_if(Gate::denies('com_work_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comWorkClasses.edit', compact('comWorkClass'));
    }

    public function update(UpdateComWorkClassRequest $request, ComWorkClass $comWorkClass)
    {
        $comWorkClass->update($request->all());

        return redirect()->route('admin.com-work-classes.index');
    }

    public function show(ComWorkClass $comWorkClass)
    {
        abort_if(Gate::denies('com_work_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comWorkClasses.show', compact('comWorkClass'));
    }

    public function destroy(ComWorkClass $comWorkClass)
    {
        abort_if(Gate::denies('com_work_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comWorkClass->delete();

        return back();
    }

    public function massDestroy(MassDestroyComWorkClassRequest $request)
    {
        ComWorkClass::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
