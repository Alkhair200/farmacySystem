<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
// use Illuminate\Validation\Rule;

class UserController extends Controller
{

    function __construct()
    {
        // Read Create Update Delete 
        $this->middleware(['permission:users_read'])->only('index');
        $this->middleware(['permission:users_create'])->only('create');
        $this->middleware(['permission:users_update'])->only('edit');
        $this->middleware(['permission:users_delete'])->only('destroy');

    } // end of construct

    
    public function index(Request $request)
    {
       $users = User::whereRoleIs('admin')->where(function($q) use ($request){

       return $q->when($request->search, function($query) use($request) {

                  return $query->where('first_name' ,'like' ,'%' .$request->search .'%')
                    ->orWhere('last_name' ,'like' ,'%' .$request->search .'%');
        });
       })->latest()->paginate(PAGINATION_COUNT);

        return view("dashboard.users.index" ,compact("users"));

    } // end of index


    public function create()
    {
        return view("dashboard.users.create");

    } // end of create

 
    public function store(UserRequest $request)
    {
        // dd($request->all());
        try {
                $request_data = $request->except(['password' ,'password_confirmation' , 'permissions']);
                $request_data['password'] = bcrypt($request->password);

                $user = User::create($request_data);

                $user->attachRole('admin');
                $user->syncPermissions($request->permissions);

                
                session()->flash('success' ,__('site.added_successfully'));
                return redirect()->route('dashboard.users.index');
        } catch (\Throwable $th) {

            return redirect()->route('dashboard.');
        }// end of try
         
    } // end of store

 
    // public function show(User $user)
    // {
    //     //
    // }


    public function edit(User $user)
    {
        return view('dashboard.users.edit' ,compact('user'));
        
    } // end of edit


    public function update(UserUpdateRequest $request, User $user)
    {
        //  dd($request->all());
        try {
            $request_data = $request->except(['permissions']);

            $user->update($request_data);

            $user->syncPermissions($request->permissions);

            session()->flash('success' ,__('site.updated_successfully'));
            return redirect()->route('dashboard.users.index');
        } catch (\Throwable $th) {

            return redirect()->route('dashboard.');
        }// end of try

    } // end of update

 
    public function destroy(User $user)
    {
        $user->delete();
         session()->flash('success' ,__('site.deleted_successfully'));
        return redirect()->route('dashboard.users.index');

    }// end of destroy
}
