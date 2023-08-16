<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Withdraw_amount;



class DashboardController extends Controller
{
    public function Dashboard(){

        $total_users = User::all();
        $total_balance = Withdraw_amount::sum('balance');

        $active_users = User::where('status','1')->get();
        $inactive_users = User::where('status','0')->get();
        $verified_users = User::where('email_verified_at')->get();


        return view('admin.dashboard',compact('total_users','active_users','inactive_users','verified_users','total_balance'));
    }

    public function AdminDetails($id) {

        $user = Admin::find($id);

        return view('admin.profile.profile', compact('user'));
    }


    public function AdminDetailsUpdate(Request $request ,$id) {

        $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $id,
            'phone' => 'required|integer|min:10',
            'username' => 'required|integer|digits:8|unique:admins,username,' . $id,
        ]);

        $user = Admin::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->username = $request->username;

        $user->save();

        return redirect()->route('admin.details',$id)->with('success','Admin Information Updated Successfully');
    }

    public function AdminPassDetails($id) {

        $user = Admin::find($id);

        return view('admin.profile.pass', compact('user'));
    }


    public function AdminPassDetailsUpdate(Request $request ,$id) {

        $users = Admin::find($id);
        $old_pass = $users->password;


        if (password_verify($request->input('oldpassword'), $old_pass)) {

            $request->validate([
                'newpassword' => ['required', 'string','min:6'],
                'confirmpassword' => ['required', 'string','min:6'],
            ]);



            if ($request->newpassword == $request->confirmpassword)
             {
                $users->password = Hash::make($request->newpassword);

            }

            else{
             return redirect()->route('admin.passdetails',$id)->with('error','New password and Confirm Password doesnot match');

            }



        $users->save();
        return redirect()->route('admin.passdetails',$id)->with('success','Admin Information Updated Successfully');

        }
        else{
            return redirect()->route('admin.passdetails',$id)->with('error','Old password doesnot match');

        }

    }



}
