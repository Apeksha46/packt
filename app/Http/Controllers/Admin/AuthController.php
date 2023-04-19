<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AuthController extends Controller
{

    protected $guard = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * login method.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

       $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = array(
            'email' => $input['email'],
            'password' => $input['password']
        );

        if(auth()->guard($this->guard)->attempt($data))
        {
            return redirect()->route('books.index');

        }else{
            return back()->with('error',trans('auth.failed'));

        }
    }

    /**
     * logout method.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->guard($this->guard)->logout();
        return redirect()->route('login');
    }

}
