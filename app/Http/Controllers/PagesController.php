<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	public function index(){
		return view('index');
	}

	public function about(){
		return view('pages.about');
	}

	public function contact(){
		return view('pages.contact');
	}

	public function faq(){
		return view('pages.faq');
	}


	public function recruterEtudiants(){
		return view('pages.recruter-etudiants');
	}

	public function partenariats(){
		return view('pages.partenariats');
	}

	public function admin(){
		return view('admin.index');
	}
}
