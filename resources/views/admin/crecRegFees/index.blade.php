@extends('layouts.admin')
@section('content')
@can('crec_reg_fee_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.crec-reg-fees.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegFee.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegFee.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegFee">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_type_amt') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_qty') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegFees as $key => $crecRegFee)
                        <tr data-entry-id="{{ $crecRegFee->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegFee->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegFee->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegFee->fee_type->fee_type_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegFee->fee_type_amt ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegFee->fee_qty ?? '' }}
                            </td>
                            <td>
                                @can('crec_reg_fee_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-fees.show', $crecRegFee->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_fee_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-fees.edit', $crecRegFee->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_fee_delete')
                                    <form action="{{ route('admin.crec-reg-fees.destroy', $crecRegFee->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('crec_reg_fee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.crec-reg-fees.massDestroy') }}",
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
  let table = $('.datatable-CrecRegFee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection