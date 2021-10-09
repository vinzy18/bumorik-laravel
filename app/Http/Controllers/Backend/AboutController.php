<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\T_About;
use App\Models\T_AbtVis;
use App\Models\T_AbtMis;
use App\Models\T_AbtApproach;
use App\Models\T_AbtPrinsip;
use App\Models\T_AbtSpesial;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Yoeunes\Toastr\ToastrServiceProvider;
use Intervention\Image\Exception\NotSupportedException;
use Image;
use File;

class AboutController extends Controller {

    public function index() {
        $about      = T_About::latest('created_at')->first();
        $abtvis     = T_AbtVis::latest('created_at')->first();
        $abtmis     = T_AbtMis::latest('created_at')->first();
        $approach   = T_AbtApproach::get();
        $prinsip    = T_AbtPrinsip::get();
        $spesial    = T_AbtSpesial::get();
        $rows       = [
            'abt'       =>$about,
            'abtvis'    =>$abtvis,
            'abtmis'    =>$abtmis,
            'approach'  =>$approach,
            'prinsip'   =>$prinsip,
            'spesial'   =>$spesial
        ];
        return view('backend.about', $rows);
    }
    public function updates(Request $req) {
        $req->validate([
            'abt_desc'  => 'nullable',
        ]);
        try {
            try {
                if ($req->abt_image) {
                    $imageName  = 'bg-'.date('dmYhis.').$req->abt_image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->abt_image)->save($imageSave,70); // image quality set to 70 (range 0-100) to reduce size

                    $old    = T_About::where('id',$req->id)->pluck('abt_image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_About::where('id',$req->id)->update([
                        'abt_desc'  => $req->abt_desc,
                        'abt_image' => $imagePath
                    ]);
                } else {
                    T_About::where('id',$req->id)->update([
                        'abt_desc'  => $req->abt_desc,
                    ]);
                }

                toastr()->success('About Us successfully updated.');
                return redirect()->route('admin.about.index');
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }

        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function updateVis(Request $req) {
        $req->validate([
            'vis_desc'  => 'nullable',
        ]);
        try {
            try {
                if ($req->vis_image) {
                    $imageName  = 'visi-'.date('dmYhis.').$req->vis_image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->vis_image)->save($imageSave,70); // image quality set to 70 (range 0-100) to reduce size

                    $old    = T_AbtVis::where('id',$req->id)->pluck('vis_image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_AbtVis::where('id',$req->id)->update([
                        'vis_desc'  => $req->vis_desc,
                        'vis_image' => $imagePath
                    ]);
                } else {
                    T_AbtVis::where('id',$req->id)->update([
                        'vis_desc'  => $req->vis_desc,
                    ]);
                }

                toastr()->success('About Us successfully updated.');
                return redirect()->route('admin.about.index');
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }

        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function updateMis(Request $req) {
        $req->validate([
            'mis_desc'  => 'nullable',
        ]);
        try {
            try {
                if ($req->mis_image) {
                    $imageName  = 'misi-'.date('dmYhis.').$req->mis_image->extension();
                    $imageSave  = storage_path('app/public/kit/images/'.$imageName);
                    $imagePath  = '/storage/kit/images/'.$imageName;
                    Image::make($req->mis_image)->save($imageSave,70); // image quality set to 70 (range 0-100) to reduce size

                    $old    = T_AbtMis::where('id',$req->id)->pluck('mis_image');
                    File::delete(public_path($old[0])); // delete old image file

                    T_AbtMis::where('id',$req->id)->update([
                        'mis_desc'  => $req->mis_desc,
                        'mis_image' => $imagePath
                    ]);
                } else {
                    T_AbtMis::where('id',$req->id)->update([
                        'mis_desc'  => $req->mis_desc,
                    ]);
                }

                toastr()->success('About Us successfully updated.');
                return redirect()->route('admin.about.index');
            } catch (NotSupportedException $ns){
                $msg = $ns->getMessage();
                toastr()->error($msg, 'Error!');
                return redirect()->back();
            }

        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }

    public function uploadPrinsip(Request $req) {
        $req->validate(['name' => 'required']);
        try {
            T_AbtPrinsip::create([
                'name'      => $req->name
            ]);
            toastr()->success('New prinsip successfully added.');
            return redirect()->route('admin.about.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deletePrinsip($id){
        $rows = T_AbtPrinsip::where('id',$id)->first();
        T_AbtPrinsip::where('id',$id)->forceDelete();  // hapus dari row db

        return redirect()->back();
    }

    public function uploadSpes(Request $req) {
        $req->validate(['name' => 'required']);
        try {
            T_AbtSpesial::create([
                'name'      => $req->name
            ]);
            toastr()->success('New spesialis successfully added.');
            return redirect()->route('admin.about.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteSpes($id){
        $rows = T_AbtSpesial::where('id',$id)->first();
        T_AbtSpesial::where('id',$id)->forceDelete();  // hapus dari row db

        return redirect()->back();
    }

    public function uploadAppr(Request $req) {
        $req->validate([
            'title' => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_AbtApproach::create([
                'title' => $req->title,
                'desc'  => $req->desc,
            ]);
            toastr()->success('New approach successfully added.');
            return redirect()->route('admin.about.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function editAppr(Request $req){
        $csrf   = $req->csrf;
        $id     = $req->id;
        $data   = T_AbtApproach::where('id', $id)->get();
        $toEdit = $this->setup_editAppr($data,$csrf);

        return response()->json($toEdit);
    }
    private function setup_editAppr($toEdit,$csrf){
        $result = '';
        foreach($toEdit as $t){
            $result .= '
            <div class="container">
                <h5 class="float-right text-info">ID: '.$t->id.'</h5>
                <form action="'. route('admin.about.approach.appr-update', ['id'=>$t->id]) .'" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="'.$csrf.'">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" class="form-control" type="text" name="title" value="'.$t->title.'">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" class="form-control descCK" required>'.$t->desc.'</textarea>
                    </div>
                    <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                </form>
            </div>';
        }

        return $result;
    }
    public function updateAppr(Request $req) {
        $req->validate([
            'title' => 'required',
            'desc'  => 'required'
        ]);
        try {
            T_AbtApproach::where('id',$req->id)->update([
                'title' => $req->title,
                'desc'  => $req->desc,
            ]);
            toastr()->success('New approach successfully updated.');
            return redirect()->route('admin.about.index');
        } catch (QueryException $e) {
            $msg = $e->getPrevious()->getMessage();
            toastr()->error($msg, 'Error!');
            return redirect()->back();
        }
    }
    public function deleteAppr($id){
        $rows = T_AbtApproach::where('id',$id)->first();
        T_AbtApproach::where('id',$id)->forceDelete();  // hapus dari row db

        return redirect()->back();
    }
}
