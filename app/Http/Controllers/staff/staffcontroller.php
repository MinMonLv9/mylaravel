<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class staffcontroller extends Controller
{
    public function index(request $request)
    {
        $todayDate = Carbon::now('Asia/Yangon')->format('Y-m-d');
        $todayRequest = DB::table('shoprequests')->join('shops', 'shoprequests.shopid', '=', 'shops.id')->whereDate('shoprequests.requestdate',$todayDate)->SELECT('shops.*', 'shoprequests.*')->get();
        return view('shop.todayrequests', compact('todayRequest'));
    }
    public function create()
    {
        $role = role::all();
        return view('staff.register', compact('role'));
    }
    public function store(Request $request)
    {
        $role = role::all();
        $staff = new staff();
        $staff->staffname = $request->staffname;
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->password = $request->password;
        $staff->roleid = $request->role;
        $staff->status = 'active';
        $staff->save();
        $request->session()->flash('message', 'Successfully updated');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect('staffprocess/stafflist');
    }
    public function show($id)
    {
        $staff = staff::find($id);
        return view('staff.show', compact('staff'));
    }
    public function edit($id)
    {
        $staff = staff::find($id);
        return view('staff.edit', compact('staff'));
    }
    public function update(Request $request, $id)
    {
        $staff = staff::find($id);
        if (isset($staff)) {
            $staff->staffname = $request->staffname;
            $staff->address = $request->address;
            $staff->phone = $request->phone;
            $staff->email = $request->email;
            $staff->status = $request->status;
            $staff->save();
            $request->session()->flash('message', 'Successfully updated');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record is found to update');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        $request->session()->put('staff', $staff);
        return redirect('/staffprocess/stafflist');
    }
    public function destroy($id,Request $request)
    {
        $staff=staff::find($id); //get book record by matching with id
        if(isset($staff)){
            $staff->delete();
            $request->session()->flash('message','Succesfully delete');
            $request->session()->flash('alert-class','alert-success');
        }
        else{
            $request->session()->flash('message','No record found for delete');
            $request->session()->flash('alert-class','alert-danger');
        }
        return redirect('/staffprocess/stafflist');
    }
    public function login()
    {
        return view('staff.login');
    }
    public function Logout()
    {
        session()->forget('staff');
        return view('staff.login');
    }
    public function validateuser(Request $request)
    {
        $email = $request->staffemail;
        $password = $request->staffpassword;
        $data = array();
        $error = [];
        if (empty($email)) {
            $error['emailErr'] = "Please fill email";
        }
        if (empty($password)) {
            $error['passwordErr'] = "Please fill password";
        }
        if ($email != "" & $password != "") {
            $data = staff::where('email', '=', $request->staffemail)->where('password', '=', $request->staffpassword)->get();
            // dd($data);
            $cData = count($data);
            if ($cData > 0) {
                $request->session()->put('staff', $data[0]);
                return redirect('staffprocess');
            } else {
                $error['loginErr'] = "Your email or password is incorrect";
                return redirect('stafflogin')->with('error',$error);
            }
        } else {
            return redirect('stafflogin')->with('error',$error);
        }
    }
    public function staffList()
    {
        $staff = staff::paginate(10);
        return view('staff.index', compact('staff'));
    }
    public function searchProcess(Request $request)
    {
        $data = array();
        if (isset($request->keyword)) {
            $staff = staff::where('staffname', 'Like', '%' . $request->keyword . '%')->paginate(5);
        } else {
            
        }
        return view('staff.index', compact('staff'));
    }
}
