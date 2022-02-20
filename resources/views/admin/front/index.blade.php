@extends('layouts.admin1')
@section('content')

{{--@can('crec_reg_request_create') --}}
    <div style="margin-bottom: 10px;" class="row">
        <?php
       // dd(Auth::user());
        ?>
        @if(Auth::user()==null)
      {{--@if(Auth::user()->roles[0]->title == "User")--}}
         {{-- {{Auth::user()->id}} --}}
          @if(count($crecRegRequests) > 0)
        <?php
        //dd(count($crecRegRequests));
            foreach($crecRegRequests as $key => $crecRegRequest)
       {
         //  dd("test");
         $crec_appl_no =  $crecRegRequest->crec_appl_no  ;
        // dd($crec_appl_no);
       }
        $CrecRegRequest = App\Models\CrecRegRequest::where('crec_appl_no',$crec_appl_no)->get();
        $countreg = count($CrecRegRequest) ;
         //dd("sss222");
      // dd($countreg);
       // echo $countreg;
      
       
        ?>
        @if($countreg > 0)
      
        @else
          <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.front.create') }}">
              {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>
        @endif
         @else
          <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.front.create') }}">
              {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>
        @endif
         @else
        {{--<div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.front.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>--}}
        @endif 
  
          {{--<div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.front.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>--}}
        
        
        
        
        
    </div>
 {{--@endcan--}}
 
  {{--<div style="margin-bottom: 10px;" class="row">
   <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.front.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>
  </div>--}}
 
<div class="card">
    <div class="card-header">
         {{ trans('cruds.crecRegRequest.title_singular') }} {{ trans('global.list') }}
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegRequest">
                <thead>
                    <tr>
                        {{--<th width="10">--}}

                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.id') }}--}}
                        {{--</th>--}}
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
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}--}}
                        {{--</th>--}}
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </th>
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.country') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.governorate') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.city') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_address_a') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_street') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}--}}
                        {{--</th>--}}
{{--<!----}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}--}}
                        {{--</th>--}}
{{---->--}}
{{--<!----}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}--}}
                        {{--</th>--}}
{{---->--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}--}}
                        {{--</th>--}}
{{--<!----}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_email') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_website') }}--}}
                        {{--</th>--}}
{{---->--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}--}}
                        {{--</th>--}}
{{--<!----}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_end_date') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_notes') }}--}}
                        {{--</th>--}}
{{---->--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_work_class') }}--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}--}}
                        {{--</th>--}}
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.status') }}
                        </th>

                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegRequests as $key => $crecRegRequest)
                        <tr data-entry-id="{{ $crecRegRequest->id }}">
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->id ?? '' }}--}}
                            {{--</td>--}}
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
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_comp_name_h ?? '' }}--}}
                            {{--</td>--}}
                            <td>
                                {{ $crecRegRequest->crec_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_brand_name ?? '' }}
                            </td>
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->country->country_name_a ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->governorate->governorate_name_a ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->city->city_name_a ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_address_a ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_address_l ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_street ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_bldg_no ?? '' }}--}}
                            {{--</td>--}}
{{--<!----}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_tel_no ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_fax_no ?? '' }}--}}
                            {{--</td>--}}
{{---->--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_mobile_no ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_po_box ?? '' }}--}}
                            {{--</td>--}}
{{--<!----}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_email ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_website ?? '' }}--}}
                            {{--</td>--}}
{{---->--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_applicant_id_no ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_applicant_name ?? '' }}--}}
                            {{--</td>--}}
{{--<!----}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_end_date ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_notes ?? '' }}--}}
                            {{--</td>--}}
{{---->--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--{{ $crecRegRequest->crec_work_name ?? '' }}--}}
                            {{--</td>--}}
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
                             <a class="btn btn-xs btn-primary" href="{{ route('admin.front.show', $crecRegRequest->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                {{--@can('crec_reg_request_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.front.show', $crecRegRequest->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan--}}
                                @if ($crecRegRequest->status == 'new' || is_null($crecRegRequest->status))
                                   <a class="btn btn-xs btn-primary" href="/commercial/public/admin/front/{{$crecRegRequest->id}}/collection_order">
                                        {{ trans('global.print_t') }}
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
//    $(function () {
//  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
//@can('crec_reg_request_delete')
//  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
//  let deleteButton = {
//    text: deleteButtonTrans,
//    url: "{{ route('admin.crec-reg-requests.massDestroy') }}",
//    className: 'btn-danger',
//    action: function (e, dt, node, config) {
//      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
//          return $(entry).data('entry-id')
//      });
//
//      if (ids.length === 0) {
//        alert('{{ trans('global.datatables.zero_selected') }}')
//
//        return
//      }
//
//      if (confirm('{{ trans('global.areYouSure') }}')) {
//        $.ajax({
//          headers: {'x-csrf-token': _token},
//          method: 'POST',
//          url: config.url,
//          data: { ids: ids, _method: 'DELETE' }})
//          .done(function () { location.reload() })
//      }
//    }
//  }
//  dtButtons.push(deleteButton)
//@endcan
//
//  $.extend(true, $.fn.dataTable.defaults, {
//    orderCellsTop: true,
//    order: [[ 1, 'desc' ]],
//    pageLength: 100,
//  });
//  let table = $('.datatable-CrecRegRequest:not(.ajaxTable)').DataTable({ buttons: dtButtons })
//  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
//      $($.fn.dataTable.tables(true)).DataTable()
//          .columns.adjust();
//  });
//  
//})

</script>
@endsection