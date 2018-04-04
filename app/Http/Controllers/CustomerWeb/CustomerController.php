<?php

namespace App\Http\Controllers\CustomerWeb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
	protected $viewdir = 'customer.webapp';

	public function my_account(){
		return view($this->viewdir.'.sections.my_account');
	}

	public function solicit(){
		return view($this->viewdir.'.sections.solicit');
	}
	
	public function directory(){
		return view($this->viewdir.'.sections.directory');
	}
}
