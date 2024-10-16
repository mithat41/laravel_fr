<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Controller extends Controller
{

    public function User_Controller(Request $request)
    {

        $validataDate       = $request->validate([
           'username'       => 'required|min:4',
            'email'         => 'required|email',
            'password'      => 'required|min:6',
            'conf_password' => 'required|min:6',
            'checkbox'      => 'required'
        ],[
            'username'      => 'Lütfen kullanıcı adını gir!',
            'email'         => 'Lütfen email adresini gir!',
            'password'      => 'Lütfen parolanı gir!',
            'conf_password' => 'Lütfen parolanı doğrula',
            'checkbox'      => 'Lütfen kullanıcı sözleşmesini onayla!'
        ]);

        $username      = $validataDate['username'];
        $email         = $validataDate['email'];
        $password      = $validataDate['password'];
        $conf_password = $validataDate['conf_password'];

        if ($password != $conf_password){

        }

    }

}
