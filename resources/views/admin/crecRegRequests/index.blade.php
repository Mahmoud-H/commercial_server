@extends('layouts.admin')
@section('content')
@can('crec_reg_request_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.crec-reg-requests.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegRequest.title_singular') }} {{ trans('global.list') }}
    </div>
    <form method="POST" action="/commercial/public/admin/front/reg_request_search">
        @csrf
        <div class="container-fluid ">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label class="" for="status">Status</label>
                         <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" >
                             <option value="">يرجى الاختيار</option>
                         <option value="new">new</option>
                         <option value="pending">pending</option>
                         <option value="accepted">accepted</option>
                         <option value="rejected">rejected</option>
                        </select>
                     </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="from_crec_start_date">from date</label>
                        <input class="form-control  {{ $errors->has('out_date_time') ? 'is-invalid' : '' }}" type="datetime-local" name="from_crec_start_date" id="from_crec_start_date" value="{{ old('from_crec_start_date') }}">
                    </div>
                </div>
                <div class="col-4">
                   <div class="form-group">
                        <label for="to_crec_start_date">to date</label>
                        <input class="form-control  {{ $errors->has('out_date_time_to') ? 'is-invalid' : '' }}" type="datetime-local" name="to_crec_start_date" id="to_crec_start_date" value="{{ old('to_crec_start_date') }}">
                     </div>
                 </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                   <label   for="date_from"> </label>
                        <br>
                        <button class="btn btn-primary" type="submit">
                            {{ trans('global.search') }}
                        </button>
                        <!--
                         <a  class="btn-lg btn-warning existvisit" href="/admin/visitors/visitors-exist">
                                            {{ trans('global.Existing') }}
                                        </a>
    -->
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label   for="date_from"> </label>
                        <br>
                        <button value="export_excel" name="export_excel" class="btn btn-primary" type="submit">
                            تصدير للاكسل
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegRequest">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_notes') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegRequests as $key => $crecRegRequest)
                        <tr data-entry-id="{{ $crecRegRequest->id }}">
                            <td></td>
                            <td>
                                {{ $crecRegRequest->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_code ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_appl_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_appl_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_register_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_h ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_brand_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->country->country_tel_prefix ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_website ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_applicant_id_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_applicant_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_end_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_notes ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_work_name ?? '' }}
                            </td>
                            <td>
                                @if (is_null($crecRegRequest->status) || $crecRegRequest->status == 'new')
                                    <span class="badge badge-primary">جديد</span>
                                @elseif($crecRegRequest->status == 'pending')
                                    <span class="badge badge-warning">بنتظار الرد</span>
                                @elseif($crecRegRequest->status == 'accepted')
                                    <span class="badge badge-success">مقبول</span>
                                @elseif($crecRegRequest->status == 'rejected')
                                    <span class="badge badge-danger">مرفوض</span>
                                @endif
                            </td>
                            <td>
                                @can('crec_reg_request_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-requests.show', $crecRegRequest->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_request_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-requests.edit', $crecRegRequest->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_request_delete')
                                    <form id="delete" action="{{ route('admin.crec-reg-requests.destroy', $crecRegRequest->id) }}" method="POST" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,'#delete','قم بالحذف')" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>
                            <td>
                                @if ($crecRegRequest->status == 'pending')
                                   {{-- <a class="btn btn-success" href="" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , 
                                    event,null,'قم بالقبول','/admin/front/{{$crecRegRequest->id}}/accept')">--}}
                                      	   <a class="btn btn-success" href="" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , 
                                    event,null,'قم بالقبول','/commercial/public/admin/front/{{$crecRegRequest->id}}/accept')">

                                        {{ trans('global.accept') }}
                                    </a>
                                    {{--<a class="btn btn-danger" href="" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,null,'قم برفض','/admin/front/{{$crecRegRequest->id}}/rejected')">
                                        --}}
                                         <a class="btn btn-danger" href="" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,null,'قم برفض','/commercial/public/admin/front/{{$crecRegRequest->id}}/rejected')">
                                        {{ trans('global.reject') }}
                                    </a>
                                @endif
                                @if ($crecRegRequest->status == 'new' )
                                    <a class="btn btn-danger" href="" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,null,'قم برفض','/commercial/publi'/admin/front/{{$crecRegRequest->id}}/rejected');">
                                        {{ trans('global.reject') }}
                                    </a>
                                @endif
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
    @can('crec_reg_request_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.crec-reg-requests.massDestroy') }}",
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
    let table = $('.datatable-CrecRegRequest:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
    })
</script>
@endsection