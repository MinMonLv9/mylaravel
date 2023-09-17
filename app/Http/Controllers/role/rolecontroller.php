<?php

namespace App\Http\Controllers\role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;

class rolecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = role::Paginate(5);
        return view('role.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.roleregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new role();
        $role->rolename = $request->rolename;
        $role->save();
        $request->session()->flash('message', 'Successfully updated');
        $request->session()->flash('alert-class', 'alert-success');
        return redirect("/roleprocess");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = role::find($id);
        return view('role.edit', compact('role'));
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
        $role = role::find($id);
        if (isset($role)) {
            $role->rolename = $request->rolename;
            $role->save();
            $request->session()->flash('message', 'Successfully updated');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record is found to update');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        return redirect('/roleprocess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $role = role::find($id); //get role record by matching with id
        if (isset($role)) {
            $role->delete();
            $request->session()->flash('message', 'Succesfully delete');
            $request->session()->flash('alert-class', 'alert-success');
        } else {
            $request->session()->flash('message', 'No record found for delete');
            $request->session()->flash('alert-class', 'alert-danger');
        }
        return redirect('/roleprocess');
    }
    public function searchProcess(Request $request)
    {
        $data = array();
        if (isset($request->keyword)) {
            $data = role::where('rolename', 'Like', '%' . $request->keyword . '%')->paginate(5);
        } else {
        }
        return view('role.index', compact('data'));
    }
}
