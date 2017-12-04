<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function Admin(){
        return view('registration.create_admin');
    }

    public function store(Request $request){


        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user = Admin::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/welcome');
    }
    
}
