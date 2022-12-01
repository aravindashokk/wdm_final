<?php

namespace App\Http\Controllers;

use App\Mail\BusinessRegisterAccount;
use App\Mail\SchoolRegisterAccount;
use App\Mail\StudentRegister;
use App\Mail\StudentRegisterAccount;
use App\Models\Business;
use App\Models\Cart;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use App\Models\UserQuery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function contacts()
    {
        return view('pages.contact-us');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function index()
    {
        return view('pages.homepage');
    }
    public function uploadquery(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string',
            'phone' => 'required|string|digits_between:10,12',
            'query' => 'required|string|max:300',
            'emailaddress' => 'required|email',
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

        $new = new UserQuery;
        $new->firstname = $request->get('firstname');
        $new->lastname = $request->get('lastname');
        $new->phone_number = $request->get('phone');
        $new->email = $request->get('emailaddress');
        $new->message = $request->get('query');
        $new->status = "pending";
        $new->slug = $totalstring;
        $new->save();
        return redirect()->to('/')->with('mesagesent', 'Message sent successfully');
    }
    public function createstudentaccount(Request $request)
    {
        $this->validate($request, [
            'last_name' => 'required|string|min:3',
            'first_name' => 'required|string|min:3',
            'phone_number' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'address_address' => 'required',
            'school_name' => 'required',
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required'
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
        $new->name = $request->first_name. "" .$request->last_name;
        $new->phone_number = $request->phone_number;
        $new->email = $request->email;
        $new->password = bcrypt($request->password);
        $new->email_verified_at = Carbon::now();
        $new->save();

        $add = new Student;
        $add->student_id = $new->id;
        $add->school_id = $request->school_name;
        $add->location_address = $request->address_address;
        $add->latitude = 99;
        $add->longitude = 33;
        $add->slug = $totalstring;
        $add->status = "verified";
        $add->save();

        $new->attachRole('student');
        $sender = "mercadoescolar@gmail.com";
        $receiver = $new->email;
        $message = "Student Account Successfully created. Please login to your account now.";
        Mail::to($receiver)->queue(new StudentRegisterAccount($sender, $receiver, $message));

        return redirect()->route('login')->with('accountsuccess', 'Student account successfully created.');
    }
    public function createschoolaccount()
    {
        return view('auth.register-school');
    }

    public function storeschoolaccount(Request $request)
    {
        $this->validate($request, [
            'admin_full_name' => 'required|string|min:5',
            'phone_number' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'school_name' => 'required|string|min:5',
            'address_address' => 'required',
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required'
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
        $new->name = $request->admin_full_name;
        $new->phone_number = $request->phone_number;
        $new->email = $request->email;
        $new->password = bcrypt($request->password);
        $new->email_verified_at = Carbon::now();
        $new->save();

        $add = new School;
        $add->manager_id = $new->id;
        $add->school_name = $request->school_name;
        $add->location_address = $request->address_address;
        $add->latitude = 40;
        $add->longitude = 30;
        $add->slug = $totalstring;
        $add->status = "verified";
        $add->save();

        $new->attachRole('schooladmin');
        $new->attachPermissions(['manage-students', 'manage-posts', 'manage-clubs']);
        $sender = "mercadoescolar@gmail.com";
        $receiver = $new->email;
        $message = "Schol Account Successfully created. Please login to your account now.";
        Mail::to($receiver)->queue(new SchoolRegisterAccount($sender, $receiver, $message));
        return redirect()->route('login')->with('accountsuccess', 'School account successfully created.');
    }
    public function createbusinessaccount()
    {
        return view('auth.register-business');
    }
    public function storebusinessaccount(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required|string|min:5',
            'phone_number' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'shop_name' => 'required|string|min:5',
            'address_address' => 'required',
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required'
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
        $new->password = bcrypt($request->password);
        $new->email_verified_at = Carbon::now();
        $new->save();

        $add = new Business;
        $add->owner_id = $new->id;
        $add->business_name = $request->shop_name;
        $add->location_address = $request->address_address;
        $add->latitude =90;
        $add->longitude = 30;
        $add->slug = $totalstring;
        $add->status = "verified";
        $add->save();

        $new->attachRole('businessowner');
        $new->attachPermission('manage-products');

        $sender = "mercadoescolar@gmail.com";
        $receiver = $new->email;
        $message = "Business Account Successfully created. Please login to your account now.";
        Mail::to($receiver)->queue(new BusinessRegisterAccount($sender, $receiver, $message));
        return redirect()->route('login')->with('accountsuccess', 'Business account successfully created.');
    }
}
