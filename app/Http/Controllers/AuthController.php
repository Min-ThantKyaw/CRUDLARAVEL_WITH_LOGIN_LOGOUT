<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function userCreate(Request $request)


    {
        $data = $this->getPostData($request);
        User::create($data);
        return redirect()->route('loginPage')->with('message', 'Created account Successfully');
    }
    //Get Post Data for register
    private function getPostData(Request $request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ];
    }
}
