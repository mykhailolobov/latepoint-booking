<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calendar extends Controller
{
  public function index()
  {
    return view('content.apps.app-calendar');
  }
}
