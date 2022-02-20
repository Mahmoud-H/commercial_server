<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComAccountRequest;
use App\Http\Requests\StoreComAccountRequest;
use App\Http\Requests\UpdateComAccountRequest;
use App\Models\ComAccount;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComAccountController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_account_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comAccounts = ComAccount::all();

        return view('admin.comAccounts.index', compact('comAccounts'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_account_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comAccounts.create');
    }

    public function store(StoreComAccountRequest $request)
    {
        $comAccount = ComAccount::create($request->all());

        return redirect()->route('admin.com-accounts.index');
    }

    public function edit(ComAccount $comAccount)
    {
        abort_if(Gate::denies('com_account_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comAccounts.edit', compact('comAccount'));
    }

    public function update(UpdateComAccountRequest $request, ComAccount $comAccount)
    {
        $comAccount->update($request->all());

        return redirect()->route('admin.com-accounts.index');
    }

    public function show(ComAccount $comAccount)
    {
        abort_if(Gate::denies('com_account_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comAccounts.show', compact('comAccount'));
    }

    public function destroy(ComAccount $comAccount)
    {
        abort_if(Gate::denies('com_account_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comAccount->delete();

        return back();
    }

    public function massDestroy(MassDestroyComAccountRequest $request)
    {
        ComAccount::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
