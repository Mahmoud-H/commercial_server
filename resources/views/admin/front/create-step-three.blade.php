@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegDoc.title_singular') }}
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
                    <a href="#" class="bg-warning" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="padding: 0.3rem;">3</span>
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">4</span>
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">5</span>
                    </a>
                    <span style="display: block">طباعة أمر التحصيل</span>
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
                <form method="POST" action="{{ route("admin.front.create_step_three_post") }}" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="doc_file">{{ trans('cruds.crecRegDoc.fields.doc_file') }}</label>
                        @foreach($neededdocscount as   $entry)
                            <br>
                            <b>{{ $entry->needed_doc_name_a }}</b>
                            <input type="hidden" value="{{$entry->id}}" name="neededdocsid[]" >
                            <input required  class="form-control {{ $errors->has('doc_file') ? 'is-invalid' : '' }}" type="file" name="doc_file[]" id="doc_file" value="">
                        @endforeach
                        @if($errors->has('doc_file'))
                            <span class="text-danger">{{ $errors->first('doc_file') }}</span>
                        @endif
                        <span class="help-block">{{ trans('cruds.crecRegDoc.fields.doc_file_helper') }}</span>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('admin.front.create_step_two') }}" class="btn btn-danger pull-right">السابق</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">التالي</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>



@endsection