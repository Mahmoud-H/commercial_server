<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
 use App\Models\ComCity;
use App\Models\ComCountry;
use App\Models\ComGovernorate;
use App\Models\CrecRegPerson;
use App\Models\CrecRegRequest;
use App\Models\PersonType;
use App\Models\CrecRegDoc;
use App\Models\CrecRegDocTemp;
 use Gate;
 use Symfony\Component\HttpFoundation\Response;
use Redirect;
 use App\Models\ComNeededDoc;
use Session;

class FrontSessionController extends Controller
{
       public function createStepTwo(Request $request)
    {
          // dd("test");
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
//          echo $product;
//          die();
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_nationalities = ComCountry::pluck('nationality_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = ComCountry::pluck('country_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $governorates = ComGovernorate::pluck('governorate_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $cities = ComCity::pluck('city_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $person_types = PersonType::pluck('person_type_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

           
       return view('admin.front.create_step_two',compact('product','crec_reg_requests', 'person_nationalities', 'countries', 'governorates', 'cities', 'person_types','product2'));
    } 
    
     public function postCreateStepTwo(Request $request)
    {
          //dd("test");
        $product = $request->session()->get('product');
//         echo $request->session()->get('product');
//         die();
          $validatedData =   $request->all();
         
            if(empty($request->session()->get('product2'))){
            $product2 = new CrecRegPerson();
            $product2->fill($validatedData);
            $request->session()->put('product2', $product2);
        }else{
            $product2 = $request->session()->get('product2');
            $product2->fill($validatedData);
            $request->session()->put('product2', $product2);
        }
         
//                  echo $request->session()->get('product2');
//                  echo $product2;
//         die();
         return redirect()->route('admin.front.create_step_three');

         
       //  dd($request->all());
    	
//            $request->validate([
//            'stock' => 'required',
//            'status' => 'required',
//        ]);
//$validatedData = $request->all();
//        $product = $request->session()->get('product');
//        $product->fill($validatedData);
//        $request->session()->put('product', $product);
        // echo $product;
       //  echo $request->session()->get('product');
         

       // return redirect()->route('products.create.step.three');
    }
    
      public function createStepthree(Request $request)
    {
         // dd("three");
                  $product = $request->session()->get('product');
                  $product2 = $request->session()->get('product2');
                  $product3_regdocs = $request->session()->get('product3_regdocs');
        //  echo $product2;
        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
          $neededdocscount = ComNeededDoc::all();

 return view('admin.front.create-step-three',compact('product','product2','crec_reg_requests','neededdocs','neededdocscount','product3_regdocs'));

          
        //  dd("test");
      }
     public function postCreateStepThree(Request $request)
     {
        $product = $request->session()->get('product');
        $product2 = $request->session()->get('product2');
        $product3_regdocs = $request->session()->get('product3_regdocs'); 
       // dd($request->session()->get('product3_regdocs'));
             
//          echo $request->session()->get('product');
//          echo $request->session()->get('product2');
//          echo $request->session()->get('product3_regdocs');
//         die();
                    $validatedData =   $request->all();
         
            if(empty($request->session()->get('product3_regdocs'))){
            $product3_regdocs = new CrecRegDoc();
            $product3_regdocs->fill($validatedData);
            $request->session()->put('product3_regdocs', $product3_regdocs);
        }else{
            $product3_regdocs = $request->session()->get('product3_regdocs');
            $product3_regdocs->fill($validatedData);
            $request->session()->put('product3_regdocs', $product3_regdocs);
        }
//         echo $request->session()->get('product3_regdocs');
//      die();

//         $a=array("red","green");
//array_push($a,"blue","yellow");
         
    //  dd($product3_regdocs->doc_file);
         
          $a =  [];
               // if(!isset($product3_regdocs->doc_file)) {
               //if(!isset($register->doc_file)) {
            // dd("test");
       if (is_array($request->file('doc_file')) || is_object($request->file('doc_file'))){

        foreach($request->file('doc_file') as $file)
        {
            // dd($file->getClientOriginalName());
             //dd($file);
//           $CrecRegRequestid = CrecRegRequest::all()->last()->id;
//       //  dd($CrecRegRequestid+1);
//
//            //dd($product);
//          //  dd($product->id);
//            $cre =  CrecRegRequest::find($product->id);
//            $crec_code = $cre->crec_code;
//
//            $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
//            $needed_doc_name_code = $ComNeededDoc->code;
//            $setting = Setting::first();
//            $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';
            
     
            
            
      // $full_name = "qwe".".".$file->getClientOriginalExtension();
   //   $full_name = rand(10,100).".".$file->getClientOriginalExtension();
      $full_name = $file->getClientOriginalName().".".$file->getClientOriginalExtension();
            
//    $media = CrecRegDoc::where('crec_reg_request_id', $product->id)->withTrashed()->get();
//// $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();
//
//            $count_media = count($media) + 1;
//
//            $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);
//
//            $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
//
//            $full_name = $num_file.".".$image->getClientOriginalExtension();
//
//             $full_name = rand(10,100).".".$file->getClientOriginalExtension();
            
           // echo $full_name."<br>";
            $file->move(public_path("uploads"), $full_name); 
            array_push($a,$full_name);
//            echo $a;
//            die();
//            $product3_regdocs = $request->session()->get('product3_regdocs');
//            $product3_regdocs->doc_file[] = $fileName;
//            $request->session()->put('product3_regdocs', $product3_regdocs);

            
        }
//            dd($product3_regdocs) ;
//             print_r($a);        
//             die();
         }
      // echo $product3_regdocs;
       //  $product3_regdocs->doc_file =  ["12","2","qw"];
//       $CrecRegRequestid = CrecRegRequest::all()->last()->id;
//         dd($CrecRegRequestid+1);
         $product3_regdocs->doc_file = $a ;
                    
          dd($product3_regdocs);         
        // print_r($product3_regdocs->doc_file); 
        die();
                 
       //  dd($a);
//      die();
//                    die();
//                    dd($request->doc_file);
                    
//            $request->validate([
////                'productimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            ]);
//            $fileName = "productImage-" . time() . '.' . request()->productimg->getClientOriginalExtension();
//           // dd($request->productimg);
//            $request->productimg->move(public_path("messages"), $fileName);
//           // die();
//           // $request->productimg->storeAs('productimg', $fileName);
//            $register = $request->session()->get('register');
//            $register->productImg = $fileName;
//            $request->session()->put('register', $register);
//            echo $register."123";
//            die();
                    
       // }
         
         
         
         
           // dd($validatedData['doc_file']);
//         Session::push('doc_file', $validatedData['doc_file']);
//         $doc_file_session = Session::get('doc_file');
//       //  dd($doc_file_session);
//      // dd(Session::get('doc_file'));
//            if(empty($request->session()->get('product3_regdocs'))){
//            $product3_regdocs = new CrecRegDoc();
//            $product3_regdocs->fill($validatedData);
//            $request->session()->put('product3_regdocs', $product3_regdocs);
//        }else{
//            $product3_regdocs = $request->session()->get('product3_regdocs');
//            $product3_regdocs->fill($validatedData);
//            $request->session()->put('product3_regdocs', $product3_regdocs);
//        }
       // echo $request->session()->get('product3_regdocs');
//         dd($validatedData);
//        die();
         // dd($doc_file_session);
         
        // dd($input);
//         if (is_array($request->file('doc_file')) || is_object($request->file('doc_file'))){
//
//        foreach($request->file('doc_file') as $file)
//        {
//             $input = $request->all();
//           // dd($file);
//            $destinationPath = 'image/';
//            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
//            $file->move($destinationPath, $profileImage);
//            $input['image'] = "$profileImage";
//           // echo $input['image']."<br>";
////            print_r($request->all());
////            echo "<br>";
//         //  CrecRegDocTemp::create($input);
//            
//        $CrecRegDocTemp =  new CrecRegDocTemp();
//          //  $CrecRegDocTemp->crec_reg_request_id = $request->crec_reg_request_id;
//           // $CrecRegDocTemp->neededdoc_id = $request->neededdoc_id;
//            $CrecRegDocTemp->docs_date = $request->docs_date;
//            $CrecRegDocTemp->docs_ref_code = $request->docs_ref_code;
//            $CrecRegDocTemp->doc_file = $input['image'];
//            
//            $CrecRegDocTemp->save();
//            echo $CrecRegDocTemp;
//             /// echo $request->crec_reg_request_id."<br>"."done1";  
//  
//         }
////             CrecRegDocTemp::create($input);
////             dd("done");
//         }
        //  return redirect()->route('admin.fron.create.step.four');
         
     }
    
     public function createStepfour(Request $request)
    {
             //dd("test");
             $product = $request->session()->get('product');
            $product2 = $request->session()->get('product2');
      $product3_regdocs =   $request->session()->get('product3_regdocs');
//$doc_file_session = Session::get('doc_file');
//         dd($doc_file_session);
        
    }
    
    
}
