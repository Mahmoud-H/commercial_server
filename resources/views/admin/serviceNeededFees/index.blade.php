@extends('layouts.admin')
@section('content')
@can('service_needed_fee_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.service-needed-fees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.serviceNeededFee.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.serviceNeededFee.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ServiceNeededFee">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.fee_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.service') }}
                        </th>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.is_required') }}
                        </th>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.notes') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($serviceNeededFees as $key => $serviceNeededFee)
                        <tr data-entry-id="{{ $serviceNeededFee->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $serviceNeededFee->id ?? '' }}
                            </td>
                            <td>
                                {{ $serviceNeededFee->fee_type->fee_type_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $serviceNeededFee->service->service_name_a ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $serviceNeededFee->is_required ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $serviceNeededFee->is_required ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $serviceNeededFee->notes ?? '' }}
                            </td>
                            <td>
                                @can('service_needed_fee_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.service-needed-fees.show', $serviceNeededFee->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('service_needed_fee_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.service-needed-fees.edit', $serviceNeededFee->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('service_needed_fee_delete')
                                    <form action="{{ route('admin.service-needed-fees.destroy', $serviceNeededFee->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('service_needed_fee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.service-needed-fees.massDestroy') }}",
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
  let table = $('.datatable-ServiceNeededFee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection