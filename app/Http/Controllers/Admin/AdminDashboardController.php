<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }

    public function index()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            // if ($this->checkauth()->hasPermission('create-order')) {
            //     return view('client.place-new-order');
            // } else {
            //     Toastr::error('No permission to access this page', 'Error', ["positionClass" => "toast-top-right"]);
            //     return redirect('client/no-access');
            // }
            return view('admin.dashboard');
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
}
