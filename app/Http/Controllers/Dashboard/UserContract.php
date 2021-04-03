<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContractUser;
use Illuminate\Http\Request;
use App\Models\User;

class UserContract extends Controller
{

    public function index(Request $request)
    {
        // return $user = $request->all();
        // $user_contract = ContractUser::where('contractUserID' , $request->id);
        
        return view('dashboard.userContract.index');

    } // end of index


    public function create()
    {
         return view('dashboard.userContract.create',compact('user'));

    } // end of create


    public function store(Request $request)
    {
        // return User::whereRoleIs('admin')->find('id' ,$user->id);
        dd($request->all()); 
        // $user_contract = ContractUser::where('contractUserID' , $request->id); 
  
            // session()->flash('success' ,__('site.added_successfully'));
            // return redirect()->route('dashboard.users.index');             
    } // end of store

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\UserContract  $userContract
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(UserContract $userContract)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserContract  $userContract
     * @return \Illuminate\Http\Response
     */
    public function edit(UserContract $userContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserContract  $userContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserContract $userContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserContract  $userContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserContract $userContract)
    {
        //
    }
}
