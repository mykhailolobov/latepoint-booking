<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Customers extends Controller
{
  public function index()
  {
    return view('content.tables.tables-customers');
  }
}