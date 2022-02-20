@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comNeededDoc.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-needed-docs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.id') }}
                        </th>
                        <td>
                            {{ $comNeededDoc->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_name_a') }}
                        </th>
                        <td>
                            {{ $comNeededDoc->needed_doc_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_name_l') }}
                        </th>
                        <td>
                            {{ $comNeededDoc->needed_doc_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_is_required') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $comNeededDoc->needed_doc_is_required ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-needed-docs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection