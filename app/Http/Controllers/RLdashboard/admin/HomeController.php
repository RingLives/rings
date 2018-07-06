<?php

namespace App\Http\Controllers\RLdashboard\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class HomeController extends Controller 
{
	public function index(){
		return view('RL-dashboard.login.login');
	}
}