<?php
//dd($crecRegPeoples);
?>


@can('crec_reg_person_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.crec-reg-people.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegPerson.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegPerson.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegPerson">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_notes') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_website') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegPeoples as $key => $crecRegPerson)
                        <tr data-entry-id="{{ $crecRegPerson->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegPerson->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_id_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_type ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_birth_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_birth_place ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_gender ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_nationality->nationality_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->country->country_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_notes ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_website ?? '' }}
                            </td>
                            <td>
                                @can('crec_reg_person_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-people.show', $crecRegPerson->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_person_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-people.edit', $crecRegPerson->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_person_delete')
                                    <form action="{{ route('admin.crec-reg-people.destroy', $crecRegPerson->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('crec_reg_person_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.crec-reg-people.massDestroy') }}",
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
  let table = $('.datatable-CrecRegPerson:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
 