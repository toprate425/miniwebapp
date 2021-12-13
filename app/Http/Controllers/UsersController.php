<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\User_general;
use Hash;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $users = DB::table('users')
                        ->where('admin', '=', 0)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(20);

            return view('users.index', compact('users'));
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->admin) {
            return view('users.create');
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->admin) {

            $validatedData = $request->validate([
                'name' => 'required:max:40',
                'email' => 'required|unique:users|max:190',
                'password' => 'required|min:8',
                'role' => 'required|max:40',
            ]);
            
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->birth_date = $request->birth_date;
            $user->gender = $request->gender; 
            $user->country = $request->country;
            $user->password = Hash::make($request->password);
            if($request->hasFile('image')) {
                $user->image = $request->image->store('profile_pics', 'public');
            }
            $user->save();

            $role = new Role;
            $role->user_id = $user->id;
            $role->role = $request->role;
            $role->permission = $request->permission;
            $role->save();

            return redirect('/admin-panel')->with('msg_success', 'User Created Successfully');
            
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->admin) {
            $user = User::find($id);
            return view('users.view', compact('user'));
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->admin) {
            $user = User::findOrFail($id);
            $user_role = DB::table('roles')->where('user_id', '=', $id)->first();
            return view('users.edit', compact('user', 'user_role'));

        }
        else {
            return redirect('/home');
        }
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
        if(Auth::user()->admin) {

            $validatedData = $request->validate([
                'name' => 'required:max:40',
                'email' => 'required|max:190',
                'password' => 'nullable|min:8|confirmed',
                'role' => 'required|max:40',
            ]);

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->birth_date = $request->birth_date;
            $user->gender = $request->gender; 
            $user->country = $request->country;
            if($user->password) {
                $user->password = Hash::make($request->password);
            }
            if($request->hasFile('image')) {
                $user->image = $request->image->store('profile_pics', 'public');
            }
            $user->save();

            $role = Role::where('user_id', '=', $id)->firstOrFail();
            $role->role = $request->role;
            $role->permission = $request->permission;
            $role->save();

            return redirect('/admin-panel')->with('msg_success', 'User Updated Successfully');
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->admin) {
            $user = User::find($id);
            $role = Role::where('user_id', '=', $id)->firstOrFail();
            $role->delete();
            $user->delete();
            return redirect('/admin-panel')->with('msg_success', 'User Deleted Successfully');
        }
        else {
            return redirect('/home');
        }
    }

    public function choosecar(Request $request)
    {
        $useremail = Auth::user() -> email;
        $ids = $request->input('ids');
        $car_id =  $ids[0];
        // foreach ($ids as $key => $id) {
        //     $temp = -1;
        //     $car = DB::table('carlists')->where('id',$id)->first();
        //     $car_requester = $car->requester;
        //     if($car_requester){
        //         $car_requester_array = explode(",",$car_requester);
        //         $temp = array_search($useremail, $car_requester_array);
        //     } 
        //     if($temp < 0){
        //         $car_requester = $car_requester.','.$useremail;
        //     }
        //     $car = DB::table('carlists')->where('id',$id)->update(array('requester' => $car_requester));
        // }

        $temp = User_general::where('car_id',$car_id)->where('email',$useremail)->first();
        if($temp){
            $temp->firstname = $request->firstname;
            $temp->lastname = $request->lastname;
            $temp->birthday = $request->birthday;
            $temp->gender = $request->gender; 
            $temp->phone = $request->phone;
            $temp->address = $request->address;
            $temp->number = $request->number;
            $temp->city = $request->city;
            $temp->state = $request->state;
            $temp->zip = $request->zip;
            $temp->save();
        }else{
            $general = new User_general;
            $general->car_id = $car_id;
            $general->firstname = $request->firstname;
            $general->lastname = $request->lastname;
            $general->email = $useremail;
            $general->birthday = $request->birthday;
            $general->gender = $request->gender; 
            $general->phone = $request->phone;
            $general->address = $request->address;
            $general->number = $request->number;
            $general->city = $request->city;
            $general->state = $request->state;
            $general->zip = $request->zip;
            $general->save();
        }
        // return redirect('/home');
        return response()->json(200);
    }
}
