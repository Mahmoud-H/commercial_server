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
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">1</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block;">معلومات الشخصية</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">2</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">إضافة وكيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">3</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">4</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">5</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">طباعة أمر التحصيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-warning" style="display: inline-block;padding: 1.4rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="padding: 0.3rem;">6</span>
                    </a>
                    <span style="display: block;color: #c36e05;text-shadow: 0 1px 0 #ffeb88;">إعتماد الطلب و إرفاق إيصال الدفع</span>
                </div>
            </div>
        </div>
        <br>
        <div class="card mt-2 border border-dark p-2">
            <div class="card-body">
                <form method="POST" action="{{ route("admin.front.store_approval_request",$reg_request->id) }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="receipt_date">{{ trans('cruds.receipts.fields.receipt_date') }}</label>
                        <input class="form-control date {{ $errors->has('receipt_date') ? 'is-invalid' : '' }}" type="text" name="receipt_date" id="receipt_date">
                        @if($errors->has('receipt_date'))
                            <span class="text-danger">{{ $errors->first('receipt_date') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.receipts.fields.receipt_date_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="receipt_number">{{ trans('cruds.receipts.fields.receipt_number') }}</label>
                        <input class="form-control {{ $errors->has('receipt_number') ? 'is-invalid' : '' }}" type="text" name="receipt_number" id="receipt_number">
                        @if($errors->has('receipt_number'))
                            <span class="text-danger">{{ $errors->first('receipt_number') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.receipts.fields.receipt_number_helper') }}</span>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('admin.front.step_collection_order', $reg_request->id) }}" class="btn btn-danger pull-right">السابق</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">إعتماد الطلب</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
