@extends('layouts.admin')
@section('content')
@can('com_service_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.com-services.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.comService.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.comService.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ComService">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.comService.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.comService.fields.service_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.comService.fields.service_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.comService.fields.account') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comServices as $key => $comService)
                        <tr data-entry-id="{{ $comService->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $comService->id ?? '' }}
                            </td>
                            <td>
                                {{ $comService->service_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $comService->service_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $comService->account->account_code ?? '' }}
                            </td>
                            <td>
                                @can('com_service_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.com-services.show', $comService->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('com_service_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.com-services.edit', $comService->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('com_service_delete')
                                    <form action="{{ route('admin.com-services.destroy', $comService->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('com_service_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.com-services.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-ComService:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection