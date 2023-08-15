<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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



}
