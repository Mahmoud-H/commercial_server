 
@can('crec_reg_delegate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            
            
     <a class="btn btn-success" href="/admin/create_crec-reg-delegates/{{$crecRegRequestid}}">    

            
<!--            <a class="btn btn-success" href="{{ route('admin.crec-reg-delegates.create') }}">-->
                {{ trans('global.add') }} {{ trans('cruds.crecRegDelegate.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegDelegate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegDelegate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.crec_reg_request') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegDelegates as $key => $crecRegDelegate)
                        <tr data-entry-id="{{ $crecRegDelegate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegDelegate->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDelegate->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                @can('crec_reg_delegate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-delegates.show', $crecRegDelegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_delegate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-delegates.edit', $crecRegDelegate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_delegate_delete')
                                    <form action="{{ route('admin.crec-reg-delegates.destroy', $crecRegDelegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



 