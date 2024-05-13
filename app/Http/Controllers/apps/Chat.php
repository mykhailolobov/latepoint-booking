<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chat extends Controller
{
  public function index()
  {
    return view("content.apps.app-chat");
  }
}
