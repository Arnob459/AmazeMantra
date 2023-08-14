<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }



}
