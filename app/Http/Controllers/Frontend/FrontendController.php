<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Frontend\Contact;
use App\Models\T_About;
use App\Models\T_AbtVis;
use App\Models\T_AbtMis;
use App\Models\T_AbtApproach;
use App\Models\T_AbtPrinsip;
use App\Models\T_AbtSpesial;
use App\Models\T_Approach;
use App\Models\T_ApprMethod;
use App\Models\T_ContactMsgs;
use App\Models\T_ContactPub;
use App\Models\T_Footer;
use App\Models\T_Home;
use App\Models\T_HomeDesc;
use App\Models\T_HomeExp;
use App\Models\T_HomeTesti;
use App\Models\T_TeamLead;
use App\Models\T_TeamAssist;
use App\Models\T_Partner;
use App\Models\T_Pendidikan;
use App\Models\T_Penelitian;
use App\Models\T_Publikasi;
use Illuminate\Http\Request;

/**
 * Class HomeController.
 */
class FrontendController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $homeset    = T_Home::get();
        $homedesc   = T_HomeDesc::first();
        $expthumb   = T_HomeExp::get();
        $testi      = T_HomeTesti::get();
        $foota      = T_Footer::first();
        $rows = [
            'carousel'  => $homeset,
            'homedesc'  => $homedesc,
            'expthumb'  => $expthumb,
            'testi'     => $testi,
            'foota'     => $foota,
        ];

        return view('frontend.home', $rows);
    }

    public function about() {
        $about      = T_About::latest('created_at')->first();
        $abtvis     = T_AbtVis::latest('created_at')->first();
        $abtmis     = T_AbtMis::latest('created_at')->first();
        $approach   = T_AbtApproach::get();
        $prinsip    = T_AbtPrinsip::get();
        $spesial    = T_AbtSpesial::get();
        $foota      = T_Footer::first();
        $rows   = [
            'abt'       => $about,
            'abtvis'    => $abtvis,
            'abtmis'    => $abtmis,
            'approach'  => $approach,
            'prinsip'   => $prinsip,
            'spesial'   => $spesial,
            'foota'     => $foota
        ];
        return view('frontend.about', $rows);
    }

    public function approach() {
        $apprUpdate = T_Approach::latest('created_at')->first();
        $apprMethod = T_ApprMethod::get();
        $foota      = T_Footer::first();
        $rows   = [
            'updates'   => $apprUpdate,
            'methods'   => $apprMethod,
            'foota'     => $foota
        ];
        return view('frontend.approach', $rows);
    }

    public function team() {
        $first  = T_TeamLead::first();
        $team   = T_TeamLead::where('id','>',2)->get()->chunk(2);
        $assist = T_TeamAssist::get();
        $foota  = T_Footer::first();
        $rows   = [
            'assist'    => $assist,
            'first'     => $first,
            'lead'      => $team,
            'foota'     => $foota
        ];
        return view('frontend.team', $rows);
    }

    public function experiences() {
        $partner    = T_Partner::get();
        $study      = T_Pendidikan::get()->chunk(3);
        $research   = T_Penelitian::get()->chunk(3);
        $public     = T_Publikasi::get()->chunk(3);
        $foota      = T_Footer::first();
        $rows   = [
            'partners'  => $partner,
            'study'     => $study,
            'research'  => $research,
            'public'    => $public,
            'foota'     => $foota
        ];
        return view('frontend.experiences', $rows);
    }
    public function expRequest(Request $req) {
        $csrf   = $req->csrf;
        $title  = $req->title;

        $result = '
        <div class="main-content text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="'. route('frontend.exp.save') .'" method="POST">
                <input type="hidden" name="_token" value="'.$csrf.'">
                <input type="hidden" name="_method" value="POST">
                <h5><i class="fas fa-lock"></i> File ini dilindungi.</h5>
                <p class="mb-4">Untuk mengunduh file ini harap masukkan alamat email Anda. File akan dikirimkan melalui email setelah disetujui oleh tim kami.</p>
                <div class="form-group px-4">
                    <input id="filename" type="hidden" name="title" class="form-control" value="'.$title.'">
                    <input type="email" class="form-control text-center" name="email" placeholder="Ketik email Anda" required>
                </div>
                <div class="form-group mb-0">
                    <div class="mx-auto">
                        <button type="submit" class="btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>';

        return $result;
    }
    public function expSave(Request $req) {
        $req->validate(['email'=>'required']);

        T_ContactPub::create([
            'title'     => $req->title,
            'email'     => $req->email,
        ]);
        toastr()->success('Thank you! <br> Your request has been sent.');
        return redirect()->route('frontend.experiences');
    }

    //Contact Us
    public function contact() {
        $foota      = T_Footer::first();

        return view('frontend.contact', ['foota' => $foota]);
    }

    public function contactSubmit(Request $req) {
        $req->validate([
            'name'      => 'required',
            'email'     => 'required',
            'message'   => 'required'
        ]);

        // $rules = ['captcha' => 'required|captcha'];
        // $validator = validator()->make(request()->all(), $rules);

        // if ($validator->fails()) {

        //     toastr()->error('Sorry, you input a wrong captcha.');
        //     return redirect()->route('frontend.contact','#contact-form');

        // } else {

            T_ContactMsgs::create([
                'name'      => $req->name,
                'email'     => $req->email,
                'message'   => $req->message
            ]);

            toastr()->success('Thank you! <br> Your message has been sent.');
            return redirect()->route('frontend.index');

        // }

    }

    public function refreshCaptcha() {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
