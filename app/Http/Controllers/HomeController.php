<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	
	 public function index1(){
	
	//$listcv=Cv::where('user_id',Auth::user()->id)->get();
		$listcv=Cv::all();	
		//$listcv=Auth::user()->cvs;
	return view('cv.index',['cvs'=>$listcv]);
	}
}
