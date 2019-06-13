<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
class ServiceController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
        return view('service');
    }
	
	 public function index1(){
	
	//$listcv=Cv::where('user_id',Auth::user()->id)->get();
		$listcv=Cv::all();	
		//$listcv=Auth::user()->cvs;
	return view('service',['cvs'=>$listcv]);
	}
}
