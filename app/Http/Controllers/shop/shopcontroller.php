<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shop;
use App\Models\shoprequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class shopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = shop::Paginate(5);
        return view('shop.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagename = uniqid() . "." . $request->image->extension();
        $request->image->move(public_path('upload'), $imagename);
        $shop = new shop();
        $shoprequest = new shoprequest();
        $shop->shopname = $request->shopname;
        $shop->address = $request->address;
        $shop->township = $request->township;
        $shop->city = $request->city;
        $shop->email = $request->email;
        $shop->password = $request->password;
        $shop->image = $imagename;
        $shop->status = "progress";
        $shoprequest->permission = "none";
        $shop->save();
        $shoprequest->shopid = $shop->id;
        $shoprequest->save();
        $request->session()->flash('message', 'Successfully updated');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect("shopregister");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = shop::find($id);
        return view('shopOwner.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = shop::find($id);
        return view('shopOwner.shopEdit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $shop = shop::find($id);
        if (isset($shop)) {
            $shop->shopname = $request->shopname;
            $shop->address = $request->address;
            $shop->township = $request->township;
            $shop->city = $request->city;
            $shop->email = $request->email;
            $shop->save();
            $request->session()->flash('message', 'Successfully updated');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record is found to update');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        $request->session()->put('shop', $shop);
        return redirect()->route('shopprocess.show', ['shopprocess' => $shop->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register()
    {
        return view('shopOwner.register');
    }
    public function login()
    {
        return view('shopOwner.shopLogin');
    }
    public function shopApprove(Request $request, $shopid)
    {
        $shop = shop::find($shopid);
        if (isset($shopid)) {
            $shop->status = "Approved";
            $shop->save();
            $request->session()->flash('message', 'Successfully updated');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record is found to update');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        return redirect('/shopprocess');
    }
    public function shopDecline(Request $request, $shopid)
    {
        $shop = shop::find($shopid);
        if (isset($shopid)) {
            $shop->status = 'Declined';
            $shop->save();
            $request->session()->flash('message', 'Successfully updated');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record is found to update');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        return redirect('/shopprocess');
    }
    public function searchProcess(Request $request)
    {
        $data = array();
        if (isset($request->keyword)) {
            $data = shop::where('shopname', 'Like', '%' . $request->keyword . '%')->paginate(5);
        } else {
        }
        return view('shop.index', compact('data'));
    }
    public function showDashboard()
    {
        return view('shopOwner.shopDashboard');
    }
    public function foodRegister()
    {
        return view('shopOwner.foodRegister');
    }
    public function shopValidate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $error = []; 

        if (empty($email)) {
            $error['emailErr'] = "Please fill email"; 
        }

        if (empty($password)) {
            $error['passwordErr'] = "Please fill password"; 
        }

        if ($email != "" && $password != "") {
            $data = shop::where('email', '=', $request->email)->where('password', '=', $request->password)->get();
            $cData = count($data);
            if ($cData > 0) {
                $status = $data->first();
                if ($status->status =='Approved') {
                    $request->session()->put('shop', $data[0]);
                    return redirect('shopdashboard/');
                } else {
                    $error = "Your shop has not been approved yet";
                    return redirect('/shoplogin')->with('error', $error);
                }
            } else {
                $error = "Your email or password is incorrect";
                return redirect('/shoplogin')->with('error', $error);
            }
        } else {
            return redirect('/shoplogin')->with('error', $error);
        }
    }
}
