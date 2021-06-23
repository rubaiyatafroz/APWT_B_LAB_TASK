<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\loginRequest;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Vendor;
use App\Models\Accountant;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function check(LoginRequest $req)

    {
        if($admin = Admin::where('email',$req->email)->first()){
            if($admin->password == $req->password){
                $req->session()->put('user_name',$admin->user_name);
                $req->session()->put('user_type',$admin->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Customer::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Vendor::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        elseif($ad = Accountant::where('email',$req->email)->first()){
            if($ad->password == $req->password){
                $req->session()->put('user_name',$ad->user_name);
                $req->session()->put('user_type',$ad->user_type);
                return redirect('home');
            }
            else{
                $req->session()->flash('err',"wrong password");
                return redirect()->back();
            }
        }
        else{
            $req->session()->flash('err',"invalid user");
            return redirect()->back();
        }

        // return redirect('login');
    }
}
