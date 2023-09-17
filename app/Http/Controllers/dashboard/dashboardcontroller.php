<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\shop;
use App\Models\shoprequest;

class dashboardcontroller extends Controller
{
    public function index(Request $request){
        $data=$request->session()->get('staff');
        return view('staff.index',compact('data'));
    }
}
