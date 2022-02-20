@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <div class="row">
            <hr style="width: 100%;display: block;position: absolute;margin: 2%"/>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">1</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block;">معلومات الشخصية</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">2</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">إضافة وكيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">3</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">4</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-warning" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="padding: 0.3rem;">5</span>
                    </a>
                    <span style="display: block;color: #c36e05;text-shadow: 0 1px 0 #ffeb88;">طباعة أمر التحصيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">6</span>
                    </a>
                    <span style="display: block">إعتماد الطلب و إرفاق إيصال الدفع</span>
                </div>
            </div>
        </div>
        <br>
        <div class="card mt-2 border border-dark p-2">
            <div class="card-body">
                <div class="callout callout-warning" style="border-right: 5px solid #eee!important;border-right-color: #d39e00!important;">
                    <h5>اتبع الخطوات لمواصلة التسجيل.</h5>
                    {{--<h5>Follow the steps to continue to payment.</h5>--}}
                    <p>
                        <span style="display: block">أرجو طباعة أمر تحصيل الخاص بكم بضغط على الزر في أسفل الصفحة</span>
                        <span style="display: block">و من ثم قم بذهاب للبنك وتسليم أمر التحصيل لتحصيل المبلغ الظاهر في الجدول</span>
                    </p>
                </div>

                <div class="row">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover">
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
                                <th colspan="2">
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
                                    <td>شيكل</td>
                                </tr>
                                @php
                                    $total += ($fee->fee_type->fee_type_amt * 1);
                                @endphp
                            @endforeach
                            <tr>
                                <td colspan="4" style="text-align: end">
                                    المجموع
                                </td>
                                <td >{{ $total }}</td>
                                <td>شيكل</td>
                                {{--<td>&#x20aa;</td>--}}
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-12">
                        {{--<a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>--}}
                        {{--<div class="col-md-6 text-left">--}}
                            {{--<a href="{{ route('admin.fron.create.step.three.post') }}" class="btn btn-danger pull-right">Previous</a>--}}
                        {{--</div>--}}
                        <a href="{{ route('admin.front.export_pdf',$reg_request->id) }}" target="_blank" class="btn btn-info float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> تصدير أمر تحصيل خاص بكم
                        </a>
                    </div>
                </div>
                <br>
                <div class="row no-print">
                    <div class="col-12">
                        <a href="{{ route('admin.front.approval_request',$reg_request->id) }}" class="btn btn-primary float-right" style="margin-right: 5px;">
                              التالي
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
