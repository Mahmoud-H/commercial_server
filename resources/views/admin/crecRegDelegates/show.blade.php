@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegDelegate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-delegates.index') }}">-->
       <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegDelegate->crec_reg_request_id}}/edit">

                    
                    
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegDelegate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.crec_reg_request') }}
                        </th>
                        <td>
                            {{ $crecRegDelegate->crec_reg_request->crec_comp_name_a ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-delegates.index') }}">-->
                       <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegDelegate->crec_reg_request_id}}/edit">

                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection