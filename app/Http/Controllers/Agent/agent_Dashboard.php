<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class agent_Dashboard extends Controller
{
  public function index()
  {
      return view('agent.dashboard');
  }
}
