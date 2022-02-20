<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFeeClassRequest;
use App\Http\Requests\StoreFeeClassRequest;
use App\Http\Requests\UpdateFeeClassRequest;
use App\Models\FeeClass;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FeeClassController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fee_class_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeClasses = FeeClass::all();

        return view('admin.feeClasses.index', compact('feeClasses'));
    }

    public function create()
    {
        abort_if(Gate::denies('fee_class_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.feeClasses.create');
    }

    public function store(StoreFeeClassRequest $request)
    {
        $feeClass = FeeClass::create($request->all());

        return redirect()->route('admin.fee-classes.index');
    }

    public function edit(FeeClass $feeClass)
    {
        abort_if(Gate::denies('fee_class_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.feeClasses.edit', compact('feeClass'));
    }

    public function update(UpdateFeeClassRequest $request, FeeClass $feeClass)
    {
        $feeClass->update($request->all());

        return redirect()->route('admin.fee-classes.index');
    }

    public function show(FeeClass $feeClass)
    {
        abort_if(Gate::denies('fee_class_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.feeClasses.show', compact('feeClass'));
    }

    public function destroy(FeeClass $feeClass)
    {
        abort_if(Gate::denies('fee_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeClass->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeeClassRequest $request)
    {
        FeeClass::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
