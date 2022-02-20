<?php

//namespace App\Http\Controllers;
//namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\MassDestroyCrecRegRequestRequest;
use App\Http\Requests\StoreCrecRegRequestRequest;
use App\Http\Requests\UpdateCrecRegRequestRequest;
use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\ComWorkClass;
use App\Models\CrecRegRequest;
use App\Models\ComNeededDoc;
use App\Models\CrecRegPerson;
use App\Models\CrecRegBranch;
use App\Models\CrecRegDelegate;
use App\Models\CrecRegDoc;
use Illuminate\Support\Facades\Storage;
use App\Models\PersonType;
 
 use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
use DB;
use App\Models\Media;
use File;
 use Illuminate\Support\Facades\Auth;
 use App\Models\Setting;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //  dd("11");
        
        $userid = Auth::id();
//        dd($userid);
        if($userid == 1)
        {
    $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();
      return view('admin.front.index', compact('crecRegRequests'));

        }
        else{
            $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
                ->where('userid',$userid)
                ->get();
      return view('admin.front.index', compact('crecRegRequests'));
    
        }
//     $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])->get();
//
//     return view('admin.front.index', compact('crecRegRequests'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $product = $request->session()->get('product');
      //  dd("test");
//$crecRegPeople = CrecRegPerson::with(['crec_reg_request', 'person_nationality', 'country', 'governorate', 'city', 'person_type'])->get();
//  echo $crecRegPeople;
//        die();
                  $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
//        $countries = ComCountry::pluck('country_tel_prefix', 'id')->prepend(trans('global.pleaseSelect'), '');
//        echo $countries;
//        die();

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crec_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        
                $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $branch_work_classes = ComWorkClass::pluck('work_class_desc_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
              $person_types = PersonType::pluck('person_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

     return view('admin.front.create', compact('countries', 'governorates', 'cities', 'crec_work_classes','crec_reg_requests', 'person_nationalities','branch_work_classes','neededdocs','person_types','product'));

    }
    
       public function postCreateStepOne(Request $request)
    {
       //   dd($request->session()->all());
//                  $validatedData = $request->validate([
//            'crec_appl_date' => 'required',
//            'crec_comp_name_a' => 'required',
//          'crec_register_no' => 'required',
//          'country_id' => 'required',
//      'city_id' => 'required',
//      'crec_applicant_id_no' => 'required',
//                      
//                      
//        ]);
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
 
           
          // echo $request->session()->get('product');
          // dd("123");
       return redirect()->route('admin.front.create_step_two');
           

 //            return redirect()->route('products.create.step.two');
    }
    
      public function createStepTwo(Request $request)
    {
          dd("test");
//        $product = $request->session()->get('product');
//          echo $product;
//          die();

      //  return view('products.create-step-two',compact('product'));
    }
    
    
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd("1123");
//         dd($request->doc_file);
//        die();
       // dd($request->person_type_id);
       // dd("123");
      //  dd($request->person_id_no);
       // dd($request->all());
        $userid = Auth::id();
     //   dd($id);

            $CrecRegRequest = CrecRegRequest::all();
       $count_type =  count($CrecRegRequest)+1; 
       $count_type_pad = str_pad($count_type,10,"0",STR_PAD_LEFT);      
        // $num_mesg = date('Y').'-'.$msg_type_num.'-'.$count_type_pad;
      // $num_RegRequest = date('Y').'-'.$count_type_pad;
       $num_RegRequest = $count_type_pad;
     
  
        
       $CrecRegRequest = new CrecRegRequest;
       $CrecRegRequest->crec_code   = $num_RegRequest ;
       $CrecRegRequest->crec_appl_no  = $request->crec_appl_no ;
       $CrecRegRequest->crec_appl_date  = $request->crec_appl_date ;
       $CrecRegRequest->crec_register_no  = $request->crec_register_no ;
       $CrecRegRequest->crec_comp_name_a  = $request->crec_comp_name_a ;
       $CrecRegRequest->crec_comp_name_l  = $request->crec_comp_name_l ;
       $CrecRegRequest->crec_comp_name_h  = $request->crec_comp_name_h ;
       $CrecRegRequest->crec_start_date  = $request->crec_start_date ;
       $CrecRegRequest->crec_brand_name  = $request->crec_brand_name ;
       $CrecRegRequest->country_id  = $request->country_id ;
       $CrecRegRequest->governorate_id  = $request->governorate_id ;
       $CrecRegRequest->city_id  = $request->city_id ;
       $CrecRegRequest->crec_address_a  = $request->crec_address_a ;
       $CrecRegRequest->crec_address_l  = $request->crec_address_l ;
       $CrecRegRequest->crec_street  = $request->crec_street ;
       $CrecRegRequest->crec_bldg_no  = $request->crec_bldg_no ;
       $CrecRegRequest->crec_tel_no  = $request->crec_tel_no ;
       $CrecRegRequest->crec_fax_no  = $request->crec_fax_no ;
       $CrecRegRequest->crec_mobile_no  = $request->crec_mobile_no ;
       $CrecRegRequest->crec_po_box  = $request->crec_po_box ;
       $CrecRegRequest->crec_email  = $request->crec_email ;
       $CrecRegRequest->crec_website  = $request->crec_website ;
       $CrecRegRequest->crec_applicant_id_no  = $request->crec_applicant_id_no ;
       $CrecRegRequest->crec_applicant_name  = $request->crec_applicant_name ;
       $CrecRegRequest->crec_end_date  = $request->crec_end_date ;
       $CrecRegRequest->crec_notes  = $request->crec_notes ;
       $CrecRegRequest->crec_work_class_id  = $request->crec_work_class_id ;
       $CrecRegRequest->crec_work_name  = $request->crec_work_name ;
       $CrecRegRequest->userid  = $userid ;
       $CrecRegRequest->save();
//         echo $CrecRegRequest;
//        die();
 
         
        $crecRegPerson = new CrecRegPerson;
        
          $crecRegPerson->crec_reg_request_id  = $CrecRegRequest->id ;
          $crecRegPerson->person_id_no  = $request->person_id_no ;
          //$crecRegPerson->person_id_no  = 12 ;
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
          $crecRegPerson->save();
//        echo $crecRegPerson;
//        die();
        
     
        
        
     /*  if ($image = $request->file('doc_file')) {
     // $cre =  CrecRegRequest::find($request->crec_reg_request_id);
      $cre =  CrecRegRequest::find($CrecRegRequest->id);
//        echo $cre;
//        die();
         $crec_code = $cre->crec_code;
       
     //   echo  $request->neededdoc_id;
       $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
       $needed_doc_name_code = $ComNeededDoc->needed_doc_name_a;
        $static = '001';
//        echo $static.'_'.$crec_code.'_'.$needed_doc_name_code;
//         die();
     
        
//     $media = DB::table('crec_reg_docs')->where('crec_reg_request_id', $request->crec_reg_request_id)->get();
     $media = DB::table('crec_reg_docs')->where('crec_reg_request_id', $CrecRegRequest->id)->get();
     $count_media = count($media)+1 ; 
     //   echo $count_media;
       
        
  $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);
   $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
  $full_name = $num_file.".".$image->getClientOriginalExtension();

      
    $path = public_path().'/uploads/';
   File::makeDirectory($path, $mode = 0777, true, true);
 
             $destinationPath = 'uploads/';
           // $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            //$image->move($destinationPath, $profileImage);
            $image->move($destinationPath, $full_name);
           // $input['doc_file'] = "$profileImage";
         //   $input['doc_file'] = "$full_name";
        }*/
      
//         $image = $request->file('doc_file');
//        if ($image) {
        
          //   dd($request->doc_file);
//        foreach($request->doc_file as $doc)
//        {
//         //   echo $doc."<br>";
//           $xxx =   explode('.',$doc)  ;
//            dd($xxx[1]);
//
//        }
//        die();
       //  dd(count($request->doc_file));
        
            $cre =  CrecRegRequest::find($CrecRegRequest->id);
            $crec_code = $cre->crec_code;
             $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
           // dd($request->neededdoc_id);
            $needed_doc_name_code = $ComNeededDoc->code;
            $setting =  Setting::first();
            $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';
             $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();
             //$count_media = count($media) + 1;
             $count_media = count($media);
           // dd($count_media);
//               $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);
//             $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
//             echo $num_file."<br>";
//           die();


        
        
     //   dd($request->crec_reg_request_id);
        
        
      //  $count = 0;
         foreach($request->doc_file as $doc)
        {
            // echo $doc."<br>";
             $extension =   explode('.',$doc);
//            $cre =  CrecRegRequest::find($CrecRegRequest->id);
//            $crec_code = $cre->crec_code;
//             $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
//           // dd($request->neededdoc_id);
//            $needed_doc_name_code = $ComNeededDoc->code;
//            $setting =  Setting::first();
//            $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';
//             $media = CrecRegDoc::where('crec_reg_request_id', $CrecRegRequest->id)->withTrashed()->get();
//            // dd($CrecRegRequest->id);
////             $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();
//             $count_media = count($media) + 1;
            // echo $count_media."<br>";
             $count_media ++;
              $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);
             $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
             echo $num_file."<br>";
             // $full_name = $num_file.".".$image->getClientOriginalExtension();
            $full_name = $num_file.".".$extension[1];
             $disk = Storage::disk('public');
              $source = public_path()."/uploads/".$doc;
          $disk = Storage::disk('public');
         $path = $disk->put($static.'_'.$crec_code.'/'.$static.'_'.$crec_code.'_'.$full_name,file_get_contents($source));
        // $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,file_get_contents($source));
             
       //  echo $source."<br>";
      ///  echo $path."<br>";
         }
       die();
        
      //  $crecRegDoc = CrecRegDoc::create($input); 
        $crecRegDoc = new CrecRegDoc; 
   $crecRegDoc->crec_reg_request_id  = $CrecRegRequest->id ;
   $crecRegDoc->neededdoc_id  = $request->neededdoc_id ;
   $crecRegDoc->docs_date  = $request->docs_date ;
   $crecRegDoc->docs_ref_code  = $request->docs_ref_code ;
   $crecRegDoc->doc_file  = $full_name ;
  // $crecRegDoc->doc_file  = $fullPath ;
  $crecRegDoc->save();
        
        
                $media= new Media();  
           //  dd($media);
           //print_r($media);
            $media->name = $full_name;
          //  $media->model_type ="App\CrecRegDoc";
            $media->fileable_type ="App\CrecRegDoc";
           // $media->model_id = $crecRegDoc->id;
            $media->fileable_id = $crecRegDoc->id;
            $media->collection_name = "crecRegDoc";
             $media->disk   = "public";
           // $media->size   = 1;//$file->getSize();
         //    $media->manipulations   = "qqq" ;
           // $media->custom_properties    = "oo";
            // $media->responsive_images    ="1";
            $media->file_name  = $full_name;
             $media->save();

         return redirect()->route('admin.front.index');
        
//         $crecRegPerson = CrecRegPerson::create($request->all());
//         echo $crecRegPerson;
         
      //   dd("123");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function show($id)
//    {
//     }
    public function show($id)
    {
      //  dd($id);
      $crecRegRequest = CrecRegRequest::find($id);
//        echo $crecRegRequest;
//        die();
       $crecRegRequests = CrecRegRequest::with(['country', 'governorate', 'city', 'crec_work_class'])
           ->where('id',$id)
           ->get();

        $crecRegPeoples = $crecRegRequest->crecRegPersons;
        $crecRegBranches = $crecRegRequest->crecRegBranchs;
        $crecRegDelegates  = $crecRegRequest->crecRegDelegates;
        $crecRegDocs  = $crecRegRequest->crecRegDocs;
//        echo $crecRegDelegates;
//         die();
   $crecRegRequest->load('country', 'governorate', 'city', 'crec_work_class','crecRegDelegates');
        
        
 // $crecRegPerson  = CrecRegPerson::find($id);     
        
        
   return view('admin.front.show', compact('crecRegRequest','crecRegPeoples','crecRegBranches','crecRegDelegates','crecRegDocs','crecRegRequests'));
   
        
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
}

     //    $crecRegPerson->crec_reg_request_id  = $request->crec_reg_request_id ;
//         $crecRegPerson->person_id_no  = $request->person_id_no ;
//         $crecRegPerson->person_type  = $request->person_type ;
//         $crecRegPerson->person_name_a  = $request->person_name_a ;
//         $crecRegPerson->person_name_l  = $request->person_name_l ;
//         $crecRegPerson->person_birth_date  = $request->person_birth_date ;
//         $crecRegPerson->person_birth_place  = $request->person_birth_place ;
//         $crecRegPerson->person_gender  = $request->person_gender ;
//         $crecRegPerson->person_nationality_id  = $request->person_nationality_id ;
//        
//         
//         $crecRegPerson->country_id  = $request->country_id_reg ;
//        
//         $crecRegPerson->governorate_id  = $request->governorate_id_reg ;
//         $crecRegPerson->city_id  = $request->city_id_reg ;
//         $crecRegPerson->person_address_a  = $request->person_address_a ;
//         $crecRegPerson->person_address_l  = $request->person_address_l ;
//        
//         $crecRegPerson->person_street  = $request->person_street ;
//         $crecRegPerson->person_bldg_no  = $request->person_bldg_no ;
//         $crecRegPerson->person_tel_no  = $request->person_tel_no ;
//           $crecRegPerson->person_fax_no  = $request->person_fax_no ;
//          $crecRegPerson->person_mobile_no  = $request->person_mobile_no ;
//          $crecRegPerson->person_po_box  = $request->person_po_box ;
//          $crecRegPerson->person_email  = $request->person_email ;
//          $crecRegPerson->person_notes  = $request->person_notes ;
//          $crecRegPerson->deleg_address_a  = $request->deleg_address_a ;
//          $crecRegPerson->deleg_address_l  = $request->deleg_address_l ;
//         $crecRegPerson->deleg_street  = $request->deleg_street ;
//         $crecRegPerson->deleg_address_l  = $request->deleg_address_l ;
//         $crecRegPerson->deleg_bldg_no  = $request->deleg_bldg_no ;
//         $crecRegPerson->deleg_tel_no  = $request->deleg_tel_no ;
//         $crecRegPerson->deleg_fax_no  = $request->deleg_fax_no ;
//        $crecRegPerson->deleg_mobile_no  = $request->deleg_mobile_no ;
//        $crecRegPerson->deleg_po_box  = $request->deleg_po_box ;
//        $crecRegPerson->deleg_email  = $request->deleg_email ;
//        $crecRegPerson->deleg_website  = $request->deleg_website ;

  //$crecRegBranch = CrecRegBranch::create($request->all());
//    $crecRegBranch = new CrecRegBranch;     
//   $crecRegBranch->crec_reg_request_id  = $CrecRegRequest->id ;
//   $crecRegBranch->branch_no  = $request->branch_no ;
//   $crecRegBranch->country_id  = $request->country_id ;
//   $crecRegBranch->governorate_id  = $request->governorate_id ;
//   $crecRegBranch->city_id  = $request->city_id ;
//   $crecRegBranch->branch_address_a  = $request->branch_address_a ;
//   $crecRegBranch->branch_address_l  = $request->branch_address_l ;
//   $crecRegBranch->branch_street  = $request->branch_street ;
//   $crecRegBranch->branch_bldg_no  = $request->branch_bldg_no ;
//   $crecRegBranch->branch_tel_no  = $request->branch_tel_no ;
//   $crecRegBranch->branch_fax_no  = $request->branch_fax_no ;
//   $crecRegBranch->branch_mobile_no  = $request->branch_mobile_no ;
//   $crecRegBranch->branch_po_box  = $request->branch_po_box ;
//   $crecRegBranch->branch_email  = $request->branch_email ;
//   $crecRegBranch->branch_website  = $request->branch_website ;
//   $crecRegBranch->branch_contact_person  = $request->branch_contact_person ;
//   $crecRegBranch->branch_work_class_id  = $request->branch_work_class_id ;
//   $crecRegBranch->save();  
        
    
        
//  $crecRegDelegate = new CrecRegDelegate;     
//   $crecRegDelegate->crec_reg_request_id  = $CrecRegRequest->id ;      
//   $crecRegDelegate->save();

//             $source = "/uploads/'.$doc";
//           $source =  public_path().uploads/.$doc;
//             $dest = "/uploads2/ww.PNG";
//              rename($source,$dest)?"OK":"Error";
     //    $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,$source);
          //  dd($path,$static.'_'.$crec_code.'/'.$full_name,$source); 
             
             
//              rename($source,$path)?"OK":"Error";
//             // rename($source,$dest)?"OK":"Error";
//              die();
    //  rename('/uploads/'.$doc, 'uploads2');
//     $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,file_get_contents($image)); 
               //'public_users_request' ,
//            $fullPath = 'storage/'.$static.'_'.$crec_code.'/'.$full_name; //'storage/' . $path;
//             dd($fullPath);
//            $input['doc_file'] = "$fullPath";
            // dd($fullPath);
       // }
            //dd($disk);
            //Storage::move('old/file.jpg', 'new/file.jpg');
  //   Storage::move('http://localhost:8000/uploads/'.$doc, 'storage/'.$static.'_'.$crec_code.'/'.$full_name);
    // $disk->move($doc, 'storage/'.$static.'_'.$crec_code.'/'.$full_name);
          //   $path = 'uploadedFiles/' . $_POST['companyName']; // works with double-
 //             dd($source);
//             dd($doc);
//              $source = public_path()."/uploads/2.PNG";
            //  $dest= public_path()."/uploads2/ww.png";
