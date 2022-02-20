@extends('layouts.admin')
@section('content')
<ul class="nav nav-stacked nav-pills" id="tabMenu">
    <li class="active">
  
        <a class="nav-link  active" href="{{url('#firsttab')}}" data-toggle="tab"  role="tab">
             {{ trans('global.edit') }} {{ trans('cruds.crecRegRequest.title_singular') }}  
        </a>
    </li>
   
    <li>
        <a class="nav-link  " href="{{url('#secondtab')}}" data-toggle="tab"  role="tab">
           {{ trans('cruds.crecRegPerson.title_singular') }} {{ trans('global.list') }} </a>
    </li>

     <li>
        <a class="nav-link  " href="{{url('#thirdtab')}}" data-toggle="tab"  role="tab">
            {{ trans('cruds.crecRegBranch.title_singular') }} {{ trans('global.list') }}   </a>
    </li>    
    <li>
        <a class="nav-link  " href="{{url('#fourtab')}}" data-toggle="tab"  role="tab">
            {{ trans('cruds.crecRegDelegate.title_singular') }} {{ trans('global.list') }}  </a>
    </li>  

    <li>
        <a class="nav-link  " href="{{url('#fivetab')}}" data-toggle="tab"  role="tab">
            {{ trans('cruds.crecRegDoc.title_singular') }} {{ trans('global.list') }}  </a>
    </li> 
      
    
  </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="firsttab">
<!--<h1>I'm in firsttab tab</h1>-->
            
   @includeIf('admin.crecRegRequests.edittab',['crecRegRequest'=>$crecRegRequest])       
            
            
            
        </div>
        <div class="tab-pane fade" id="secondtab">
<!--            <h1>I'm in secondtab tab</h1>-->
             {{--   @includeIf('admin.crecRegPeople.indextab',['crecRegPeoples'=>'555'])  --}}
       @includeIf('admin.crecRegPeople.indextab',['crecRegPeoples'=>$crecRegRequest->crecRegPersons,'crecRegRequestid'=>$crecRegRequest->id])
        </div>
        <div class="tab-pane fade" id="thirdtab">
<!--         <h1>I'm in thirdtab tab</h1>-->
        @includeIf('admin.crecRegBranches.indextab',['crecRegBranches'=>$crecRegRequest->crecRegBranchs,'crecRegRequestid'=>$crecRegRequest->id])     
            
            
         </div>
        <div class="tab-pane fade" id="fourtab">
        
<!--         <h1>I'm in fourtab tab</h1>-->
            
          @includeIf('admin.crecRegDelegates.indextab',['crecRegDelegates'=>$crecRegRequest->crecRegDelegates,'crecRegRequestid'=>$crecRegRequest->id])     
        
        </div>
         <div class="tab-pane fade" id="fivetab">
<!--         <h1>I'm in fivetab tab</h1>-->
              
          @includeIf('admin.crecRegDocs.indextab',['crecRegDocs'=>$crecRegRequest->crecRegDocs,'crecRegRequestid'=>$crecRegRequest->id])     

        
        </div>
        </div>









@endsection