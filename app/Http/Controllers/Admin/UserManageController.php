<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Withdraw_amount;



class UserManageController extends Controller
{
    //

    public function AllUsers(){

        $total_users = User::orderBy('id','DESC')->get();

        return view('admin.usermanage.allusers',compact('total_users'));
    }

    public function ActiveUsers(){

        $total_users = User::all();

        $active_users = User::orderBy('id','DESC')->where('status','1')->get();

        return view('admin.usermanage.activeusers',compact('active_users'));
    }

    public function PendingUsers(){

        $inactive_users = User::orderBy('id','DESC')->where('status','0')->get();

        return view('admin.usermanage.pendingusers',compact('inactive_users'));
    }

    public function EmailVerifiedUsers(){

        $verified_users = User::orderBy('id','DESC')->where('email_verified_at')->get();

        return view('admin.usermanage.emailverifiedusers',compact('verified_users'));
    }

    public function UserDetails($id) {
        $user = User::find($id);

        $userbalance = Withdraw_amount::where('user_id',$id)->first();

        return view('admin.usermanage.useredit', compact('user','userbalance'));
    }

    public function UserDetailsUpdate(Request $request, $id){


        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|integer|min:10',
            'username' => 'required|integer|digits:8|unique:users,username,' . $id,
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->username = $request->username;
        $user->address = $request->address;
        $user->state = $request->state;
        $user->zipcode = $request->zipcode;
        $user->country = $request->country;

        $user->email_verified = $request->email_verified;

        // dd($request->email_verified);

        $user->save();

        return redirect()->route('admin.user.details',$id)->with('success','User Information Updated Successfully');


    }

}
