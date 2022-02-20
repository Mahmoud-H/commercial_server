@extends('layouts.admin')
@section('content')
@can('fee_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.fee-types.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.feeType.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.feeType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-FeeType">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.currency') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_amt') }}
                        </th>
                        <th>
                            {{ trans('cruds.feeType.fields.is_active') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feeTypes as $key => $feeType)
                        <tr data-entry-id="{{ $feeType->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $feeType->id ?? '' }}
                            </td>
                            <td>
                                {{ $feeType->fee_type_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $feeType->fee_type_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $feeType->fee_class->fee_class_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $feeType->currency->currency_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $feeType->fee_type_amt ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $feeType->is_active ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $feeType->is_active ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('fee_type_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.fee-types.show', $feeType->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('fee_type_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.fee-types.edit', $feeType->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('fee_type_delete')
                                    <form action="{{ route('admin.fee-types.destroy', $feeType->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('fee_type_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.fee-types.massDestroy') }}",
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
  let table = $('.datatable-FeeType:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection