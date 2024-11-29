<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterDriver extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-register-driver');
  }
}
