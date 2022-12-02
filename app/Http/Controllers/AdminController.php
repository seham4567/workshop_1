<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request){
        $credendtial=$request->only('email','password');

        if(Auth::guard('admin')->attempt($credendtial)){


                return redirect(route('dasboard'));
        }
        
        Alert::error('failed','notfound');
        return redirect()->back();
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return view('Admin.Layouts.login');

    }
    public function index()
    {
        return view('main');
        return view('roles.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::get();
        return view('roles.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role_id'=>$request->role_id,
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAdmin  $userAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    public function test()
    {
        $role=Admin::with('role')->first();
        // return $role->permissions;
        return $role->role->permissions;
    }

}
