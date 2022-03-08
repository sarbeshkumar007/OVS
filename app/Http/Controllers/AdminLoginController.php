<?php

namespace App\Http\Controllers;
use App\Admin;
use Hash;
use Auth;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function login()
    {
      //dd('working');
        return view('layouts.backend.admin.login');
    }

    public function submit(Request $request) {
        // dd($request->all());

        if (!$request->get('email') || !$request->get('password')) {
            return redirect()->back();
        }

        try {
            $admin = admin::where('email', $request->email)->first();
            // dd($admin);
            if ($admin) {

                if(Hash::check($request->password, $admin->password)) {
                    // dd('true');
                    Auth::login($admin);
                    return redirect()->route('admin.dash');
                }
                return redirect()->back();
                // Auth::check() ? Auth::user() : '';

            } else {
                // dd('false');
                return redirect()->back();
            }

        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function adminLogout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->back();
        }
        return redirect()->route('admin.login');
    }


   public function dashboard(){
       return view('dashboard');
   }

public function adminDash() {
    return view('layouts.backend.layouts.adminDash');
}

}
