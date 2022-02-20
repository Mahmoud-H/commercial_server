 @can('crec_reg_doc_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            
            <a class="btn btn-success" href="/admin/create_crec-reg-docs/{{$crecRegRequestid}}">    
   
            
<!--            <a class="btn btn-success" href="{{ route('admin.crec-reg-docs.create') }}">-->
                {{ trans('global.add') }} {{ trans('cruds.crecRegDoc.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegDoc.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegDoc">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.neededdoc') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegDocs as $key => $crecRegDoc)
                        <tr data-entry-id="{{ $crecRegDoc->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegDoc->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->neededdoc->needed_doc_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->docs_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->docs_ref_code ?? '' }}
                            </td>
                            <td>
                            <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>
<!--                             {{ $crecRegDoc->doc_file ?? '' }}  -->
                            </td>
                            <td>
                                @can('crec_reg_doc_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-docs.show', $crecRegDoc->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_doc_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-docs.edit', $crecRegDoc->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_doc_delete')
                                    <form action="{{ route('admin.crec-reg-docs.destroy', $crecRegDoc->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

 