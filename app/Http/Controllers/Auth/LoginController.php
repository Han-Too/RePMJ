<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'admin') {
                // Alert::success('ADMIN', 'Berhasil Login');
                toast('Berhasil Login','success')->autoClose(1500);
                return redirect()->route('admin');
            } else if (auth()->user()->role === 'user') {
                // Alert::success('USER', 'You\'ve Successfully Registered');
                return redirect('/')->with('alert','Berhasil Login');;
            } 
            else {
                // Alert::error('error', 'You\'ve unRegistered');
                return redirect()->route('/')->with('alert', 'Akun Tidak Ditemukan');
            }
        } else {
            Alert::error('error', 'login lah masbro');
            return redirect()->route('login');
        }

    }
}