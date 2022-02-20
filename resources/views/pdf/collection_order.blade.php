@extends('pdf.layout')

@section('content')
    <div id="page">
        <div class="page-border-c">
            {{--<span>--}}
                {{--<br>--}}
                {{--<h4 style="text-align: center; padding-bottom: -5px;">{{ $report_name }}</h4>--}}
            {{--</span>--}}
            <br>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 30% !important;text-align: right;">نأمل منكم تحصيل رسم مالي و قدره</td>
                    <td style="width: 35% !important;text-align: right;">
                        <span>
                            {{ $obj_total["total"] }}
                        </span>
                        <span>
                            {{ $obj_total["currency"] }}
                        </span>
                    </td>
                    <td style="width: 35% !important;text-align: left;">
                        <span>
                            {{ num_2_str($obj_total["total"]) }}
                        </span>
                        <span>
                            {{ $obj_total["currency"] }}
                        </span>
                    </td>
                </tr>
            </table>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 10% !important;text-align: right;">عن شركة</td>
                    <td style="!important;text-align: right;">
                        <span>
                            {{ $reg_request->crec_comp_name_a }}
                        </span>
                    </td>
                    <td style="width: 35% !important;text-align: left;"></td>
                </tr>
            </table>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 15% !important;text-align: right;">مقدم الطلب</td>
                    <td style="text-align: right;">
                        {{ $reg_request->crec_register_no }}
                        {{ $reg_request->crec_comp_name_a }}
                    </td>
                </tr>
            </table>
            <table id="datatable" style="width: 100%;" autosize="1" repeat_header="1">
                <thead>
                <tr>
                    <th>
                        {{ trans('cruds.feeClass.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.feeType.fields.fee_type_name_a') }}
                    </th>
                    <th>
                        {{ trans('cruds.crecRegFee.fields.fee_qty') }}
                    </th>
                    <th>
                        {{ trans('cruds.feeType.fields.fee_type_amt') }}
                    </th>
                    <th colspan="1">
                        {{ trans('cruds.feeType.fields.total') }}
                    </th>
                </tr>
                </thead>
                <tbody>
                @php
                    // $total = 0;
                @endphp

                @foreach($fees as $key => $fee)
                    <tr>
                        <td>
                            {{ $fee->id ?? '' }}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_name_a ?? '' }}
                        </td>
                        <td>
                            1
                            {{--{{ $fee->fee_type->fee_type_name_a ?? '' }}--}}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_amt ?? '' }}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_amt * 1 ?? '' }}
                        </td>
                        {{--<td>شيكل</td>--}}
                    </tr>
                    @php
                        // $total += ($fee->fee_type->fee_type_amt * 1);
                    @endphp
                @endforeach
                <tr style="border: none">
                    <td colspan="4" style="text-align: left">
                        المجموع
                    </td>
                    <td >{{ $obj_total["total"] }}</td>
                    {{--<td>&#x20aa;</td>--}}
                </tr>
                </tbody>
                <td style="">{{ $obj_total["currency"] }}</td>
            </table>
        </div>
        <div class="page-border-c">
            <div class="header">
                <table style="width:100%;">
                    <tr>
                        <td style="padding-top: 30px;text-align: right">
                            <span style="font-weight: 600;">دولة فلسطين</span>
                            <br/>
                            <span style="font-weight: 600;">الإدارة العامة لتسجيل الشركات</span>
                            {{--س ت / 5801008715--}}
                            {{--<br/>--}}
                            {{--ترخيص صناعي رقم/ 411102103947--}}
                            {{--<br/>--}}
                            {{--الرقم الضريبي / 300694398800003--}}
                            {{--<br/>--}}
                        </td>
                        <td style="padding-top: 30px;text-align: center;vertical-align:bottom">
                            {{--                    <a href="{{ url('/') }}" style="font-family: 'Ubuntu', Tahoma; color: #00AAB8; text-decoration: none" target="_blank" rel="noreferrer">--}}
                            <img src="{{ file_exists('logoTH.png') ? asset('logoTH.png') : 'https://via.placeholder.com/300.png' }}" width="70" alt="" style="margin-right: 10px;margin-top: 10px;">
                            {{--</a>--}}
                            <br/>
                            {{--<span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('H:i  Y/m/d') }}</span>--}}
                        </td>
                        <td style="padding-top: 30px;">
                            {{--                    <span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</span>--}}
                            <br/>
                            <span style="text-align:center!important;font-weight: 600;">أمر تحصيل</span>
                        </td>
                        <td style="padding-top: 30px;text-align: left">
                            <span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
                            <br/>
                            {{--<span style="text-align:center!important;font-weight: 600;">أمر تحصيل</span>--}}
                            <span style="font-weight: 600;">رقم:</span>
                            <span><bdi>{{ "02-49319" }}</bdi></span>
                            {{--<br/>--}}
                            {{--Indus. License / 411102103947--}}
                            {{--<br/>--}}
                            {{--VAT. No /300694398800003--}}
                            {{--<br/>--}}
                            {{--E-Mail: shamsfactory@shams-me.com--}}
                            {{--<br/>--}}
                        </td>
                        {{--<td style="vertical-align:bottom; text-align:left; margin-bottom:8px; padding-bottom: 10px" dir="rtl">--}}
                        {{--@if(isset($report_name))--}}
                        {{--<span style="font-family: 'sky';"> {!! $report_name !!}</span>--}}
                        {{--<br>--}}
                        {{--@endif--}}
                        {{--<span style="font-family: 'sky';">تاريخ الإصدار: <strong>{{ \Carbon\Carbon::now()->format('Y-m-d') }}</strong></span>--}}
                        {{--<br/>--}}
                        {{--<a href="{{ url('/') }}" style="font-family: 'Ubuntu', Tahoma; color: #00AAB8; text-decoration: none" target="_blank" rel="noreferrer">Eshraqa Company</a>--}}
                        {{--</td>--}}
                    </tr>
                </table>
                {{--<div style="float: right;font-size: 14px;">--}}

                {{--</div>--}}
                {{--<div class="Logo" style="margin-right: 33px;">--}}

                {{--</div>--}}
                {{--<div style="float: left;font-size: 14px;">--}}

                {{--</div>--}}
            </div>
            <br>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 30% !important;text-align: right;">نأمل منكم تحصيل رسم مالي و قدره</td>
                    <td style="width: 35% !important;text-align: right;">
                        <span>
                            {{ $obj_total["total"] }}
                        </span>
                        <span>
                            {{ $obj_total["currency"] }}
                        </span>
                    </td>
                    <td style="width: 35% !important;text-align: left;">
                        <span>
                            {{ num_2_str($obj_total["total"]) }}
                        </span>
                        <span>
                            {{ $obj_total["currency"] }}
                        </span>
                    </td>
                </tr>
            </table>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 10% !important;text-align: right;">عن شركة</td>
                    <td style="!important;text-align: right;">
                        <span>
                            {{ $reg_request->crec_comp_name_a }}
                        </span>
                    </td>
                    <td style="width: 35% !important;text-align: left;"></td>
                </tr>
            </table>
            <table style="font-family: 'sky', sans-serif;width: 100%;">
                <tr>
                    <td style="width: 15% !important;text-align: right;">مقدم الطلب</td>
                    <td style="text-align: right;">
                        {{ $reg_request->crec_register_no }}
                        {{ $reg_request->crec_comp_name_a }}
                    </td>
                </tr>
            </table>
            <table id="datatable" style="width: 100%;" autosize="1" repeat_header="1">
                <thead>
                <tr>
                    <th>
                        {{ trans('cruds.feeClass.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.feeType.fields.fee_type_name_a') }}
                    </th>
                    <th>
                        {{ trans('cruds.crecRegFee.fields.fee_qty') }}
                    </th>
                    <th>
                        {{ trans('cruds.feeType.fields.fee_type_amt') }}
                    </th>
                    <th colspan="1">
                        {{ trans('cruds.feeType.fields.total') }}
                    </th>
                </tr>
                </thead>
                <tbody>
                @php
                    $total = 0;
                @endphp

                @foreach($fees as $key => $fee)
                    <tr>
                        <td>
                            {{ $fee->id ?? '' }}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_name_a ?? '' }}
                        </td>
                        <td>
                            1
                            {{--{{ $fee->fee_type->fee_type_name_a ?? '' }}--}}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_amt ?? '' }}
                        </td>
                        <td>
                            {{ $fee->fee_type->fee_type_amt * 1 ?? '' }}
                        </td>
                        {{--<td>شيكل</td>--}}
                    </tr>
                    @php
                        $total += ($fee->fee_type->fee_type_amt * 1);
                    @endphp
                @endforeach
                <tr style="border: none">
                    <td colspan="4" style="text-align: left">
                        المجموع
                    </td>
                    <td >{{ $obj_total["total"] }}</td>
                    {{--<td>&#x20aa;</td>--}}
                </tr>
                <td style="">{{ $obj_total["currency"] }}</td>
                </tbody>
            </table>
        </div>
    </div>
@endSection
