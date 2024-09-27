<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Services\ApiHockyService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
use App\Models\League;
// use 

class HomeController extends Controller
{

    protected $apiHockyService;
    protected $pointCalculationService;

    public function __construct(ApiHockyService $apiHockyService)
    {
        $this->apiHockyService = $apiHockyService;
    }

    public function index()
    {
        $leagues = League::whereHas('leagueMatches', function ($query) {
            $query->whereHas('matchPlayers');
           })->orderBy('start_date','desc')->limit(25)->get();

        return view('front_end.pages.home',compact('leagues'));
    }

    public function howToPlay(){
        return view('front_end.pages.how-to-play');
    }
    
    public function aboutUs(){
        return view('front_end.pages.about-us');
    }

    public function contactUs(){
        return view('front_end.pages.contact-us');   
    }

    public function privacyPolicy(){
        return view('front_end.pages.privacy');   
    }

    public function termsCondition(){
        return view('front_end.pages.terms');   
    }

    public function contactSave(ContactRequest $request){
        $name = $request->name ?? '';
        $email = $request->email ?? '';
        $subject = $request->subject ?? '';
        $message = $request->message ?? '';
 
        $contact = [
           'name' => $name,
           'email' => $email,
           'subject' => $subject,
           'message' => $message
        ];
 
        if(isset($name,$email,$subject,$message)){
 
          ContactUs::create($contact);
 
        //    Mail::to('ashishyadav.avology@gmail.com')->send(new ContactMail($contact));
        }
        return redirect()->back()->with('success','Your contact query sent successfully.');
     }

}
