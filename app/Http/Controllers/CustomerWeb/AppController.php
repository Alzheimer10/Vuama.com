<?php

namespace App\Http\Controllers\CustomerWeb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{

	protected $viewdir = 'customer';

	public function home(){
		if(!\Auth::guard('customer')->check())
			return view($this->viewdir.'.website.home');
		return view('customer.webapp.home');
	}

	public function contact(){
		return view($this->viewdir.'.website.contact');
	}

	public function about(){
		return view($this->viewdir.'.website.about');
	}

	public function howWork(){
		return view($this->viewdir.'.website.howWork');
	}

	public function help(){
		return view($this->viewdir.'.website.help');
	}

	public function privacy_policy(){
		return view($this->viewdir.'.website.privacy_policy');
	}

	public function providers(){
		return view($this->viewdir.'.website.providers');
	}

	public function jobs(){
		return view($this->viewdir.'.website.jobs');
	}

	public function offices(){
		return view($this->viewdir.'.website.offices');
	}

}
