<?php

namespace App\Http\Controllers;

use App\Mail\ForgotMail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_bank_detail;
use App\Models\User_personal_detail;
use App\Models\Countries;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class UserController extends Controller
{


    public function addUser(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'gender' => 'required|in:male,female',
        //     'date_of_borth' => 'required|date',
        //     'nric_number' => 'required|max:255',
        //     'passport_number' => 'required|max:255',
        //     'short_name' => 'required|max:255',
        //     'race' => 'required|max:255',
        //     'address1' => 'required|max:255',
        //     'address2' => 'nullable|max:255',
        //     'city' => 'required|max:255',
        //     'state' => 'required|max:255',
        //     'country' => 'required',
        //     'postal_code' => 'required|max:20',
        //     'country_code' => 'required',
        //     'mobile_number' => 'required|max:20',
        //     'employement_status' => 'required',
        //     'relegion' => 'required',
        //     // Add validation rules for login details
        //     'email' => 'required|email|unique:user_personal_details|max:255',
        //     'password' => 'required|min:6|confirmed',
        //     'password_confirmation' => 'required|min:6',
        //     // Add validation rules for user details
        //     'role' => 'required',
        //     'registering_date' => 'required|date',
        //     'designation' => 'required|max:255',
        //     'industry' => 'required|max:255',
        //     'salary_range' => 'required|max:255',
        //     'qualification' => 'required',
        //     // Add validation rules for social media
        //     'facebook' => 'nullable|max:255',
        //     'linkedIn' => 'nullable|max:255',
        //     'twitter' => 'nullable|max:255',
        //     // Add validation rules for bank details
        //     'bank_name' => 'required|max:255',
        //     'account_holder' => 'required|max:255',
        //     'account_number' => 'required|unique:user_bank_details|numeric',
        //     're_account_number' => 'required|same:account_number',
        //     'swift_code' => 'required|max:255',
        //     'bank_branch' => 'required|max:255',
        //     'bank_address_1' => 'required|max:255',
        //     'bank_address_2' => 'nullable|max:255',
        //     'bank_city' => 'required|max:255',
        //     'bank_postal_code' => 'required|max:20',
        //     'bank_state' => 'required|max:255',
        //     'bank_country' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('your-form-url')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
           'nric_number' => 'required_without_all:passport_number',
           'passport_number' => 'required_without_all:nric_number',
           'short_name' => 'required',
           'race' => 'required',
          'religion' => 'required',
           'address1' => 'required',
           'address2' => 'required',
           'city' => 'required',

             'postal_code' => 'required',
          'state' => 'required',
          'country' => 'required',
          'country_code' => 'required',
           'mobile_number' => ['required', 'regex:/^\d{10}$/'],
           'employee_status' => 'required',
           'designation' => 'required',
           'department' => 'required',
           'staff_position' => 'required',
           'salary_grade' => 'required',
           'staff_category' => 'required',
           'staff_qualification' => 'required',
           'staff_category' => 'required',
           'stream_type' =>'required',

        //   'authentication' => 'required', // Assuming 'authentication' is a checkbox
        //      'two_factor'  => 'required',

           'facebook'  => 'required', // Basic URL validation
           'twitter'  => 'required',
           'linkedIn'  => 'required',

           //medical

           'disable_medical' => 'boolean',
           'height'=> 'required_if:disable_medical,1',
           'weight'=> 'required_if:disable_medical,1',
           'allergy'=> 'required_if:disable_medical,1',

           // Bank details validation rules
           'checknullable' => 'boolean',
            // Assuming $request is your form request or input data

            'bank_name' => 'required_if:checknullable,1|string|max:255',
            'account_holder' => 'required_if:checknullable,1|string|max:255',
            //'account_number' => 'required_if:checknullable,0|unique:user_bank_details,account_number', // Adjust 'your_table_name' with the actual table name
            'account_number' => 'required_if:checknullable,1|string|max:255',
            'swift_code' => 'required_if:checknullable,1|string|max:255',
            'bank_branch' => 'required_if:checknullable,1|string|max:255',
            'bank_address'=> 'required_if:checknullable,1|string|max:255',
            'ifsc_code'=> 'required_if:checknullable,1|string|max:255',
            'bank_address_1'=>'required_if:checknullable,1|string|max:255',
            'bank_address_2'=> 'required_if:checknullable,1|string|max:255',
            'bank_city'=> 'required_if:checknullable,1|string|max:255',
            'bank_state'=> 'required_if:checknullable,1|string|max:255',
            'bank_postal_code'=> 'required_if:checknullable,1|string|max:255',
            'bank_country'=> 'required_if:checknullable,1|string|max:255',

            'email' => 'required|email|unique:users,email|',
            'password' => 'required|max:6',
            'confirm_password' => 'required|same:password|max:6',

            'terms' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $checknullableValue = $condition ? 1 : 0;

        // $request->merge(['checknullable' => $checknullableValue]);

        // Validate the incoming request
// $request->validate([
//     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file validation rules as needed
// ]);



     $user_id=IdGenerator::generate(['table'=>'users', 'field'=>'user_id', 'length'=>8, 'prefix'=>'US']);
        $imagePath=$request->file('image')->store('users', 'public');
        $password=$request->input('password');
        $confirm_password=$request->input('confirm_password');
        $rand=rand(1000, 9999);
        if($password===$confirm_password){
            $user=User::create([
                'user_id'=>$user_id,
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                'confirm_password' =>$request->input('confirm_password'),
                'role'=>$request->input('role') ?? null,
                'email_verification'=>$rand,
                'authendication'=>$request->has('authentication') ? rand(100,999): null,
                'two_factor_authentication' =>$request->has('two_factor') ? rand(1000,9999): null,




            ]);
            $personalDetails=User_personal_detail::create([
                'user_id'=>$user_id,
                'image'=>$imagePath,
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name') ,
                'date_of_birth'=>$request->input('date_of_birth') ,
                'gender'=>$request->input('gender') ,
                'nric_number'=>$request->input('nric_number') ,
                'passport_number'=>$request->input('passport_number') ,
                'short_name'=>$request->input('short_name') ,
                'race'=>$request->input('race') ,
                'religion'=>$request->input('religion') ,
                'address1'=>$request->input('address1') ,
                'address2'=>$request->input('address2') ,
                'city'=>$request->input('city') ,
                'state'=>$request->input('state') ,
                'country'=>$request->input('country') ,
                'postal_code'=>$request->input('postal_code') ,
                'country_code'=>$request->input('country_code') ,
                'mobile_number'=>$request->input('mobile_number') ,
                'employment_status'=>$request->input('employee_status'),
                // 'religion'=>$request->input('religion'),


                //employee

                'joining_date'=>$request->input('joining_date') ,
                'designation'=>$request->input('designation')  ,
                'department'=>$request->input('department') ,
                'staff_position'=>$request->input('staff_position') ,
                'salary_grade'=>$request->input('salary_grade') ,
                'staff_category'=>$request->input('staff_category') ,
                'staff_qualification'=>$request->input('staff_qualification') ,
                'stream_type'=>$request->input('stream_type') ,


                //login


                'facebook'=>$request->input('facebook') ,
                'twitter'=>$request->input('twitter') ,
                'linkedIn'=>$request->input('linkedIn') ,

                //medical
                'height'=>$request->input('height')  ,
                'weight'=>$request->input('weight') ,
                'allergy'=>$request->input('allergy') ,
            ]);
            $bankDetails=User_bank_detail::create([
                'user_id'=>$user_id,
                'checknullable' => $request->input('checknullable'),
                'bank_name'=>$request->input('bank_name'),
                'account_holder'=>$request->input('account_holder') ,
                'account_number'=>$request->input('account_number') ,
                'swift_code'=>$request->input('swift_code') ,
                'bank_branch'=>$request->input('bank_branch') ,
                'bank_address'=>$request->input('bank_address') ,
                'ifsc_code'=>$request->input('ifsc_code') ,
                'address1'=>$request->input('bank_address_1') ,
                'address2'=>$request->input('bank_address_2'),
                'city'=>$request->input('bank_city') ,
                'state'=>$request->input('bank_state') ,
                'postal_code'=>$request->input('bank_postal_code') ,
                'country'=>$request->input('bank_country') ,
                'terms'=>$request->input('terms') ,


            ]);

        }
        $data=array('subject'=>'Email Verification', 'first_name'=>$request->input('first_name'), 'last_name'=>$request->input('last_name'), 'user_id'=>$user_id, 'rand'=>$rand);
            $email=$request->input('email');
            Mail::to($email)->send(new RegisterMail($data));
        return redirect('/login');
    }

    public function authenticate(Request $request){
        $email=$request->input('email');
        $user=User::where('email', $email)->first();
        if ($user){
            if($user->block===null){
                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                    return redirect()->route('user.dashboard');
                }else{
                    return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
                }
            }else{
                return redirect('/login')->with('error', 'This account is already blocked contact support team.');
            }
        }
    }

    public function emailVerification() {
        $user = Auth::guard('web')->user();

        if ($user) {
            $personalDetails = DB::table('user_personal_details')->where('user_id', $user->user_id)->first();
            $makeEmail = $user->email;

            $username = strstr($makeEmail, '@', true);
            $maskedUsername = substr($username, 0, 2) . str_repeat('*', strlen($username) - 4) . substr($username, -2);
            $domain = strstr($makeEmail, '@');
            $maskedEmail = $maskedUsername . $domain;

            return view('user.email-verification')->with(['user' => $user, 'detail' => $personalDetails, 'email' => $maskedEmail]);
        } else {
            // Handle the case where $user is null or not found
        }
    }

    public function userVerification(Request $request){
        $otp=$request->input('otp');
        $user = Auth::guard('web')->user();
        $email=$user->email;
        $null=null;
        if($user->email_verification===$otp){
            DB::table('users')->where('email', $email)->update(['email_verification'=>$null]);
            return redirect()->route('user.dashboard');
        }else{
            return redirect('/email-verification')->with('error', 'Invalid OTP. Please try again.');
        }
    }


    public function dashboard(Request $request){
        $user=Auth::guard('web')->user();
        $ip=$request->ip();
        if($user->email_verification===null){
            $data=User_personal_detail::where('user_id', $user)->first();
            DB::table('users')->where('user_id', $user->user_id)->update(['login_ip'=>$ip]);
            return view('user.dashboard')->with(['user'=>$user, 'data'=>$data]);
        }else{
            return redirect('/email-verification');
        }
    }

    public function profile(){
        $user=Auth::guard('web')->user();
        $personalDetails=DB::table('user_personal_details')->where('user_id', $user->user_id)->first();
        $bank=DB::table('user_bank_details')->where('user_id', $user->user_id)->first();
        $countries = Countries::all();
        return view('user.update-profile')->with(['user'=>$user, 'countries'=>$countries, 'details'=>$personalDetails, 'bank' =>$bank]);
    }

    public function changePassword(){
        $user=Auth::guard('web')->user();
        return view('user.password-change')->with(['user'=>$user]);
    }

    public function profileUpdate(Request $request){
        $user=Auth::guard('web')->user();
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $date_of_birth=$request->input('date_of_birth');
        DB::table('user_personal_details')->where('user_id', $user->user_id)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'date_of_birth' => $date_of_birth,
        ]);
        return back();
    }

    public function passwordUpdate(Request $request){
        $user = Auth::user();
        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('confirm_password');

        if (!Hash::check($oldPassword, $user->password)) {
            return response()->json(['success' => false, 'message' => 'Incorrect current password']);
        }
        if ($newPassword != $confirmPassword) {
            return response()->json(['success' => false, 'message' => 'New password and confirm password do not match']);
        }
        // $user->password = Hash::make($newPassword);
        // $user->save();
        $password=Hash::make($newPassword);
        DB::table('users')->where('user_id', $user->user_id)->update([
            'password'=>$password,
        ]);
        return response()->json(['success' => true]);

    }

    public function Logout(Request $request){
        Auth::guard('web')->logout();
        return redirect('/login');
    }

    public function forgotPassword(Request $request){
        $email=$request->input('email');
        $check=DB::table('users')->where('email', $email)->exists();
        if(!$check){
            return redirect('/login')->with('error', 'Invalid Email ID. Please try again.');
        }else{
            $token=rand(10000, 99999);
            $password=Hash::make($token);
            DB::table('users')->where('email', $email)->update(['password'=> $password]);
            $data=array('subject'=>'Forgot Password','rand'=>$token);
            Mail::to($email)->send(new ForgotMail($data));
            return redirect('/login')->with('success', 'Your new login password send to your registered email.');
        }
    }

    public function viewProfile(){
        $user = Auth::user();
        $detail=DB::table('user_personal_details')->where('user_id', $user->user_id)->first();
        $bank=DB::table('user_bank_details')->where('user_id', $user->user_id)->first();
        $country=Countries::all(); //table name
        return view('user.profile')->with(['user'=>$user, 'detail'=>$detail, 'bank'=>$bank, 'counties'=>$country,]);

    }

    public function personalUpdate(Request $request){
        $user = Auth::user();
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        $date_of_birth=$request->input('date_of_birth');
        $email=$request->input('email');
        $nric_number=$request->input('nric_number');
        $passport_number=$request->input('passport_number');
        $gender=$request->input('gender');
        $short_name=$request->input('short_name');
        $race=$request->input('race');
        $address1=$request->input('address1');
        $address2=$request->input('address2');
        $city=$request->input('city');
        $postal_code=$request->input('postal_code');
        $state=$request->input('state');
        $country=$request->input('country');
        DB::table('user_personal_details')->where('user_id', $user->user_id)->update([
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'date_of_birth'=>$date_of_birth,
            'email'=>$email,
            'nric_number'=>$nric_number,
            'passport_number'=>$passport_number,
            'gender'=>$gender,
            'short_name'=>$short_name,
            'race'=>$race,
            'address1'=>$address1,
            'address2'=>$address2,
            'city'=>$city,
            'postal_code'=>$postal_code,
            'state'=>$state,
            'country'=>$country,
        ]);
        return back();
    }

    public function bankUpdate(Request $request){
        $user = Auth::user();
        $bank_name=$request->input('bank_name');
        $account_holder=$request->input('account_holder');
        $account_number=$request->input('account_number');
        $swift_code=$request->input('swift_code');
        $bank_branch=$request->input('bank_branch');
        $bank_address1=$request->input('bank_address1');
        $bank_address2=$request->input('bank_address2');
        $bank_city=$request->input('bank_city');
        $bank_state=$request->input('bank_state');
        $bank_postal_code=$request->input('bank_postal_code');
        $bank_country=$request->input('bank_country');
        DB::table('user_bank_details')->where('user_id', $user->user_id)->update([
            'bank_name'=>$bank_name,
            'account_holder'=>$account_holder,
            'account_number'=>$account_number,
            'swift_code'=>$swift_code,
            'bank_branch'=>$bank_branch,
            'address1'=>$bank_address1,
            'address2'=>$bank_address2,
            'city'=>$bank_city,
            'state'=>$bank_state,
            'postal_code'=>$bank_postal_code,
            'country'=>$bank_country,
        ]);
    }

    public function imageUpdate(Request $request){
        $user = Auth::user();
        $imagePath=$request->file('image')->store('users', 'public');
        DB::table('user_personal_details')->where('user_id', $user->user_id)->update(['image'=>$imagePath]);
    }
}
