<?php

namespace App\Http\Controllers;

use App\Models\SelectList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function dashBoard()
    {
        return view('index');
    }

    public function registerUser(Request $request)
    {
        $user = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user['password'] = Hash::make($user['password']);
        $user = User::create($user);
        Auth::login($user);
        return redirect('dashboard')->with('success', 'Register Successfully');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('dashboard')->with('success', 'User Login Successfully');
        }else if (Auth::guard('admin')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect('dashboard')->with('success', 'Admin Login Successfully');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('login');
    }

    public function selectList()
    {
        return view ('select.select-list');
    }

    public function selectRestaurant($id)
    {
        $selectRestaurantLists = SelectList::where('type',$id)->select('name')->get();
        return response()->json($selectRestaurantLists);
    }


    public function arrayKeyRemoveLogic()
    {
        $headers = [
            'FN' => 'First Name',
            'LN' => 'Last Name',
            'CFN' => 'Co First Name',
            'CLN' => 'Co Last Name',
            'APPEND5' => 'test',
            'CLIENT' => 'DSA Account Id',
            'APPEND6' => 'test1',
            'APPEND7' => 'test2',
            ];
            $newHeadrs = [];
            foreach ($headers as $key => $header) {

                if (strpos($key, 'APPEND') !== false) {
                    $rts = str_replace('APPEND', 'IGNORE', $key);
                    $newHeadrs[$rts] = $header;
                } else {
                    $newHeadrs[$key] = $header;
                }
            }
        return $newHeadrs;
    }
}