<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Cv;
use App\Http\Requests\cvRequest;

use Auth;
class CvController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index(){
	
	//$listcv=Cv::where('user_id',Auth::user()->id)->get();
	//$listcv=Cv::all();	
	if(Auth::user()->is_admin){
		$listcv=Cv::all();
	}else{
		$listcv=Auth::user()->cvs;
	}
	return view('cv.index',['cvs'=>$listcv]);
	}
	
	public function create(){
	return view('cv.create');
	}
	
	public function store(cvRequest $request){
	
	//return $request->all();
	$cv =new Cv();
	$cv->title=$request->input('title');
	$cv->presentation=$request->input('presentation');
	$cv->user_id=Auth::user()->id;
	
	if($request->hasFile('photo'))
	{
		//retourner la path de l'image
		$path=$request->file('photo')->store('images');
		//$path = $request->file('avatar')->store('avatars');
	}
	$cv->photo=$path;
	
	$cv->save();
	
	session()->flash('success','le cv est bien enregistré');
	
	return redirect('cvs');
	}
	
	public function edit($id){
	
	$cv=Cv::find($id);
	
	$this->authorize('update',$cv);
	
	return view('cv.edit',['cv'=>$cv]);
	}
	
	public function update(cvRequest $request,$id){
		
	$cv=Cv::find($id);
	
	$cv->title= $request->input('title');
	$cv->presentation=$request->input('presentation');
	
	if($request->hasFile('photo'))
	{
		//retourner la path de l'image
		$path=$request->file('photo')->store('images');
		//$path = $request->file('avatar')->store('avatars');
	}
	$cv->photo=$path;
	
	$cv->save();
	return redirect('cvs');
	}
	
	public function show($id){
	
	return view('cv.show',['id'=>$id]);
	}
	
	
	public function destroy(Request $request,$id){
		$cv=Cv::find($id);
		$cv->delete();
	return redirect('cvs')	;
	}
}
