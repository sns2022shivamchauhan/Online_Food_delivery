<?php

namespace App\Http\Controllers\AuthCustomer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomrController extends Controller
{

  public function index(Request $request)
  {
    // $user = auth()->user();
    return view('content.auth-customer.login');
  }

  public function profile_update(Request $request)
  {
    $request->validate([
      'first_name' => 'required|alpha',
      // 'last_name' => 'required|alpha',
      'email' => 'required|email',
      // 'phone' => 'nullable|numeric',
      // 'avatar_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = auth()->user();
    $user->first_name = $request->first_name;
    // $user->last_name = $request->last_name;
    $user->email = $request->email;
    // $user->phone = $request->phone ?? $user->phone;
    // if ($request->hasFile('avatar_path')) {
    //   $filename = time() . '.' . $request->avatar_path->getClientOriginalExtension();
    //   $path = upload_file_restaurant("customer_avatar_path", "avatar", $filename);
    //   $user->avatar_path = $path;
    // }
    $user->save();
    return redirect()->back()->with('success', "Your profile has been updated successfully.");
  }


  public function change_password(Request $request)
  {
    $user = auth()->guard('customer-web')->user();
    return view('frontend.pages.auth.myaccount.change_password', compact('user'));
  }

  public function change_password_update(Request $request)
  {
    $request->validate([
      'oldpassword' => 'required|',
      'password' => 'required',
      // 'password_confirmation' => 'required'
    ]);

    if (!(Hash::check($request->get('oldpassword'), Auth::guard('customer-web')->user()->password))) {
      // The passwords matches
      return redirect()->back()->with("failed", "Your current password does not matches with the password.");
    }

    if (strcmp($request->get('oldpassword'), $request->get('password')) == 0) {
      // Current password and new password same
      return redirect()->back()->with("failed", "New Password cannot be same as your current password.");
    }

    //Change Password
    $user = Auth::guard('customer-web')->user();
    $user->password = $request->get('password');
    $user->save();

    return redirect()->back()->with("success", "Password successfully changed!");
  }


}
