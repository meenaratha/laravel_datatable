<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function userLogin(){
        return view('user.login');
    }

    public function userRegister(){
        // $countries = Countries::all();
        $countries = DB::table('countries')->get();
        return view('user.register', compact('countries'));
    }

    public function adminLogin(){
        return view('admin.login');
    }

    public function adminRegister(){
        return view('admin.register');
    }

    public function demo(Request $request){
        $stock=DB::connection('exchange')->table('nasdaqs')->paginate(10);
        return view('demo')->with(['nasdaq'=>$stock]);
    }

}
