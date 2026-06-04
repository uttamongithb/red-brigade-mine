<?php
namespace App\Http\Controllers;
use App\Registeruser;
use DB;
use Session;
use bcrypt;
use URL;
use Htmlhelpers;
use Helpers;
use Config;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class MainController extends Controller {
	public function index()
	{
	    $allslider=DB::table('slider')->where('status', 1)->orderBy('slider.id','DESC')->get();
		
		// For Homepage Recent Work: show both events and blogs
		$allevent=Db::table('news')->orderBy('date','DESC')->orderBy('id','DESC')->limit(12)->get();
		
		// Featured stories on homepage: show only blogs
		$allblog=Db::table('news')->where('type', 'blog')->orderBy('date','DESC')->orderBy('id','DESC')->limit(6)->get();
		
		$alltestimonial=Db::table('testimonial')->orderBy('testimonial.id','DESC')->get();
	 
		$allactivity=Db::table('gallery')->where('type','Activity')->orderBy('gallery.id','DESC')->limit(6)->get();
		$allcampains=Db::table('gallery')->where('type','Campains')->orderBy('gallery.id','DESC')->limit(6)->get();
		$allnews=Db::table('gallery')->where('type','News')->orderBy('gallery.id','DESC')->limit(6)->get();
		$alldonate=Db::table('gallery')->where('type','Donate')->orderBy('gallery.id','DESC')->limit(6)->get();
		
		return view('main.index',compact('allslider','allevent','allblog','allactivity','allcampains','allnews','alldonate','alltestimonial'));
	}

	public function about()
	{
	   return view('main.about');
	} 

	public function research()
	{
	   return view('main.research');
	} 

	public function ethics()
	{
	   return view('main.ethics');
	} 

	public function ourteam()
	{
		$alltestimonial=Db::table('testimonial')->orderBy('testimonial.id','ASC')->get();
		return view('main.ourteam',compact('alltestimonial'));
	}

	public function achievements()
	{
	    return view('main.achievements');
	} 

	public function event()
	{
		// Our Work page: show BOTH events and blogs
		$allevent=Db::table('news')->orderBy('date','DESC')->orderBy('id','DESC')->get();
		return view('main.event',compact('allevent'));
	}

	public function gallery()
	{
		$photos=Db::table('gallery')->where('type', 'Photo')->orderBy('gallery.id','DESC')->get();
		$videos=Db::table('gallery')->where('type', 'Video')->orderBy('gallery.id','DESC')->get();
		return view('main.gallery',compact('photos', 'videos'));
	}

	public function blog()
	{
		$allblog=Db::table('blog')->orderBy('blog.id','DESC')->get();
		return view('main.blog',compact('allblog'));
	}
	
	public function singleblog($slug)
	{
		$thisblog=Db::table('blog')->where('slug',$slug)->first();
		if (!$thisblog) {
			return redirect()->action('MainController@blog');
		}
		return view('main.singleblog',compact('thisblog'));
	}

	public function singlework($id)
	{
		$thiswork=Db::table('news')->where('id',$id)->first();
		if (!$thiswork) {
			return redirect()->action('MainController@event');
		}
		return view('main.singlework',compact('thiswork'));
	}

	public function ourworkpdf() 
	{ 
		 return view('main.ourworkpdf');
	}

	public function donate(Request $request)
	{
		if($request->isMethod('post'))
		{
		   $input = $request->only(['fast_name','last_name','email','mobile','address','amount','city','state','zip']);
			$this_data=Db::table('donate')->orderBy('id','DESC')->select('id')->first();
			$rand=rand(1000,99999);
			if(empty($this_data)) {
				$input['transId']=$rand.'1';
			} else {
				$getid=$this_data->id+1;
				$input['transId']=$rand.$getid;
			}
			Db:: table('donate')->insert($input);
			$idget = $input['transId'];
			return redirect()->action('MainController@payumoney',$idget);
		}
		return view('main.donate');
	}

	public function payumoney($id,Request $request)
	{
		$transId = $id;
		$userdata=Db::table('donate')->where('transId',$transId)->where('status',0)->first();
		return view('main.payumoney',compact('userdata'));
	}

	public function paysuccess(Request $request)
	{
		$id = $request->input('order');
		if ($id) {
			$data['status']=1;
			Db::table('donate')->where('transId',$id)->update($data);
		}
		Session::flash('message', 'Successfully Payment Submit Order No. '.htmlspecialchars($id, ENT_QUOTES, 'UTF-8'));
		return view('fronts.paysuccess');
	}

	public function failure(Request $request)
	{
			$id = $request->input('order');
			Session::flash('message', 'Your Payment are failed Please Try again. Order No. '.htmlspecialchars($id, ENT_QUOTES, 'UTF-8'));
			return view('fronts.failure');
	}

	public function contact(Request $request)
	{
		if($request->isMethod('post'))
		{
				 $rules = array(
				'name' => 'required',
				'email' => 'required|email',
				'mobile'	=> 'required',
				'state' => 'required',
				'district' => 'required',
				'msg'	=> 'required',
				);
				 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else{
					$input = $request->only(['name','email','mobile','state','district','msg']);
					Db:: table('contact')->insert($input);
					Session::flash('message', 'Successfully Submit Enquiry!');
					return Redirect::back();
				 }	
		}
	  return view('main.contact');
	}

	public function enquiry()
	{
	  return view('main.enquiry');
	} 	 

	public function product()
	{
		$allproduct = DB::table('product')->where('status',1)->orderBy("product.id",'DESC')->get();
		return view('main.product',compact('allproduct'));
	}

	public function singleproduct($slug)
	{
		$thisproduct=DB::table('product')->where('slug',$slug)->first();
		if (empty($thisproduct)) {
			return redirect()->action('MainController@product');
		}
	  return view('main.singleproduct',compact('thisproduct'));
	}
	
	public function service()
	{
		$allservice = DB::table('service')->where('status',1)->orderby("service.id",'DESC')->get();
	  return view('main.service',compact('allservice'));
	}

	public function singleservice($slug)
	{
		$thisservice=DB::table('service')->where('slug',$slug)->first();
		if (empty($thisservice)) {
			return redirect()->action('MainController@service');
		}
		$thisproduct=DB::table('product')->where('service',$thisservice->id)->orderBy('product.id','DESC')->get();
		
	  return view('main.singleservice',compact('thisservice','thisproduct'));
	}

	public function productrepairing()
	{
	  return view('main.productrepairing');
	}
}
