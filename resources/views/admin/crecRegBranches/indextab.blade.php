 
@can('crec_reg_branch_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            
   <a class="btn btn-success" href="/admin/create_crec-reg-branches/{{$crecRegRequestid}}">    
<!--<a class="btn btn-success" href="{{ route('admin.crec-reg-branches.create') }}">-->
                {{ trans('global.add') }} {{ trans('cruds.crecRegBranch.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegBranch.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegBranch">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_open_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_work_class') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegBranches as $key => $crecRegBranch)
                        <tr data-entry-id="{{ $crecRegBranch->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegBranch->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_brand_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_open_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->country->country_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_website ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_contact_person ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_work_class->work_class_desc_a ?? '' }}
                            </td>
                            <td>
                                @can('crec_reg_branch_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-branches.show', $crecRegBranch->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_branch_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-branches.edit', $crecRegBranch->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_branch_delete')
                                    <form action="{{ route('admin.crec-reg-branches.destroy', $crecRegBranch->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



 