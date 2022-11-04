<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\User;
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
    public function createbusiness()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-business')) {
                return view('admin.create-business');
            } else {
                Toastr::error('No permission to access this page', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect('');
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public  function storebusiness(Request $request)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-business')) {

                $this->validate($request, [
                    'full_name' => 'required|string|min:5',
                    'phone_number' => 'required|digits:10|unique:users',
                    'email' => 'required|email|unique:users',
                    'shop_name' => 'required|string|min:5',
                    'address_address' => 'required',
                    'address_latitude' => 'required',
                    'address_longitude' => 'required',
                ]);
                $timenow = time();
                $checknum = "1234567898746351937463790";
                $checkstring = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte";
                $checktimelength = 6;
                $checksnumlength = 6;
                $checkstringlength = 20;
                $randnum = substr(str_shuffle($timenow), 0, $checktimelength);
                $randstring = substr(str_shuffle($checknum), 0, $checksnumlength);
                $randcheckstring = substr(str_shuffle($checkstring), 0, $checkstringlength);
                $totalstring = str_shuffle($randcheckstring . "" . $randnum . "" . $randstring);

                $new = new User;
                $new->name = $request->full_name;
                $new->phone_number = $request->phone_number;
                $new->email = $request->email;
                $new->password = bcrypt($request->phone_number);
                $new->save();

                $add = new Business;
                $add->owner_id = $new->id;
                $add->business_name = $request->shop_name;
                $add->location_address = $request->address_address;
                $add->latitude = $request->address_latitude;
                $add->longitude = $request->address_longitude;
                $add->slug = $totalstring;
                $add->status = "verified";
                $add->save();

                $new->attachRole('businessowner');

                Toastr::success('New Business added to the system', 'Title', ["positionClass" => "toast-bottom-right"]);
                return redirect()->route('admin.managebusiness');
            } else {
                Toastr::error('No permission create any business', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function allbusiness()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-business')) {
                $businesses = Business::all();
                return view('admin.all-business', compact('businesses'));
            } else {
                Toastr::error('No permission to access all businesses', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function editbusiness($slug)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-business')) {
                $bsn = Business::where('slug', $slug)->first();
                if ($bsn) {
                    return view('admin.edit-business', compact('bsn'));
                } else {

                    Toastr::error('Business profile not found', 'Error', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
            } else {
                Toastr::error('No permission to access all businesses', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function updatebusiness(Request $request, $slug)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {

            if ($this->checkauth()->hasPermission('manage-business')) {

                $this->validate($request, [
                    'full_name' => 'required|string|min:5',
                    'phone_number' => 'required|digits:10|exists:users',
                    'email' => 'required|email|exists:users',
                    'shop_name' => 'required|string|min:5',
                    'address_address' => 'required',
                    'address_latitude' => 'required',
                    'address_longitude' => 'required',
                ]);




                $add = Business::where('slug', $slug)->first();
                if ($add) {
                    $add->business_name = $request->shop_name;
                    $add->location_address = $request->address_address;
                    $add->latitude = $request->address_latitude;
                    $add->longitude = $request->address_longitude;
                    $add->save();
                    $new = User::where('id', $add->owner_id)->first();
                    $new->name = $request->full_name;
                    $new->phone_number = $request->phone_number;
                    $new->email = $request->email;
                    $new->save();
                    Toastr::success('New Business added to the system', 'Title', ["positionClass" => "toast-bottom-right"]);
                    return redirect()->route('admin.managebusiness');
                } else {
                    Toastr::error('Business profile not found', 'Error', ["positionClass" => "toast-bottom-right"]);
                    return redirect()->back();
                }
            } else {
                Toastr::error('No permission create any business', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function deletebusiness(Request $request, $slug)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('admin')) {
            if ($this->checkauth()->hasPermission('manage-business')) {
                $bsn = Business::where('slug', $slug)->first();
                if ($bsn) {
                    $bsn->delete();

                    Toastr::error('Business profile  deleted successfully.', 'Error', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                } else {
                    Toastr::error('Business profile ', 'Error', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
            } else {
                Toastr::error('No permission to access all businesses', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
    }
}
