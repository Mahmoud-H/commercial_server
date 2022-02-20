<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserReceipt;
use App\Http\Requests\StoreUserReceiptRequest;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\ComWorkClass;
use App\Models\CrecRegRequest;
use App\Models\ComNeededDoc;
use App\Models\CrecRegPerson;
use App\Models\CrecRegDoc;
use App\Models\Receipt;
use App\Models\ServiceNeededFee;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use App\Models\PersonType;
use Gate;
use Illuminate\Http\Request;
use Redirect;
use DB;
use App\Models\Media;
use App\Models\Message;
use File;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use Symfony\Component\HttpFoundation\Response;
use App\Exports\CrecRegRequestExport;
use App\Exports\CrecRegRequestsearchExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\AuthSso\AuthSso;
 
class FrontController extends Controller
{
    public $model;
        public function logousst(){
        $auth = new AuthSso('sso');
        if($auth->isAuthenticated()){
               $auth->logout();
               
        }
          $auth->login('http://mne.ps/commercial/public/front/UserFront');

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_reg_request_data(Request $request)
    {
        return Excel::download(new CrecRegRequestExport($request->id), 'students.xlsx');
    }

    public function regsearch(Request $request)
    {
        $userid = Auth::id();
        
        if($request->export_excel == "export_excel")
        {
           //  dd($userid);
           // dd("export_excel");
             if($request->from_crec_start_date==""&$request->to_crec_start_date==""&$request->status=="")
       {
                //  dd($userid);
       //dd("empty");
             $userid = Auth::id();
         if($userid == 1 || 4)
        {
       return Excel::download(new CrecRegRequestsearchExport($userid), 'crecregrequest.xlsx');

//            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();
//            return view('admin.front.index', compact('crecRegRequests'));

        } else{
            //  dd($userid);
           //  $userid = null;
    return Excel::download(new CrecRegRequestsearchExport($userid), 'crecregrequest.xlsx');
//            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
//                ->where('userid',$userid)
//                ->get();
//            return view('admin.front.index', compact('crecRegRequests'));
    
        }     
            
            
              
       }
            else{
                 if($userid == 1 || 4)
                 {
                   //  dd($userid);
  return Excel::download(new CrecRegRequestExport($request->from_crec_start_date,$request->to_crec_start_date,$request->status,$userid), 'crecregrequest.xlsx');

//     return Excel::download(new CrecRegRequestExport($request->from_crec_start_date,$request->to_crec_start_date,$request->status), 'city.xlsx');
   
                }
                else{
                   //  $userid = null;
          return Excel::download(new CrecRegRequestExport($request->from_crec_start_date,$request->to_crec_start_date,$request->status,$userid), 'crecregrequest.xlsx');

                 }
                
                
            }
        }
        
        ////////انتهاء زر الاكسل
        //dd("search");
       // dd($request->all());
        if($request->from_crec_start_date==""&$request->to_crec_start_date==""&$request->status=="")
       {
        // dd("empty");
             $userid = Auth::id();
         if($userid == 1 || 4)
        {   
            // dd("11empty");
            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();
        //    return view('admin.front.index', compact('crecRegRequests'));
      return view('admin.crecRegRequests.index', compact('crecRegRequests'));

        } else{

            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
                ->where('userid',$userid)
                ->get();
        //    return view('admin.front.index', compact('crecRegRequests'));
        return view('admin.crecRegRequests.index', compact('crecRegRequests'));
    
        }     
            
            
              
       }
            
        else{
           // dd($request->status);
//     $crecRegRequests = CrecRegRequest::
//
//         when(($request->from_crec_start_date &&  $request->to_crec_start_date), function($query) use ($request){
//    $query->whereBetween('crec_start_date', [ $request->from_crec_start_date,$request->to_crec_start_date  ]);
//})  
//    
//    
//      ->when($request->status, function($query) use ($request){
//    $query->where('status', '=', $request->status);
//})
//
//    
// // ->paginate(10);
//   ->get();
          //   dd($crecRegRequest);
             
   $userid = Auth::id();

        if($userid == 1 || 4)
        {
                 $crecRegRequests = CrecRegRequest::

         when(($request->from_crec_start_date &&  $request->to_crec_start_date), function($query) use ($request){
    $query->whereBetween('crec_start_date', [ $request->from_crec_start_date,$request->to_crec_start_date  ]);
})  
    
    
      ->when($request->status, function($query) use ($request){
    $query->where('status', '=', $request->status);
})

    
 // ->paginate(10);
   ->get();
           //  return view('admin.front.index', compact('crecRegRequests'));
              return view('admin.crecRegRequests.index', compact('crecRegRequests'));

        } else{
                 $crecRegRequests = CrecRegRequest::

         when(($request->from_crec_start_date &&  $request->to_crec_start_date), function($query) use ($request){
    $query->whereBetween('crec_start_date', [ $request->from_crec_start_date,$request->to_crec_start_date  ]);
})  
    
    
      ->when($request->status, function($query) use ($request){
    $query->where('status', '=', $request->status);
})
  // ->paginate(10);
             ->where('userid',$userid)
   ->get();

//            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
//                ->where('userid',$userid)
//                ->get();
          //  return view('admin.front.index', compact('crecRegRequests'));
            return view('admin.crecRegRequests.index', compact('crecRegRequests'));
    
        }
              
       
         
        
        }
    }

    public function accept($id)
    {
//       echo "accept";
     //  dd($id);
        $message =  Message::find(1);
       // dd($message->body_message);
        $CrecRegRequest =  CrecRegRequest::find($id);
        $CrecRegRequest->status  = "accepted" ;
        $CrecRegRequest->save();
        //echo $CrecRegRequest;
       // dd($CrecRegRequest->crec_mobile_no);
        
        $phone = $CrecRegRequest->crec_mobile_no;
        
        sendSMS($phone, env('APP_NAME'), $message->body_message);

        return back()->withInput();
    }

    public function rejected($id)
    {
//        echo "rejected";
       // dd($id);
        $message =  Message::find(2);
      //  dd($message->body_message);
        $CrecRegRequest =  CrecRegRequest::find($id);
        $CrecRegRequest->status  =  "rejected";
        $CrecRegRequest->save();
      //  dd($CrecRegRequest->crec_mobile_no);
        // echo $CrecRegRequest;
        
          $phone = $CrecRegRequest->crec_mobile_no;
        
        sendSMS($phone, env('APP_NAME'), $message->body_message);

        return back()->withInput();

    }

    public function index()
    {
       // dd("test");
        $userid = Auth::id();

       if($userid == 1 )
       //   if($userid == 1 || 4 )
        {
            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();
            return view('admin.front.index', compact('crecRegRequests'));

        } else{
            
           //   dd("test22");
                       $auth = new AuthSso('sso');
        $userdata =  $auth->getUserData();
      //  dd($userdata);
       $ident =  $userdata['attributes']['UserIdentity'][0] ;
//dd($ident);
            // $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
            //    ->where('userid',$userid)
             //   ->get();
                             $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
                ->where('crec_appl_no',$ident)
                ->get();
//dd($crecRegRequests);
            return view('admin.front.index', compact('crecRegRequests'));
    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $product = $request->session()->get('product');
       // dd("test");
//$crecRegPeople = CrecRegPerson::with(['crec_reg_request', 'person_nationality', 'country', 'governorate', 'city', 'person_type'])->get();
//  echo $crecRegPeople;
//        die();
                  $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
//        $countries = ComCountry::pluck('country_tel_prefix', 'id')->prepend(trans('global.pleaseSelect'), '');
//        echo $countries;
//        die();

      //  $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $governorates = ComGovernorate::all();
         //dd($governorates); 
      //  $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
          $cities = ComCity::all();
         // dd($cities);
        $crec_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        
                $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $branch_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
              $person_types = PersonType::pluck('person_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
               $auth = new AuthSso('sso');
        $userdata =  $auth->getUserData();

           $ident =  $userdata['attributes']['UserIdentity'][0] ; 
          // dd($ident);
            //-----------
                    $url = 'http://eservices.mtit.gov.ps/ws/gov-services/ws/getData';
             $data = '{
            "WB_USER_NAME_IN":"MNE",
            "WB_USER_PASS_IN":"1GT619A72669856214752DDB80DD87E9",
            "DATA_IN": {
            "package":"MOI_GENERAL_PKG",
            "procedure":"CITZN_INFO",
            "ID": '.$ident.'
            }
        }';

        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $data
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }
        $resultt = json_decode($result, true);
//                 $res = $resultt['DATA'][0]['FNAME_ARB']." ".$resultt['DATA'][0]['SNAME_ARB']." ".$resultt['DATA'][0]['TNAME_ARB']." ".$resultt['DATA'][0]['LNAME_ARB'];
             //echo $res ;
        $FNAME_ARB = $resultt['DATA'][0]['FNAME_ARB'];
        $SNAME_ARB = $resultt['DATA'][0]['SNAME_ARB'];
        $TNAME_ARB = $resultt['DATA'][0]['TNAME_ARB'];
        $LNAME_ARB = $resultt['DATA'][0]['LNAME_ARB'];
        
        
        $ENG_NAME = $resultt['DATA'][0]['ENG_NAME'];
        $BIRTH_DT = $resultt['DATA'][0]['BIRTH_DT'];
        $BIRTH_PMAIN = $resultt['DATA'][0]['BIRTH_PMAIN'];
        $SEX = $resultt['DATA'][0]['SEX'];
        $CI_CITY = $resultt['DATA'][0]['CI_CITY'];
        $CI_RELIGION = $resultt['DATA'][0]['CI_RELIGION'];
        $REGION_CD = $resultt['DATA'][0]['REGION_CD'];
        $CITY_CD = $resultt['DATA'][0]['CITY_CD'];
        
        $res2 = [$FNAME_ARB,$SNAME_ARB,$TNAME_ARB,$LNAME_ARB,$ENG_NAME,$BIRTH_DT,$BIRTH_PMAIN,$SEX,$CI_CITY,$CI_RELIGION,$REGION_CD,$CITY_CD];
        $res2 =  response()->json(compact('res2'));
       // dd($res2);
            
            //-----------
            
            

     return view('admin.front.create', compact('res2','userdata','countries', 'governorates', 'cities', 'crec_work_classes','crec_reg_requests', 'person_nationalities','branch_work_classes','neededdocs','person_types','product'));

    }
    
    public function postCreateStepOne(Request $request)
    {
        $validatedData =   $request->all();
        if(empty($request->session()->get('product'))){
            $product = new CrecRegRequest();
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }else{
            $product = $request->session()->get('product');
            $product->fill($validatedData);
            $request->session()->put('product', $product);
        }
 
       return redirect()->route('admin.front.create_step_two');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_step_collection_order(CrecRegRequest $reg_request)
    {
        abort_if(($reg_request->status != 'new' && !is_null($reg_request->status)), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fees = ServiceNeededFee::with('fee_type','service')->where('service_id', $reg_request->service_id)->get();

        $reg_request->load(
            'country','governorate','city',
            'crec_work_class','crecRegPersons','crecRegBranchs',
            'crecRegDelegates','crecRegDocs'
        );

        return view('admin.front.collection_order', compact('reg_request','fees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->governorate_id_reg);
          $CrecRegRequest = null;
        DB::transaction(function () use ( $request) {
        $userid = Auth::id();
       // dd($userid);
         $CrecRegRequest = CrecRegRequest::all();
        $count_type =  count($CrecRegRequest)+1;
        $count_type_pad = str_pad($count_type,10,"0",STR_PAD_LEFT);
        $num_RegRequest = $count_type_pad;
        
$this->model = new CrecRegRequest;

      //  $CrecRegRequest = new CrecRegRequest;
        $this->model->crec_code   = $num_RegRequest ;
        $this->model->crec_appl_no  = $request->crec_appl_no ;
        $this->model->crec_appl_date  = $request->crec_appl_date ;
        $this->model->crec_register_no  = $request->crec_register_no ;
        $this->model->crec_comp_name_a  = $request->crec_comp_name_a ;
        $this->model->crec_comp_name_l  = $request->crec_comp_name_l ;
        $this->model->crec_comp_name_h  = $request->crec_comp_name_h ;
        $this->model->crec_start_date  = $request->crec_start_date ;
        $this->model->crec_brand_name  = $request->crec_brand_name ;
        $this->model->country_id  = $request->country_id ;
        $this->model->governorate_id  = $request->governorate_id ;
        $this->model->city_id  = $request->city_id ;
        $this->model->crec_address_a  = $request->crec_address_a ;
        $this->model->crec_address_l  = $request->crec_address_l ;
        $this->model->crec_street  = $request->crec_street ;
        $this->model->crec_bldg_no  = $request->crec_bldg_no ;
        $this->model->crec_tel_no  = $request->crec_tel_no ;
        $this->model->crec_fax_no  = $request->crec_fax_no ;
        $this->model->crec_mobile_no  = $request->crec_mobile_no ;
        $this->model->crec_po_box  = $request->crec_po_box ;
        $this->model->crec_email  = $request->crec_email ;
        $this->model->crec_website  = $request->crec_website ;
        $this->model->crec_applicant_id_no  = $request->crec_applicant_id_no ;
        $this->model->crec_applicant_name  = $request->crec_applicant_name ;
        $this->model->crec_end_date  = $request->crec_end_date ;
        $this->model->crec_notes  = $request->crec_notes ;
        $this->model->crec_work_class_id  = $request->crec_work_class_id ;
        $this->model->crec_work_name  = $request->crec_work_name ;
        $this->model->userid  = $userid ;
        $this->model->service_id  = 1;
        $this->model->status = 'new';
       // dd($this->model);
      // dd($this->model->governorate_id);
        $this->model->save();
// dd($this->model);
        $crecRegPerson = new CrecRegPerson;
        $crecRegPerson->crec_reg_request_id  = $this->model->id ;
       // $crecRegPerson->crec_reg_request_id  = $CrecRegRequest->id ;
        $crecRegPerson->person_id_no  = $request->person_id_no ;
        $crecRegPerson->person_name_a  = $request->person_name_a ;
        $crecRegPerson->person_name_l  = $request->person_name_l ;
        $crecRegPerson->person_birth_date  = $request->person_birth_date ;
        $crecRegPerson->person_birth_place  = $request->person_birth_place ;
        $crecRegPerson->person_gender  = $request->person_gender ;
        $crecRegPerson->person_nationality_id  = $request->person_nationality_id ;
        $crecRegPerson->country_id  = $request->country_id_reg ;
        $crecRegPerson->governorate_id  = $request->governorate_id_reg ;
        $crecRegPerson->city_id  = $request->city_id_reg ;
        $crecRegPerson->person_address_a  = $request->person_address_a ;
        $crecRegPerson->person_address_l  = $request->person_address_l ;
        $crecRegPerson->person_street  = $request->person_street ;
        $crecRegPerson->person_bldg_no  = $request->person_bldg_no ;
        $crecRegPerson->person_tel_no  = $request->person_tel_no ;
        $crecRegPerson->person_fax_no  = $request->person_fax_no ;
        $crecRegPerson->person_mobile_no  = $request->person_mobile_no ;
        $crecRegPerson->person_po_box  = $request->person_po_box ;
        $crecRegPerson->person_email  = $request->person_email ;
        $crecRegPerson->person_notes  = $request->person_notes ;
        $crecRegPerson->person_type_id  = $request->person_type_id ;
       //dd($crecRegPerson);
        $crecRegPerson->save();
 
         if($request->doc_file != null){
            foreach (array_combine($request->doc_file, $request->neededdocsid) as $doc => $needed) {
                
               // $cre =  CrecRegRequest::find($CrecRegRequest->id);
                 $cre =  CrecRegRequest::find($this->model->id);
                $crec_code = $cre->crec_code;
                $ComNeededDoc = ComNeededDoc::find($needed);
                $needed_doc_name_code = $ComNeededDoc->code;
                $setting =  Setting::first();
                $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';
                $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();
                $count_media = count($media);
                $crecRegDoc = new CrecRegDoc; 
            //    $crecRegDoc->crec_reg_request_id  = $CrecRegRequest->id ;
                  $crecRegDoc->crec_reg_request_id  = $this->model->id ;
                $crecRegDoc->neededdoc_id  = $needed ;
                $crecRegDoc->save();

                $extension = explode('.',$doc);
                $count_media ++;
                $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);
                $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
                $full_name = $num_file.".".$extension[1];

                $disk = Storage::disk('public');
                $source = public_path()."/uploads/".$doc;

                $disk = Storage::disk('public');
                $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,file_get_contents($source));

                $media= new Media();
                $media->name = $full_name;
                $media->fileable_type = CrecRegDoc::class;
                $media->fileable_id = $crecRegDoc->id;
                $media->collection_name = "crecRegDoc";
                $media->disk   = "public";
                $media->file_name  = $full_name;
                $media->save();
            }
         }
          // return Redirect::to('admin/front/'.$CrecRegRequest->id.'/collection_order');
});
//dd($CrecRegRequest);

 return Redirect::to('admin/front/'.$this->model->id.'/collection_order');
        //  return Redirect::to('admin/front/'.$CrecRegRequest->id.'/collection_order');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crecRegRequest = CrecRegRequest::find($id);
        $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
           ->where('id',$id)
           ->get();

        $crecRegPeoples = $crecRegRequest->crecRegPersons;
        $crecRegBranches = $crecRegRequest->crecRegBranchs;
        $crecRegDelegates  = $crecRegRequest->crecRegDelegates;
        $crecRegDocs  = $crecRegRequest->crecRegDocs;
        $arr = [];

        foreach($crecRegDocs as $cre)
        {
            $media =  Media::where('fileable_id',$cre->id)->get();
            array_push($arr,$media);
        }

        return view('admin.front.show', compact('crecRegRequest','crecRegPeoples','crecRegBranches','crecRegDelegates','crecRegDocs','crecRegRequests','arr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approval_request(CrecRegRequest $reg_request)
    {
        abort_if(($reg_request->status != 'new' && !is_null($reg_request->status)), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reg_request->load('receipt');

        return view('admin.front.approval_request' , compact('reg_request'));
    }

    public function store_approval_request(StoreUserReceiptRequest $request,$reg_request)
    {
        $user_request = CrecRegRequest::findOrFail($reg_request);
        abort_if(($user_request->status != 'new' && !is_null($user_request->status)), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receipt = new Receipt();
        $receipt->crec_reg_request_id = $reg_request;
        $receipt->receipt_date = $request->receipt_date;
        $receipt->receipt_number = $request->receipt_number;
        $receipt->save();

        $user_request->status = 'pending';
        $user_request->save();

        return redirect()->route('admin.front.index');
    }

    public function exportPDF(CrecRegRequest $reg_request)
    {
        
        //abort_if($reg_request->userid !== Auth::user()->id,404);
        
        ini_set("memory_limit", "-1");
        set_time_limit(0);

        $fees = ServiceNeededFee::with('fee_type.currency','fee_type.fee_class','service')
            ->where('service_id', $reg_request->service_id)
            ->get();

        $obj_total = [
            'currency' => "",
            'total' => 0,
        ];

        $total = 0;
        foreach($fees as $key => $fee){
            $total += $fee->fee_type->fee_type_amt * 1;
        }

        $obj_total["total"] = $total;
        $obj_total["currency"] = $fees && isset($fees[0]) && $fees[0]->fee_type && $fees[0]->fee_type->currency
                                ? $fees[0]->fee_type->currency->currency_name_a : "-";

        $reg_request->load(
            'country','governorate','city',
            'crec_work_class','crecRegPersons','crecRegBranchs',
            'crecRegDelegates','crecRegDocs'
        );

        $report_name = 'أمر تحصيل';


        $pdf = \PDF::loadView('pdf.collection_order', compact('report_name', 'fees' , 'reg_request','obj_total'));

        return $pdf->stream($report_name . time() . '.pdf');

//        \File::exists(public_path() . '/uploads/pdf') or \File::makeDirectory(public_path() . '/uploads/pdf', 755, true);
//        \File::exists(public_path() . '/uploads/pdf') or \File::makeDirectory(public_path() . '/uploads/pdf/', 0755, true);
//        $pdf = \PDF::loadView('pdf.index2', compact('users_dosnt_has_shift', 'returned_users', 'from', 'to'), [], ['orientation' => 'L', 'format' => 'A4-L']);
//        $pdf_name = 'pdf-' . mt_rand(6, 999999) . '.pdf';
//        $pdf_link = 'uploads/pdf/' . $pdf_name;
//        $pdf->save('uploads/pdf/' . $pdf_name);
//        return  $pdf_link;
    }
}
