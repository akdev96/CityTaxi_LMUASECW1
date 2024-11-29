<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdmin extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-admin');
  }
}
