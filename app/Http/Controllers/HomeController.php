<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompanyProfile;
use App\Models\Subscription;
use Carbon\Carbon;
use DB;
use Response;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function home()
    {
        if ((Auth::check()) && (Auth::user()->type == 1))
        {
            $company_profile        = CompanyProfile::first();
            // $subscriptions_today    = Subscription::whereDate('created_at', '=', Carbon::today())->count();
            // $subscriptions_total    = Subscription::count();
            // $cus_subscriptions      = Subscription::orderBy('created_at', 'DESC')->get();

            // return view('welcome', compact('company_profile', 'subscriptions_today', 'subscriptions_total', 'cus_subscriptions'));
            return view('welcome', compact('company_profile'));
        }
        elseif ((Auth::check()) && (Auth::user()->type == 2)) {
            return redirect()->route('frontend_my_profile');
        }
        else
        {
            return view('login1');
        }
        
    }

    public function changePassword() {
        return view('change-password');
    }

    public function changePasswordStore(Request $request) {
        $this->validate($request,[
            'new_password' 	        => 'required',
            're_type_password'    	=> 'required',
        ]);
        if($request['new_password'] != $request['re_type_password']) {
            return redirect()->back()->with('msg', 'Passowrd not Match');
        }
        $data = $request->all();
        DB::beginTransaction();
        try{
            $userId = Auth::user()->id;
            $user = User::find($userId);
            $user->password = Hash::make($data['new_password']);
            $user->update();
            DB::commit();
            return redirect()->route('home');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('msg', 'Something  Wrong Try, Again');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/login");
    }

    public function search($search_text) {
        $search_result = $search_text;
        return Response::json($search_result);
    }



}
