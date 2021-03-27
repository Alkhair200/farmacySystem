<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("dashboard.users.index" ,compact("users"));
    } // end of index


    public function create()
    {
        return view("dashboard.users.create");

    } // end of create

 
    public function store(UserRequest $request)
    {
        // dd($request->all());
        $request_data = $request->except(['password' ,'password_confirmation' , 'permissions']);
         $request_data['password'] = bcrypt($request->password);

         $user = User::create($request_data);

         $user->attachRole('admin');
         $user->syncPermissions($request->permissions);

        
         session()->flash('success' ,__('site.added_successfully'));
         return redirect()->route('dashboard.users.index');
         
    } // end of store

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
