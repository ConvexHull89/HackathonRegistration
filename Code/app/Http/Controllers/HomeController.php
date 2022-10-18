<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
        return view('home', compact('user'));
    }

    public function payment(Request $request){
        if($request->hasFile('payment')){
            $fileNameWithExt = $request->file('payment')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('payment')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('payment')->storeAs('public/payment', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        Auth::user()->update([
            'payment' => $fileNameToStore,
            'early' => $request->early
        ]);
        
        return back();
    }
    public function store(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email_member' => 'required',
            'wa_num' => 'required',
            'line_id' => 'required',
            'github' => 'required',
            'birth_place' => 'required',
            'birth_day' => 'required',
            'cv' => 'required' ,
            'card' => 'required',
        ]);

        if($request->hasFile('card')){
            $fileNameWithExt = $request->file('card')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('card')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('card')->storeAs('public/membercard', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        if($request->hasFile('cv')){
            $fileNameWithExtcv = $request->file('cv')->getClientOriginalName();
            $fileNamecv = pathinfo($fileNameWithExtcv, PATHINFO_FILENAME);
            $extensioncv = $request->file('cv')->getClientOriginalExtension();
            $fileNameToStorecv = $fileNamecv.'_'.time().'_'.'.'.$extensioncv;
            $pathcv = $request->file('cv')->storeAs('public/membercv', $fileNameToStorecv);
        }else{
            $fileNameToStorecv = 'no-image.jpg';
        }
        Member::create([
            'user_id' => Auth::user()->id,
            'fullname' => $request->fullname,
            'email_member' => $request->email_member,
            'wa_num' => $request->wa_num,
            'line_id' =>$request->line_id,
            'github' => $request->github,
            'birth_place' =>$request->birth_place,
            'birth_day' =>$request->birth_day,
            'card' => $fileNameToStore,
            'cv' => $fileNameToStorecv,
        ]);
        return redirect('home');
    }
}
