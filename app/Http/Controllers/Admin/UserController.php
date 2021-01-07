<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Business\Admin\BzUser;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    protected $bzUser;
    public function __construct()
    {
        $this->bzUser = new BzUser();
        parent::__construct();
    }

    //
    public function getLogin() {
        return view('admin.login');
    }

    public function postLogin(Request $request) {
        $login = [
            'user_name' => $request->user_name,
            'password' => $request->password,

        ];
        $login2 = [
            'phone' => $request->phone,
            'password' => $request->password,
        ];
        if((Auth::attempt($login) || Auth::attempt($login2)) && $this->bzUser->postLogin($request)){
            return redirect()->intended('/admin');
        } else{
            Auth::logout();
            return redirect()->back()->with(['error_message' => 'Username or password incorrect']);
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
    
}
