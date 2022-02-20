<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComServiceRequest;
use App\Http\Requests\StoreComServiceRequest;
use App\Http\Requests\UpdateComServiceRequest;
use App\Models\ComAccount;
use App\Models\ComService;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComServiceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comServices = ComService::with(['account'])->get();

        return view('admin.comServices.index', compact('comServices'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $accounts = ComAccount::pluck('account_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comServices.create', compact('accounts'));
    }

    public function store(StoreComServiceRequest $request)
    {
        $comService = ComService::create($request->all());

        return redirect()->route('admin.com-services.index');
    }

    public function edit(ComService $comService)
    {
        abort_if(Gate::denies('com_service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $accounts = ComAccount::pluck('account_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $comService->load('account');

        return view('admin.comServices.edit', compact('accounts', 'comService'));
    }

    public function update(UpdateComServiceRequest $request, ComService $comService)
    {
        $comService->update($request->all());

        return redirect()->route('admin.com-services.index');
    }

    public function show(ComService $comService)
    {
        abort_if(Gate::denies('com_service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comService->load('account');

        return view('admin.comServices.show', compact('comService'));
    }

    public function destroy(ComService $comService)
    {
        abort_if(Gate::denies('com_service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comService->delete();

        return back();
    }

    public function massDestroy(MassDestroyComServiceRequest $request)
    {
        ComService::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
