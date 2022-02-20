<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrecRegDelegateRequest;
use App\Http\Requests\UpdateCrecRegDelegateRequest;
use App\Http\Resources\Admin\CrecRegDelegateResource;
use App\Models\CrecRegDelegate;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegDelegatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_delegate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegDelegateResource(CrecRegDelegate::with(['crec_reg_request'])->get());
    }

    public function store(StoreCrecRegDelegateRequest $request)
    {
        $crecRegDelegate = CrecRegDelegate::create($request->all());

        return (new CrecRegDelegateResource($crecRegDelegate))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CrecRegDelegate $crecRegDelegate)
    {
        abort_if(Gate::denies('crec_reg_delegate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegDelegateResource($crecRegDelegate->load(['crec_reg_request']));
    }

    public function update(UpdateCrecRegDelegateRequest $request, CrecRegDelegate $crecRegDelegate)
    {
        $crecRegDelegate->update($request->all());

        return (new CrecRegDelegateResource($crecRegDelegate))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CrecRegDelegate $crecRegDelegate)
    {
        abort_if(Gate::denies('crec_reg_delegate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDelegate->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
