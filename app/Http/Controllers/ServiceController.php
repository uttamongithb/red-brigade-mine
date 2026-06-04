<?php
namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use Mail;
use File;
use Socialite;
use bcrypt;
use Config;
use Redirect;	
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use PDF;

class ServiceController extends Controller {
	public function enquiry()
	{
		$allquery=DB::table('contact')->orderBy('contact.id','DESC')->get();
		return view('services.enquiry',compact('allquery'));
	}
		public function viewnews()
	{
		$allnews=DB::table('news')->orderBy('news.id','DESC')->get();	
		return view('services.viewnews',compact('allnews'));
	}
	public function addblog(Request $request)
	{
		if($request->isMethod('post'))
		{
			 $rules = array(
			 'name' => 'required',
			 'description' => 'required',
			 'date' => 'required',
			);
			 $validator = Validator::make(Input::all(), $rules);
			if($validator->fails()){
				return Redirect::back()
					->withErrors($validator)
					 ->withInput(Input::except('password'));
			} else {
					$inputt = Input::all();	
					$input = $request->input();
						$input['slug'] = strtolower(str_slug($input['name'], '-'));
						  unset($input['_token']);
						   $file = $inputt['image'];
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/blog'; 
								   $fileName = 'diitedu-blog';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}
							Db:: table('blog')->insert($input);
							Session::flash('message', 'Successfully Added Blog!');
							return Redirect::back();
				} 
		}
		return view('services.addblog');	
	}
	public function editblog($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('blog')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
				$input['slug'] = strtolower(str_slug($input['name'], '-'));
			   if(!empty($inputt['image'][0]))
				{
					$file = array_filter($inputt['image']);
					if(!empty($file)){
					   $destinationPath = 'uploads/blog'; 
					   $fileName = 'sunshine-blog';
					   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
					   $input['image'] = $imageName;
					}
				}

					$rowCOllection = DB::table('blog')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated .!');
					return Redirect::back();
		}
		return view('services.editblog',compact('thisdata'));
		
	}	
	public function viewblog()
	{
		$allblog=DB::table('blog')->orderBy('blog.id','DESC')->get();	
		return view('services.viewblog',compact('allblog'));
	}
	public function addnews(Request $request)
	{
		if($request->isMethod('post'))
		{
			 $rules = array(
			 'name' => 'required',
			 'description' => 'required',
			 'date' => 'required',
			 'type' => 'required',
			);
			 $validator = Validator::make(Input::all(), $rules);
			if($validator->fails()){
				return Redirect::back()
					->withErrors($validator)
					 ->withInput(Input::except('password'));
			} else {
					$inputt = Input::all();	
					$input = $request->input();
						  unset($input['_token']);
						   $file = $inputt['image'];
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/news'; 
								   $fileName = 'diitedu-news';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}
							if($input['type'] == 'blog' && empty($input['slug'])){
								$input['slug'] = strtolower(str_slug($input['name'], '-'));
							}
							Db:: table('news')->insert($input);
							Session::flash('message', 'Successfully Added Work!');
							return Redirect::back();
				} 
		}
		return view('services.addnews');	
	}

	public function editnews($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('news')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
			   if(!empty($inputt['image'][0]))
				{
					$file = array_filter($inputt['image']);
					if(!empty($file)){
					   $destinationPath = 'uploads/news'; 
					   $fileName = 'sunshine-news';
					   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
					   $input['image'] = $imageName;
					}
				}
				if($input['type'] == 'blog' && empty($input['slug'])){
					$input['slug'] = strtolower(str_slug($input['name'], '-'));
				}

					$rowCOllection = DB::table('news')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated Work!');
					return Redirect::back();
		}
		return view('services.editnews',compact('thisdata'));
		
	}
	
	public function addtestimonial(Request $request)
	{
		if($request->isMethod('post'))
		{
				 $rules = array(
				'name' => 'required',
				'description' => 'required',
				);
				 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else {
						$inputt = Input::all();
						$input = $request->input();
						// echo "<pre>";
						// print_r($input);die;
						 unset($input['_token']);
						   $file = $inputt['image'];
						   $imagesput=array();
						   $imagesput1=array();
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/testimonial'; 
								   $fileName = 'sunshine-testimonial';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}

						Db:: table('testimonial')->insert($input);
						Session::flash('message', 'Successfully Added testimonial!');
						return Redirect::back();
					}																					
		}

		return view('services.addtestimonial');		
	}
	
	public function addproduct(Request $request)
	{
		$allservice=DB::table('service')->select('id','name')->orderBy('service.id','DESC')->get();
		if($request->isMethod('post'))
		{
			echo "dfa";die;
			$input=$request->input();
			unset($input['_token']);

				 $rules = array(
				'name' => 'required',
				'description' => 'required',
				);
				 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else {
						$inputt = Input::all();
						$input = $request->input();
					$alrdydata=	DB::table('product')->where('name',$input['name'])->first();
					if(empty($alrdydata)) {
						 unset($input['_token']);
						   $file = $inputt['image'];
						   $imagesput=array();
						   $imagesput1=array();
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/product'; 
								   $fileName = 'sunshine-product';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}
						$input['slug'] = strtolower(str_slug($input['name'], '-'));
						echo "<pre>";
						 print_r($input);die;
						Db:: table('product')->insert($input);
						Session::flash('message', 'Successfully Added product!');
						return Redirect::back();
					}
					else {
						Session::flash('message', 'This Product Already Exist!');
						return Redirect::back();			
					}
				}					
			}

		return view('services.addproduct',compact('allservice'));		
	}
	
	
	public function addservice(Request $request)
	{
		if($request->isMethod('post'))
		{
			$input=$request->input();
			unset($input['_token']);
			if($request->isMethod('post')) 
			{
				 $rules = array(
				'name' => 'required',
				'description' => 'required',
				);
				 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else {
						$inputt = Input::all();
						$input = $request->input();
						 unset($input['_token']);
					$alrdydata=	DB::table('service')->where('name',$input['name'])->first();
					if(empty($alrdydata)) {
						   $file = $inputt['image'];
						   $imagesput=array();
						   $imagesput1=array();
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/service'; 
								   $fileName = 'sunshine-service';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}
							$input['slug'] = strtolower(str_slug($input['name'], '-'));
						Db:: table('service')->insert($input);
						Session::flash('message', 'Successfully Added Services!');
						return Redirect::back();
					} else {
						Session::flash('message', 'This Service Name Already Exist!');
						return Redirect::back();		
					}
				}					
			}
		}
		return view('services.addservice');		
	}
	public  function addslider(Request $request)
	{
		if($request->isMethod('post'))
		{
			$input=$request->input();
			unset($input['_token']);
			if($request->isMethod('post')) 
			{
				 $rules = array(
				'name' => 'required',
				'description' => 'required',
				);
						 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else {
						$inputt = Input::all();
						$input = $request->input();
						 unset($input['_token']);
						   $file = $inputt['image'];
						   $imagesput=array();
						   $imagesput1=array();
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/slider'; 
								   $fileName = 'sunshine-slider';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}

						Db:: table('slider')->insert($input);
						Session::flash('message', 'Successfully Added Slider!');
						return Redirect::back();
					}																					
			}
		}
		return view('services.addslider');
	}
	
	public  function addgallery(Request $request)
	{
		if($request->isMethod('post'))
		{
			$input=$request->input();
			unset($input['_token']);
			if($request->isMethod('post')) 
			{
				 $rules = array(
				// 'name' => 'required',
				);
						 $validator = Validator::make(Input::all(), $rules);
				if($validator->fails()){
					return Redirect::back()
						->withErrors($validator)
						 ->withInput(Input::except('password'));
				} else {
						$inputt = Input::all();
						$input = $request->input();
						 unset($input['_token']);
						   $file = $inputt['image'];
						   $imagesput=array();
						   $imagesput1=array();
						   if(!empty($inputt['image'])){
								if(!empty($file)){
								   $destinationPath = 'uploads/gallery'; 
								   $fileName = 'Redbrigade-lucknow';
								   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
								   $input['image'] = $imageName;
								}
							}
							 $file1 = $inputt['pdfimage'];
						   $imagesput1=array();
						   $imagesput11=array();
						   if(!empty($inputt['pdfimage'])){
								if(!empty($file1)){
								   $destinationPath1 = 'uploads/gallery'; 
								   $fileName1 = 'Redbrigade-lucknow-report';
								   $imageName1 = Helpers::imageUpload($file1,$destinationPath1,$fileName1);
								   $input['pdfimage'] = $imageName1;
								}
							}
						Db:: table('gallery')->insert($input);
						Session::flash('message', 'Successfully Added Gallery!');
						return Redirect::back();
					}																					
			}
		}
		return view('services.addgallery');
	}
	public function viewtestimonial()
	{
		$alltestimonial=DB::table('testimonial')->orderBy('testimonial.id','DESC')->get();
		return view('services.viewtestimonial',compact('alltestimonial'));
	}
	public function viewslider()
	{
		$allslider=DB::table('slider')->orderBy('slider.id','DESC')->get();
		return view('services.viewslider',compact('allslider'));
	}
	public function viewgallery()
	{
		$allgallery=DB::table('gallery')->orderBy('gallery.id','DESC')->get();
		return view('services.viewgallery',compact('allgallery'));
	}
	public function viewproduct()
	{
		$allproduct=DB::table('product')->join('service','service.id','=','product.service')->select('service.name as service_name','product.*')->orderBy('product.id','DESC')->get();
		return view('services.viewproduct',compact('allproduct'));
	}
	public function viewservice()
	{
		$allservice=DB::table('service')->orderBy('service.id','DESC')->get();
		
		return view('services.viewservice',compact('allservice'));
	}
	
	public function popularproduct($id,$status)
	{
		$decodeid = unserialize(base64_decode($id));
		$dstatus['status'] = $status;
		DB::table('product')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'This product status has been changed successfully.');
		return Redirect::back();
	}
	public function populargallery($id,$status)
	{
		$decodeid = unserialize(base64_decode($id));
		$dstatus['status'] = $status;
		DB::table('gallery')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'This gallery status has been changed successfully.');
		return Redirect::back();
	}
	public function populartestimonial($id,$status)
	{
		$decodeid = unserialize(base64_decode($id));
		$dstatus['status'] = $status;
		DB::table('testimonial')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'This testimonial status has been changed successfully.');
		return Redirect::back();		
	}
	
	public function popularservice($id,$status)
	{
		$decodeid = unserialize(base64_decode($id));
		$dstatus['status'] = $status;
		DB::table('service')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'This service status has been changed successfully.');
		return Redirect::back();
	}
	public function popularslider($id,$status)
	{
		$decodeid = unserialize(base64_decode($id));
		$dstatus['status'] = $status;
		DB::table('slider')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'This Slider status has been changed successfully.');
		return Redirect::back();
	}

	
	public function deleteEnquiry($id)
	{
			 $id = unserialize(base64_decode($id));
		  $product = DB::table('contact')->where('id',$id)->first();
		  if(!empty($product))
		  {
			 DB::table('contact')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted enquiry!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }		
	}
	public function deleteproduct($id)
	{
		 $id = unserialize(base64_decode($id));
		  $product = DB::table('product')->where('id',$id)->first();
		  if(!empty($product))
		  {
			 DB::table('product')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted product!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }	
    }
	public function deletegallery($id)
	{
		 $id = unserialize(base64_decode($id));
		  $gallery = DB::table('gallery')->where('id',$id)->first();
		  if(!empty($gallery))
		  {
			 DB::table('gallery')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted gallery!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }	
    }
    public function deleteblog($id)
	{
		 $id = unserialize(base64_decode($id));
		  $blog = DB::table('blog')->where('id',$id)->first();
		  if(!empty($blog))
		  {
			 DB::table('blog')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted blog!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }	
    }
	public function deletetestimonial($id)
	{
		 $id = unserialize(base64_decode($id));
		  $product = DB::table('testimonial')->where('id',$id)->first();
		  if(!empty($product))
		  {
			 DB::table('testimonial')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted testimonial!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }			
	}
	public function deleteslider($id)
	{
		 $id = unserialize(base64_decode($id));
		  $slider = DB::table('slider')->where('id',$id)->first();
		  if(!empty($slider))
		  {
			 DB::table('slider')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted slider!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }	
    }
	
	public function deleteservice($id)
	{
		 $id = unserialize(base64_decode($id));
		  $service = DB::table('service')->where('id',$id)->first();
		  if(!empty($service))
		  {
			$product = DB::table('product')->where('service',$id)->get();
			if(!empty($product)) {
				foreach($product as $pro)
				{
					$pid=$pro->id;
					 DB::table('product')->where('id',$pid)->delete();
				}
			}
			 DB::table('service')->where('id',$id)->delete();
			 Session::flash('message', 'Successfully deleted service!');                                                
			 return Redirect::back();
		  }
		  else
		  {
			  return redirect()->action('ServiceController@index')->withErrors('Invalid Id Provided');
		  }	
    }
	public function multiTestimonial()
	{
			if ($request->isMethod('post')){
			$values = $request->input('hg_cart');
			$final = explode(',',$values);
			foreach($final as $id){
				$categories = DB::table('testimonial')->where('id',$id)->first();
				  if(!empty($categories)){
					DB::table('testimonial')->where('id',$id)->delete();
				  }
			}
			Session::flash('message', 'Successfully deleted testimonial!');
			 Session::flash('alert-class', 'alert-success');
			echo 1;die;
		}
		else{
			echo 0;die;
		}	
	}
		public function multiServices(Request $request){
		if ($request->isMethod('post')){
			$values = $request->input('hg_cart');
			$final = explode(',',$values);
			foreach($final as $id){
				$categories = DB::table('service')->where('id',$id)->first();
				  if(!empty($categories)){
					  	$product = DB::table('product')->where('service',$id)->get();
						if(!empty($product)) {
							foreach($product as $pro)
							{
								$pid=$pro->id;
								 DB::table('product')->where('id',$pid)->delete();
							}
						}
					DB::table('service')->where('id',$id)->delete();
				  }
			}
			Session::flash('message', 'Successfully deleted service!');
			 Session::flash('alert-class', 'alert-success');
			echo 1;die;
		}
		else{
			echo 0;die;
		}
	}
	
	public function multiGallery()
	{
		if ($request->isMethod('post')){
			$values = $request->input('hg_cart');
			$final = explode(',',$values);
			foreach($final as $id){
				$categories = DB::table('gallery')->where('id',$id)->first();
				  if(!empty($categories)){
					DB::table('gallery')->where('id',$id)->delete();
				  }
			}
			Session::flash('message', 'Successfully deleted gallery!');
			 Session::flash('alert-class', 'alert-success');
			echo 1;die;
		}
		else{
			echo 0;die;
		}		
	}
	
	public function multiProduct(Request $request){
		if ($request->isMethod('post')){
			$values = $request->input('hg_cart');
			$final = explode(',',$values);
			foreach($final as $id){
				$categories = DB::table('product')->where('id',$id)->first();
				  if(!empty($categories)){
					DB::table('product')->where('id',$id)->delete();
				  }
			}
			Session::flash('message', 'Successfully deleted product!');
			 Session::flash('alert-class', 'alert-success');
			echo 1;die;
		}
		else{
			echo 0;die;
		}
	}
	
	public function multiSlider(Request $request){
		if ($request->isMethod('post')){
			$values = $request->input('hg_cart');
			$final = explode(',',$values);
			foreach($final as $id){
				$categories = DB::table('slider')->where('id',$id)->first();
				  if(!empty($categories)){
					DB::table('slider')->where('id',$id)->delete();
				  }
			}
			Session::flash('message', 'Successfully deleted slider!');
			 Session::flash('alert-class', 'alert-success');
			echo 1;die;
		}
		else{
			echo 0;die;
		}
	}
	
	public function editgallery($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('gallery')->where('id',$id)->first();
			if ($request->isMethod('post'))
			{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
			   if(!empty($inputt['image'][0]))
				{
					$file = array_filter($inputt['image']);
					if(!empty($file)){
					   $destinationPath = 'uploads/gallery'; 
					   $fileName = '41services-gallery';
					   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
					   $input['image'] = $imageName;
					}
				}
					$rowCOllection = DB::table('gallery')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated gallery!');
					return Redirect::back();
			}
		return view('services.editgallery',compact('thisdata'));
	}
	
	public function editslider($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('slider')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
			   if(!empty($inputt['image'][0]))
				{
					$file = array_filter($inputt['image']);
					if(!empty($file)){
					   $destinationPath = 'uploads/slider'; 
					   $fileName = 'sunshine-slider';
					   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
					   $input['image'] = $imageName;
					}
				}
					$rowCOllection = DB::table('slider')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated Slider!');
					return Redirect::back();
		}
		return view('services.editslider',compact('thisdata'));
		
	}
	
	public function editservice($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('service')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
				$alrdydata=	DB::table('service')->where('id','!=',$id)->where('name',$input['name'])->first();
				if(empty($alrdydata)) {
				   if(!empty($inputt['image'][0]))
					{
						$file = array_filter($inputt['image']);
						if(!empty($file)){
						   $destinationPath = 'uploads/service'; 
						   $fileName = 'sunshine-service';
						   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
						   $input['image'] = $imageName;
						}
					}
					$input['slug'] = strtolower(str_slug($input['name'], '-'));
					$rowCOllection = DB::table('service')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated service!');
					return Redirect::back();
				}
				else {
					Session::flash('message', 'Service Name Already Exist!');
					return Redirect::back();	
				}
		}
		return view('services.editservice',compact('thisdata'));
		
	}
	
	public function editproduct($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$allservice=DB::table('service')->select('id','name')->orderBy('service.id','DESC')->get();
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('product')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
				$alrdydata=	DB::table('product')->where('id','!=',$id)->where('name',$input['name'])->first();
				if(empty($alrdydata)) {
					   if(!empty($inputt['image'][0]))
						{
							$file = array_filter($inputt['image']);
							if(!empty($file)){
							   $destinationPath = 'uploads/product'; 
							   $fileName = 'sunshine-product';
							   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
							   $input['image'] = $imageName;
							}
						}
					$input['slug'] = strtolower(str_slug($input['name'], '-'));
					$rowCOllection = DB::table('product')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated product!');
					return Redirect::back();
				} else {
					Session::flash('message', 'Already Exist This Product Name!');
					return Redirect::back();		
				}
		}
		return view('services.editproduct',compact('thisdata','allservice'));
		
	}
		
	public function edittestimonial($id,Request $request)
	{
		date_default_timezone_set('Asia/Kolkata');
		$id = unserialize(base64_decode($id));
		$thisdata = DB::table('testimonial')->where('id',$id)->first();
		if ($request->isMethod('post'))
		{
			   $inputt = Input::all();
			   $input = $request->input();
				unset($input['_token']);
			   if(!empty($inputt['image'][0]))
				{
					$file = array_filter($inputt['image']);
					if(!empty($file)){
					   $destinationPath = 'uploads/testimonial'; 
					   $fileName = 'sunshine-testimonial';
					   $imageName = Helpers::imageUpload($file,$destinationPath,$fileName);
					   $input['image'] = $imageName;
					}
				}

					$rowCOllection = DB::table('testimonial')->where('id',$id)->update($input);
					Session::flash('message', 'Successfully Updated testimonial!');
					return Redirect::back();
		}
		return view('services.edittestimonial',compact('thisdata'));
		
	}
	
	
	
	

  
}
?>