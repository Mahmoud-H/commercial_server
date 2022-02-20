<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySettingRequest;
use App\Http\Requests\StoreSettingRequest;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $settings = Setting::all();

        return view('admin.comSettings.index', compact('settings'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_setting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comSettings.create');
    }

    public function store(StoreSettingRequest $request)
    {
        $setting = Setting::create($request->all());

        return redirect()->route('admin.crec-settings.index');
    }

    public function edit(Setting $crec_setting)
    {
        abort_if(Gate::denies('crec_setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comSettings.edit', compact('crec_setting'));
    }

    public function update(StoreSettingRequest $request, Setting $crec_setting)
    {
        $crec_setting->update($request->all());

        return redirect()->route('admin.crec-settings.index');
    }

    public function show(Setting $crec_setting)
    {
        abort_if(Gate::denies('crec_setting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comSettings.show', compact('crec_setting'));
    }

    public function destroy(Setting $crec_setting)
    {
        abort_if(Gate::denies('crec_setting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_setting->delete();

        return back();
    }

    public function massDestroy(MassDestroySettingRequest $request)
    {
        Setting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
