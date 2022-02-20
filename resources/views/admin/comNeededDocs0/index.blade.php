@extends('layouts.admin')
@section('content')
@can('com_needed_doc_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.com-needed-docs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.comNeededDoc.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.comNeededDoc.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ComNeededDoc">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.comNeededDoc.fields.needed_doc_is_required') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comNeededDocs as $key => $comNeededDoc)
                        <tr data-entry-id="{{ $comNeededDoc->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $comNeededDoc->id ?? '' }}
                            </td>
                            <td>
                                {{ $comNeededDoc->needed_doc_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $comNeededDoc->needed_doc_name_l ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $comNeededDoc->needed_doc_is_required ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $comNeededDoc->needed_doc_is_required ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('com_needed_doc_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.com-needed-docs.show', $comNeededDoc->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('com_needed_doc_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.com-needed-docs.edit', $comNeededDoc->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('com_needed_doc_delete')
                                    <form action="{{ route('admin.com-needed-docs.destroy', $comNeededDoc->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('com_needed_doc_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.com-needed-docs.massDestroy') }}",
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
  let table = $('.datatable-ComNeededDoc:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection