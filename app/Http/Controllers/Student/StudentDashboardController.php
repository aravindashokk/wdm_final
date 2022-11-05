<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

use Brian2694\Toastr\Facades\Toastr;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student']);
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
    public function mycart(){
        $this->checkauth();
        if (auth()->user()->hasRole('student')) {

            $products = Cart::where(['student_id' => auth()->user()->id,'status' => 'pending'])->get();
                return view('student.my-cart', compact('products'));

        } else {
            Toastr::error('No authorized to access student dashboard.Log in to your account', 'Error', ["positionClass" => "toast-top-right"]);

            return redirect()->route('login');
        }
    }
}
