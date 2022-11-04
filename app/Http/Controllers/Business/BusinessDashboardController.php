<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'role:businessowner']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }

    public function index()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('businessowner')) {

            // if ($this->checkauth()->hasPermission('create-order')) {
            //     return view('client.place-new-order');
            // } else {
            //     Toastr::error('No permission to access this page', 'Error', ["positionClass" => "toast-top-right"]);
            //     return redirect('client/no-access');
            // }
            return view('business.dashboard');
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function addproduct()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-products')) {
                return view('business.create-product');
            } else {
                Toastr::error('No permission to access this page', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect('');
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
}
