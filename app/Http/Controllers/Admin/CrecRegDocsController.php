<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrecRegDocRequest;
use App\Http\Requests\StoreCrecRegDocRequest;
use App\Http\Requests\UpdateCrecRegDocRequest;
use App\Models\ComNeededDoc;
use App\Models\CrecRegDoc;
use App\Models\CrecRegRequest;
use App\Models\Setting;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Redirect;
use DB;
use App\Models\Media;
use File;

class CrecRegDocsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crec_reg_doc_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDocs = CrecRegDoc::with(['crec_reg_request', 'neededdoc'])->get();

        return view('admin.crecRegDocs.index', compact('crecRegDocs'));
}

    public function createcrecregdocs($crecRegRequestid)
    {
        abort_if(Gate::denies('crec_reg_doc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::where('id',$crecRegRequestid)->pluck('crec_comp_name_a', 'id');

        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegDocs.create', compact('crec_reg_requests', 'neededdocs'));
    }

    public function create()
    {
        abort_if(Gate::denies('crec_reg_doc_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.crecRegDocs.create', compact('crec_reg_requests', 'neededdocs'));
    }

    public function store(StoreCrecRegDocRequest $request)
    {
        $input = $request->all();
        $image = $request->file('doc_file');
        if ($image) {
            $cre =  CrecRegRequest::find($request->crec_reg_request_id);
            $crec_code = $cre->crec_code;

            $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
            $needed_doc_name_code = $ComNeededDoc->code;
            $setting = Setting::first();
            $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';

            $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();

            $count_media = count($media) + 1;

            $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);

            $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;

            $full_name = $num_file.".".$image->getClientOriginalExtension();
             $disk = Storage::disk('public');
         $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,file_get_contents($image)); // 'public_users_request' ,
            $fullPath = 'storage/'.$static.'_'.$crec_code.'/'.$full_name; //'storage/' . $path;
            $input['doc_file'] = "$fullPath";
        }
  
        $crecRegDoc = CrecRegDoc::create($input);
        if ($image) {
        $media = new Media();
        $media->name = $full_name;
        $media->fileable_type = CrecRegDoc::class;
        $media->fileable_id = $crecRegDoc->id;
        $media->collection_name = "crecRegDoc";
        $media->disk   = "public";
        // $media->size   = 1;//$file->getSize();
        //    $media->manipulations   = "qqq" ;
        // $media->custom_properties    = "oo";
        // $media->responsive_images    ="1";
        $media->file_name  = $full_name;
        $media->save();
  }
//     return redirect()->route('admin.front.create', ['crecRegRequest' => $crecRegDoc->crec_reg_request_id]);
//      die();
      //  dd("done");

        
         return Redirect::to('/admin/crec-reg-requests/'.$crecRegDoc->crec_reg_request_id.'/edit');
      //  return redirect()->route('admin.crec-reg-docs.index');
    }

    public function edit(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

//        $crec_reg_requests = CrecRegRequest::pluck('crec_comp_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');
//        $neededdocs = ComNeededDoc::pluck('needed_doc_name_a', 'id')->prepend(trans('global.pleaseSelect'), '');

        $crecRegDoc->load('crec_reg_request', 'neededdoc');
//        'crec_reg_requests', 'neededdocs',
        return view('admin.crecRegDocs.edit', compact('crecRegDoc'));
    }

    public function update(UpdateCrecRegDocRequest $request, CrecRegDoc $crecRegDoc)
    {
        $input = $request->all();
        $image = $request->file('doc_file');
        if ($image) {
             $cre =  CrecRegRequest::find($request->crec_reg_request_id);
             $crec_code = $cre->crec_code;
             $ComNeededDoc = ComNeededDoc::find($request->neededdoc_id);
             $needed_doc_name_code = $ComNeededDoc->code;
             $setting = Setting::first();
             $static = $setting ? $setting->prefix_folder : config('panel.prefix_folder'); // '001';

             $media = CrecRegDoc::where('crec_reg_request_id', $request->crec_reg_request_id)->withTrashed()->get();
             $count_media = count($media) + 1;
         
             $count_media_pad = str_pad($count_media,4,"0",STR_PAD_LEFT);

             $num_file = $static.'_'.$crec_code.'_'.$needed_doc_name_code.'_'.$count_media_pad;
             $full_name = $num_file.".".$image->getClientOriginalExtension();

             $disk = Storage::disk('public');
             $path = $disk->put($static.'_'.$crec_code.'/'.$full_name,file_get_contents($image)); // 'public_users_request' ,
             $fullPath = 'storage/'.$static.'_'.$crec_code.'/'.$full_name; //'storage/' . $path;
             $input['doc_file'] = "$fullPath";

             $media = new Media();
             $media->name = $full_name;
             $media->fileable_type = CrecRegDoc::class;
             $media->fileable_id = $crecRegDoc->id;
             $media->collection_name = "crecRegDoc";
             $media->disk   = "public";
             // $media->size   = 1;//$file->getSize();
             //    $media->manipulations   = "qqq" ;
             // $media->custom_properties    = "oo";
             // $media->responsive_images    ="1";
             $media->file_name  = $full_name;
             $media->save();
        }
        $crecRegDoc->update($input);

        return Redirect::to('/admin/crec-reg-requests/'.$crecRegDoc->crec_reg_request_id.'/edit');
    }

    public function show(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crecRegDoc->load('crec_reg_request', 'neededdoc');

        return view('admin.crecRegDocs.show', compact('crecRegDoc'));
    }

    public function destroy(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file_Doc = CrecRegDoc::where('id',$crecRegDoc->id)->first();
        $path = explode('.',$file_Doc->doc_file);

        $deleted_at = Carbon::now()->format('Y_m_d_h_i_s');
        rename(public_path('/'.$file_Doc->doc_file), public_path('/'.$path[0].'_delete_'.$deleted_at.'.'.$path[1]));

        $media = Media::where('fileable_id',$crecRegDoc->id)->first();
        $media->delete();

        $crecRegDoc->delete();

        return back();
    }

    public function deleteFile(CrecRegDoc $crecRegDoc)
    {
        abort_if(Gate::denies('crec_reg_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $file_Doc = CrecRegDoc::where('id',$crecRegDoc->id)->first();
        $path = explode('.',$file_Doc->doc_file);

//        $random = rand(1,1000);
        $deleted_at = Carbon::now()->format('Y_m_d_h_i_s');
        rename(public_path('/'.$file_Doc->doc_file), public_path('/'.$path[0].'_delete_'.$deleted_at.'.'.$path[1]));

        $media = Media::where('fileable_id',$crecRegDoc->id)->first();
        $media->delete();

        $file_Doc->doc_file = null;
        $file_Doc->save();

        return back();
    }

    public function massDestroy(MassDestroyCrecRegDocRequest $request)
    {
        CrecRegDoc::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
