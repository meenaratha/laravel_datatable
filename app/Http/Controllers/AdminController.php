<?php

namespace App\Http\Controllers;

use App\Mail\ForgotMail;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Admin;
use App\Models\User;
use App\Models\User_bank_detail;
use app\Models\User_personal_detail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addAdmin(Request $request){
        $admin_id=IdGenerator::generate(['table'=>'admins', 'field'=>'admin_id', 'length'=>8, 'prefix'=>'AD']);
        $imagePath=$request->file('image')->store('admins', 'public');
        $admin=Admin::create([
            'admin_id'=>$admin_id,
            'first_name'=>$request->input('first_name') ?? null,
            'last_name'=>$request->input('last_name') ?? null,
            'gender'=>$request->input('gender') ?? null,
            'date_of_birth'=>$request->input('date_of_birth') ?? null,
            'email'=>$request->input('email') ?? null,
            'contact_number'=>$request->input('contact_number') ?? null,
            'password'=>Hash::make($request->input('password')) ?? null,
            'image'=>$imagePath,
        ]);

        return redirect('/admin/login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }else{
            return redirect('/admin/login')->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function dashboard(){
        $admin=Auth::guard('admin')->user();
        return view('admin.dashboard')->with(['admin'=>$admin]);
    }

    public function addAdminForm(){
        $admin=Auth::guard('admin')->user();
        return view('admin.add-admin')->with(['admin'=>$admin]);
    }

    public function adminList(Request $request){
        $admin=Auth::guard('admin')->user();
        $data=Admin::all();
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        return view('admin.list-admin')->with(['datas'=>$data, 'admin'=>$admin, 'currentPage'=>$currentPage]);
    }

    public function adminView($admin_id){
        $admin=Auth::guard('admin')->user();
        $data=Admin::where('admin_id',$admin_id)->first();
        return view('admin.view-admin')->with(['admin'=>$admin, 'data'=>$data]);
    }

    public function adminEdit($admin_id){
        $admin=Auth::guard('admin')->user();
        $data=Admin::where('admin_id',$admin_id)->first();
        return view('admin.edit-admin')->with(['admin'=>$admin, 'data'=>$data]);
    }

    public function adminBlock($admin_id){
        $admin=Auth::guard('admin')->user();
        $rand=rand(1000, 9999);
        DB::table('admins')->where('admin_id', $admin_id)->update(['block'=> $rand]);
        return back();
    }
    public function adminUnblock($admin_id){
        $admin=Auth::guard('admin')->user();
        $rand=null;
        DB::table('admins')->where('admin_id', $admin_id)->update(['block'=> $rand]);
        return back();
    }

    public function editAdmin(Request $request, $admin_id){
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        DB::table('admins')->where('admin_id', $admin_id)->update([
            'first_name'=> $first_name,
            'last_name' => $last_name,
        ]);
        return back();
    }



    public function addUser(){
        $admin=Auth::guard('admin')->user();
        return view('admin.add-user')->with(['admin'=>$admin]);
    }

    public function PreUserList(Request $request){
        $admin=Auth::guard('admin')->user();
        $data=User::where('role', 1)->get();
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;        
        return view('admin.list-pre-user')->with(['admin'=>$admin, 'datas'=>$data, 'currentPage'=>$currentPage]);
    }

    public function BasicUserList(Request $request){
        $admin=Auth::guard('admin')->user();
        $data=User::where('role', 2)->get();
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;
        return view('admin.list-bac-user')->with(['admin'=>$admin, 'datas'=>$data, 'currentPage'=>$currentPage]);
    }

    public function TrUserList(Request $request){
        $admin=Auth::guard('admin')->user();
        $data=User::where('role', 3)->get();
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;        
        return view('admin.list-tr-user')->with(['admin'=>$admin, 'datas'=>$data, 'currentPage'=>$currentPage]);
    }

    public function OnlineUserList(Request $request){
        $admin=Auth::guard('admin')->user();
        $user=User::where('online_list', null)->get();
        $perPage = 10;
        $currentPage = $request->input('page', 1);
        $offset = ($currentPage - 1) * $perPage;        
        return view('admin.list-online-user')->with(['admin'=>$admin, 'users'=>$user, 'currentPage'=>$currentPage]);
        
    }

    public function userView($user_id){
        $admin=Auth::guard('admin')->user();
        $user=User::where('user_id', $user_id)->first();
        $data=DB::table('user_personal_details')->where('user_id', $user_id)->first();
        return view('admin.view-user')->with(['admin'=>$admin, 'data'=>$data, 'user'=>$user_id]);
    }

    public function userEdit($user_id){
        $admin=Auth::guard('admin')->user();
        $user=User::where('user_id', $user_id)->first();
        $data=DB::table('user_personal_details')->where('user_id', $user_id)->first();
        return view('admin.edit-user')->with(['admin'=>$admin, 'data'=>$data, 'user'=>$user]);
    }

    public function userBlock($user_id){
        $admin=Auth::guard('admin')->user();
        $rand=rand(1000, 9999);
        DB::table('users')->where('user_id', $user_id)->update(['block'=> $rand]);
        return back();
    }
    public function userUnblock($user_id){
        $admin=Auth::guard('admin')->user();
        $rand=null;
        DB::table('users')->where('user_id', $user_id)->update(['block'=> $rand]);
        return back();
    }

    public function editUser(Request $request, $user_id){
        $first_name=$request->input('first_name');
        $last_name=$request->input('last_name');
        DB::table('user_personal_details')->where('user_id', $user_id)->update([
            'first_name'=> $first_name,
            'last_name' => $last_name,
        ]);
        return back();
    }

    public function changePassword(){
        $admin=Auth::guard('admin')->user();
        return view('admin.change-password')->with(['admin'=>$admin]);
    }

    public function editProfile(){
        $admin=Auth::guard('admin')->user();
        return view('admin.edit-profile')->with(['admin'=>$admin]);
    }

    public function Logout(Request $request){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function forgotPassword(Request $request){
        $email=$request->input('email');
        $check=DB::table('admins')->where('email', $email)->exists();
        if(!$check){
            return redirect('/admin/login')->with('error', 'Invalid Email ID. Please try again.');
        }else{
            $token=rand(10000, 99999);
            $password=Hash::make($token);
            DB::table('admins')->where('email', $email)->update(['password'=> $password]);
            $data=array('subject'=>'Forgot Password','rand'=>$token);
            Mail::to($email)->send(new ForgotMail($data));
            return redirect('/admin/login')->with('success', 'Your new login password send to your registered email.');
        }
    }

    public function passwordUpdate(Request $request){
        $admin = Auth::guard('admin')->user(); 
        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('new_password');
        $confirmPassword = $request->input('confirm_password');

        if (!Hash::check($oldPassword, $admin->password)) {
            return response()->json(['success' => false, 'message' => 'Incorrect current password']);
        }
        if ($newPassword != $confirmPassword) {
            return response()->json(['success' => false, 'message' => 'New password and confirm password do not match']);
        }
        // $user->password = Hash::make($newPassword);
        // $user->save();
        $password=Hash::make($newPassword);
        DB::table('admins')->where('admin_id', $admin->admin_id)->update([
            'password'=>$password,
        ]);
        return response()->json(['success' => true]);
    }

    public function addDataForm(Request $request){
        $tables = DB::connection('exchange')->getDoctrineSchemaManager()->listTableNames();
        return  view('admin.add-data')->with(['tables'=>$tables]);
    }

    public function fetchStock(Request $request)
    {
        $selectedExchange = $request->input('exchange_name');
        $tables = DB::connection('exchange')->getDoctrineSchemaManager()->listTableNames();
    
        if ($selectedExchange && in_array($selectedExchange, $tables)) {
            $stockData = DB::connection('exchange')->table($selectedExchange)->paginate(30);
    
            return response()->json(['stockData' => $stockData]);
        } else {
            return response()->json(['error' => 'Invalid or no exchange selected.'], 400);
        }
    }




    public function csvPage(){
            $table=DB::connection('exchange')->getDoctrineSchemaManager()->listTableNames();
            return view('admin.csv-upload')->with(['table'=>$table]);
    }

    public function handleCSVUpload(Request $request){
        $selectedTable = $request->input('table_name');
        $csvFile = $request->file('csvFile');
        $response = Http::attach(
            'csvFile',
            file_get_contents($csvFile),
            $csvFile->getClientOriginalName()
        )->post('http://127.0.0.1:8888/api/csv-upload', [
            'table_name' => $selectedTable,
        ]);
        return $response->json(); 
    }

    public function createTableForm(){
        return view('admin.create-table');
    }

    public function createExchange(Request $request){
        $exchange_name = $request->input('exchange_name');
        $response = Http::post('http://127.0.0.1:8888/api/create-exchange', [
            'exchange_name' => $exchange_name,
        ]);
        return response()->json(['success' => 'Exchange created successfully']);
    }
}
