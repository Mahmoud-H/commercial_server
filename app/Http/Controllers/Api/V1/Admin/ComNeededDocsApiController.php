<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComNeededDocRequest;
use App\Http\Requests\UpdateComNeededDocRequest;
use App\Http\Resources\Admin\ComNeededDocResource;
use App\Models\ComNeededDoc;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComNeededDocsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_needed_doc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComNeededDocResource(ComNeededDoc::all());
    }

    public function store(StoreComNeededDocRequest $request)
    {
        $comNeededDoc = ComNeededDoc::create($request->all());

        return (new ComNeededDocResource($comNeededDoc))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ComNeededDoc $comNeededDoc)
    {
        abort_if(Gate::denies('com_needed_doc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ComNeededDocResource($comNeededDoc);
    }

    public function update(UpdateComNeededDocRequest $request, ComNeededDoc $comNeededDoc)
    {
        $comNeededDoc->update($request->all());

        return (new ComNeededDocResource($comNeededDoc))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ComNeededDoc $comNeededDoc)
    {
        abort_if(Gate::denies('com_needed_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comNeededDoc->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
