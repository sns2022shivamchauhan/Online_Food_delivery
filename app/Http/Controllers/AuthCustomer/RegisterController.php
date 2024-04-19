<?php

namespace App\Http\Controllers\AuthCustomer;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\customer\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Restaurant\RestroUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Register Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users as well as their
  | validation and creation. By default this controller uses a trait to
  | provide this functionality without requiring any additional code.
  |
  */

  use RegistersUsers;

  /**
   * Where to redirect users after registration.
   *
   * @var string
   */
  protected $redirectTo = "content.auth-customer.index";



  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Show the application registration form.
   *
   * @return \Illuminate\View\View
   */
  // public function showRegistrationForm()
  // {
  //   return view('content.auth-customer.register');
  // }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {

    return Validator::make(request()->all(), [
      'first_name' => ['required', 'string', 'max:255'],
      // 'last_name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
      // 'phone' => ['required', 'string', 'max:255', 'unique:customers'],
      'password' => ['required', 'string', 'min:8'],
      // 'avatar_path' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
  }

  // public function register(Request $request)
  // {
  //   $this->validator($request->all())->validate();

  //   event(new Registered($user = $this->create($request->all())));

  //   if ($request->hasFile('avatar_path')) {
  //     $avatar_path = $request->file('avatar_path')->store('avatar_paths', 'public');
  //     $user->avatar_path = Storage::url($avatar_path);
  //     $user->save();
  //   }

  //   $this->guard()->login($user);

  //   if ($response = $this->registered($request, $user)) {
  //     return $response;
  //   }

  //   return $request->wantsJson()
  //     ? new JsonResponse([], 201)
  //     : redirect($this->redirectPath())->with('success', 'Your account has been created successfully.');
  // }
  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Models\customer\Customer
   */
  protected function create(array $data)
  {
    return Customer::create([
      'first_name' => $data['first_name'],
      // 'last_name' => $data['last_name'],
      'email' => $data['email'],
      // 'phone' => $data['phone'],
      // 'password' => $data['password'],
      // 'street' => $data['street'],
      // 'city' => $data['city'],
      // 'state' => $data['state'],
      // 'country' => $data['country'],
      'password' => $data['password'],
    ]);
  }

  /**
   * Get the guard to be used during authentication.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  protected function guard()
  {
    return Auth::guard("customer-web");
  }
}
