@extends('layouts.front')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                   <h3>خدمة الإبلاغ عن أضرار المنشآت الاقتصادية</h3>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>وصف الخدمة</h3>
                  <ul>
  <li> تهدف هذه الخدمة إلى تمكين أصحاب المنشآت الاقتصادية الابلاغ عن أضرار منشآتهم الاقتصادية الناتجه عن الاستهداف الصهيوني المباشر أو الغير مباشر  وذلك تمهيدا لزيارتها لاحقا من طواقم حصر الأضرار الاقتصادية الخاصة بوزارة الاقتصاد الوطني. </li>
  <li>التسجيل عبر هذه الخدمة يحتاج الى استكمال فيما بعد. </li>
  <li>مقدم الطلب يتحمل المسؤولية عن صحة وسلامة  البيانات المقدمة.</li>
</ul>
        
         <div class="col-lg-12">
            <!--<a class="btn btn-success" href="{{ route('admin.facilities.index') }}">-->
                 <a class="btn btn-success" href="/damage-report/public/front/UserFront">
                {{  "متابعة" }} 
            </a>
        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection