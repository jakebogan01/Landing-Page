<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        return view('landingpage');
    }

    public function thankyou(){
        return view('thankyou');
    }

    public function store(Request $request){
        $this->validate($request,[
            'first_name'=>'required|max:255',
            'last_name'=>'required|max:255',
            'business_email'=>'required|max:255',
            'business_phone'=>'required|max:12',
            'company_name'=>'required|max:255',
            'employee_count'=>'required',
        ]);

        User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->first_name
        ]);

        return redirect()->route('thankyou');
    }
}
