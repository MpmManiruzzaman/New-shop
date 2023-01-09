<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Session;

class VendorController extends Controller
{
    public function vendorRegister()
    {
        return view('frontend.vendor.auth');
    }

    public function vendorRegistration(Request $request)
    {
        if($request->file('logo')){
            $name =time(). '.' .$request->logo->extension();
            $request->logo->move(public_path('/avatar/'), $name);
        }

        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->address = $request->address;
        $vendor->password = bcrypt($request->password);
        $vendor->logo = $name;
        $vendor->save();
        return redirect()->back()->with('success', 'Your registration completed, Please wait admin approval');
    }

    public function vendorLogin(Request $request)
    {
        $vendor = Vendor::where('email', $request->email)->first();
        if($vendor->is_approved == 0){
            return redirect()->back()->with('error', 'You are not a approved vendor.');
        }
        if(!$vendor){
            return redirect()->back()->with('error', 'Yor are not a vendor, Plz register first.');
        }else{
            if(password_verify($request->password, $vendor->password)){
                Session::put('vendorId', $vendor->id);
                Session::put('vendorName', $vendor->name);
                return redirect('/vendor/dashboard');
            }else{
                return redirect()->back()->with('error', 'Password not match');
            }
        }
    }

    public function vendorDashboard()
    {
        return "Vendor Dashboard";
    }
}
