@extends('layouts.admin')
@section('content')
@can('fee_class_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.fee-classes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.feeClass.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.feeClass.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FeeClass">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.feeClass.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeClass.fields.fee_class_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeClass.fields.fee_class_name_l') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feeClasses as $key => $feeClass)
                        <tr data-entry-id="{{ $feeClass->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $feeClass->id ?? '' }}
                            </td>
                            <td>
                                {{ $feeClass->fee_class_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $feeClass->fee_class_name_l ?? '' }}
                            </td>
                            <td>
                                @can('fee_class_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.fee-classes.show', $feeClass->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('fee_class_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.fee-classes.edit', $feeClass->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('fee_class_delete')
                                    <form action="{{ route('admin.fee-classes.destroy', $feeClass->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('fee_class_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.fee-classes.massDestroy') }}",
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
  let table = $('.datatable-FeeClass:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection