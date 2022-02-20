<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyComNeededDocRequest;
use App\Http\Requests\StoreComNeededDocRequest;
use App\Http\Requests\UpdateComNeededDocRequest;
use App\Models\ComNeededDoc;
use Gate;
use App\Models\CrecRegRequest;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComNeededDocsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('com_needed_doc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comNeededDocs = ComNeededDoc::all();

        return view('admin.comNeededDocs.index', compact('comNeededDocs'));
    }

    public function create()
    {
        abort_if(Gate::denies('com_needed_doc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.comNeededDocs.create',compact('crec_reg_requests'));
    }

    public function store(StoreComNeededDocRequest $request)
    {
        $ComNeededDoc = ComNeededDoc::all();
        $count_ComNeededDoc =  count($ComNeededDoc)+1;
        $count_ComNeededDoc_pad = str_pad($count_ComNeededDoc,4,"0",STR_PAD_LEFT);
        $num_ComNeededDoc = $count_ComNeededDoc_pad;

        $comNeededDoc = new ComNeededDoc;
        $comNeededDoc->code   = $num_ComNeededDoc ;
        $comNeededDoc->needed_doc_name_a   = $request->needed_doc_name_a;
        $comNeededDoc->needed_doc_name_l  = $request->needed_doc_name_l;
        $comNeededDoc->needed_doc_is_required  = $request->needed_doc_is_required;
        //        $comNeededDoc->crec_reg_request_id  = $request->crec_reg_request_id;
        $comNeededDoc->save();

        return redirect()->route('admin.com-needed-docs.index');
    }

    public function edit(ComNeededDoc $comNeededDoc)
    {
        abort_if(Gate::denies('com_needed_doc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comNeededDocs.edit', compact('comNeededDoc'));
    }

    public function update(UpdateComNeededDocRequest $request, ComNeededDoc $comNeededDoc)
    {
        $comNeededDoc->update($request->all());

        return redirect()->route('admin.com-needed-docs.index');
    }

    public function show(ComNeededDoc $comNeededDoc)
    {
        abort_if(Gate::denies('com_needed_doc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.comNeededDocs.show', compact('comNeededDoc'));
    }

    public function destroy(ComNeededDoc $comNeededDoc)
    {
        abort_if(Gate::denies('com_needed_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $comNeededDoc->delete();

        return back();
    }

    public function massDestroy(MassDestroyComNeededDocRequest $request)
    {
        ComNeededDoc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
