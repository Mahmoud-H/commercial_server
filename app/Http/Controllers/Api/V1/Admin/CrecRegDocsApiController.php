<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCrecRegDocRequest;
use App\Http\Requests\UpdateCrecRegDocRequest;
use App\Http\Resources\Admin\CrecRegDocResource;
use App\Models\CrecRegDoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrecRegDocsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_doc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegDocResource(CrecRegDoc::with(['crec_reg_request', 'neededdoc'])->get());
    }

    public function store(StoreCrecRegDocRequest $request)
    {
        $crecRegDoc = CrecRegDoc::create($request->all());

        return (new CrecRegDocResource($crecRegDoc))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CrecRegDocResource($crecRegDoc->load(['crec_reg_request', 'neededdoc']));
    }

    public function update(UpdateCrecRegDocRequest $request, CrecRegDoc $crecRegDoc)
    {
        $crecRegDoc->update($request->all());

        return (new CrecRegDocResource($crecRegDoc))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDoc->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
