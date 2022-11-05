<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:student']);
    }
    public function checkauth()
    {
        $user = auth()->user();
        return $user;
    }
    public function index()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {

            // if ($this->checkauth()->hasPermission('create-order')) {
            //     return view('client.place-new-order');
            // } else {
            //     Toastr::error('No permission to access this page', 'Error', ["positionClass" => "toast-top-right"]);
            //     return redirect('client/no-access');
            // }
            return view('student.dashboard');
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function allproducts()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $products = Product::where('quantity', '>', 1)->get();
            return view('student.allproducts', compact('products'));
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function removecart(Request $request)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $this->validate($request, [
                'product_name' => 'required',
            ]);
            $product = Product::where('slug', $request->product_name)->first();
            $check = Cart::where(['student_id' => auth()->user()->id, 'product_id' => $product->id])->first();
            if ($check) {
                $check->delete();
                Toastr::error('Product removed from cart successfully', 'Error', ["positionClass" => "toast-botom-right"]);
                return redirect()->back();
            } else {

                Toastr::success('Unable to locate the your cart product', 'Alert', ["positionClass" => "toast-bottom-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function addtocart(Request $request)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $this->validate($request, [
                'product_name' => 'required',
            ]);
            $product = Product::where('slug', $request->product_name)->first();
            $check = Cart::where(['student_id' => auth()->user()->id, 'product_id' => $product->id, 'status' => 'pending'])->first();
            if ($check) {
                Toastr::error('Product already in cart', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            } else {
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

                $new = new Cart;
                $new->student_id = auth()->user()->id;
                $new->product_id = $product->id;
                $new->seller_id = $product->seller_id;
                $new->quantity = 1;
                $new->slug = $totalstring;
                $new->status = "pending";
                $new->save();


                Toastr::success('New product uploaded successfully', 'Alert', ["positionClass" => "toast-bottom-right"]);

                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function productdetails($slug)
    {

        $this->checkauth();
        if (auth()->user()->hasRole('student')) {

            $item = Product::where('slug', $slug)->first();
            if ($item) {
                return view('student.product-details', compact('item'));
            } else {

                Toastr::success('Unable to locate the your cart product', 'Alert', ["positionClass" => "toast-bottom-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function mycart()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {

            $products = Cart::where(['student_id' => auth()->user()->id, 'status' => 'pending'])->get();
            return view('student.my-cart', compact('products'));
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function checkout()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $totalcost = 0;
            $products = Cart::where(['student_id' => auth()->user()->id, 'status' => 'pending'])->get();
            foreach ($products as $product) {
                $totalcost += $product->cartproduct->price;
            }
            return view('student.check-out', compact('products', 'totalcost'));
        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function updateprofile()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            return view('student.update-profile');
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-bottom-right"]);

            return redirect()->route('login');
        }
    }
    public function saveaccountpassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed|string|min:6|max:20',
            'password_confirmation' => 'required',
        ]);
        $currentpassword = auth()->user()->password;
        if (Hash::check($request->current_password, $currentpassword)) {
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Toastr::success('Password changed successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            Toastr::error('Current password is incorrect', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function saveaccountemail(Request $request)
    {
        $this->validate($request, [
            'current_email' => 'required',
            'email' => 'required|email|unique:users',
            'confirm_email' => 'required|same:email',
        ]);
        $currentemail = auth()->user()->email;
        if ($request->current_email == $currentemail) {
            $user = User::find(auth()->user()->id);
            $user->email = $request->email;
            $user->save();
            Toastr::success('Email changed successfully', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            Toastr::error('Current email is incorrect', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }
    public function adverts()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            return view('student.create-advert');
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function storeadvert(Request $request)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $this->validate($request, [
                'advert_name' => 'required|string|min:5',
                'advert_price' => 'required|numeric|min:30',
                'advert_image' => 'required|image|mimes:jpeg,jpg,png|max:20048',
                'advert_description' => 'required|string|min:5',
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

            $new = new Advert;
            $new->seller_id = auth()->user()->id;
            $new->product_name = $request->advert_name;
            $new->price = $request->advert_price;
            $fileNameWithExt = $request->advert_image->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->advert_image->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->advert_image->storeAs('products', $filenameToStore, 'public');
            $new->image = $filenameToStore;
            $new->slug = $totalstring;
            $new->description = $request->advert_description;
            $new->save();

            Toastr::success('New Advert uploaded successfully', 'Alert', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('student.myadverts');
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
    public function myadverts()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $adverts = Advert::where('seller_id', auth()->user()->id)->get();
            return view('student.my-adverts', compact('adverts'));
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
    }
    public function alladverts()
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $adverts = Advert::where('seller_id', '!=',  auth()->user()->id)->get();
            return view('student.all-adverts', compact('adverts'));
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
    }
    public function advertdetails($slug)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $advert = Advert::where('seller_id', auth()->user()->id)->where('slug', $slug)->first();
            if ($advert) {
                return view('student.advert-details', compact('advert'));
            } else {
                Toastr::error('Unable to retrieve Advert details', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
    }
    public function deleteadvert($slug)
    {
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {
            $advert = Advert::where('seller_id', auth()->user()->id)->where('slug', $slug)->first();
            if ($advert) {
                Storage::delete('public/adverts/' . $advert->image);
                $advert->delete();
                Toastr::error('Advert deleted successfully', 'Error', ["positionClass" => "toast-bottom-right"]);
                return redirect()->back();
            } else {
                Toastr::error('Unable to retrieve Advert details', 'Error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {
            Toastr::error('No authorized to access admin dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
    }
}
