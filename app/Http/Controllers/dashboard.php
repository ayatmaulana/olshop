<?php

namespace App\Http\Controllers;

use Session;
use View;
use redirect;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Login;
use App\product;
use App\purchase_item;
use App\purchase;
use App\stock;

class dashboard extends Controller
{
      // public $user;
      public function __construct()
      {
        // apply middleware "CheckIfAuthenticated"
        $this->middleware('login', ['only'=>['product']]);
      }

      public function index()
      {
        return view('index');
      }

      public function index1()
      {
        return view('index1');
      }

      public function login()
      {
        return view('login');

        $login = DB::table('users')->get();
        if (condition) {
          // code...
        }
            // //
            // return redirect('product');
      }

      public function signin(Request $request)
      {
        $data = array(
          'email'=>$request->email ,
          'password'=>$request->password ,
        );

        // new login flow using session

        $check = \App\User::where("email", $data['email'])
                            ->first();

        if(count($check) == 0) return view("failed");

        $pwCheck = \Hash::check($data['password'], $check->password);

        if( !$pwCheck ) return view("failed");

        \Session::put("credential", $check);
        return redirect("product");
      }

      public function regis()
      {
          return view('regis');
      }

      public function signup(Request $request)
      {
        $data = DB::table('users')->get();
        $data = new Login;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('login');

      }

      public function product()
      {
        return view('product');
      }

      public function view()
      {
        return view('product1');

      }

      public function detail()
      {
        return view('product_detail');
      }

      public function input_data()
      {
        ///////////
      }

}
