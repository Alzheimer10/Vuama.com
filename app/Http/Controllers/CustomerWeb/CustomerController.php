<?php

namespace App\Http\Controllers\CustomerWeb;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Customer;

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
	
	public function customer_type(){
		return view('customer.auth.customertype');
	}

	/**
	* @return View Blade
	*/    
	public function perfil($slugString){
	    $customer = Customer::findBySlugOrFail($slugString);
	    return view($this->viewdir.'.sections.perfil')->with('customer', $customer);
	}

}
