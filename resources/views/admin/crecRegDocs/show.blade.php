@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegDoc.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-docs.index') }}">-->
                    
                           <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegDoc->crec_reg_request_id}}/edit">
     
                    
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegDoc->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.crec_reg_request') }}
                        </th>
                        <td>
                            {{ $crecRegDoc->crec_reg_request->crec_comp_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.neededdoc') }}
                        </th>
                        <td>
                            {{ $crecRegDoc->neededdoc->needed_doc_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_date') }}
                        </th>
                        <td>
                            {{ $crecRegDoc->docs_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}
                        </th>
                        <td>
                            {{ $crecRegDoc->docs_ref_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                        </th>
                        <td>
                             <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>
<!--                            {{ $crecRegDoc->doc_file }}-->
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-docs.index') }}">-->
                                           <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegDoc->crec_reg_request_id}}/edit">

                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection