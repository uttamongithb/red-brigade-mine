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

class ServiceController extends Controller {
	
	// --- Enquiry Module ---
	public function enquiry()
	{
		$allquery = DB::table('contact')->orderBy('id','DESC')->get();
		return view('services.enquiry', compact('allquery'));
	}

	public function deleteEnquiry($id)
	{
		$id = $id;
		DB::table('contact')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted enquiry!');                                                
		return Redirect::back();
	}

	// --- Our Work (Events) Module ---
	public function viewnews()
	{
		$allnews = DB::table('news')->orderBy('id','DESC')->get();	
		return view('services.viewnews', compact('allnews'));
	}

	public function addnews(Request $request)
	{
		if ($request->isMethod('post')) {
			$rules = [
				'name' => 'required',
				'description' => 'required',
				'date' => 'required',
			];
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
			} else {
				$input = $request->except(['_token', 'image']);
				if ($request->hasFile('image')) {
					$file = Input::file('image');
					$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-work');
				}
				$input['type'] = 'event'; // Unified type
				$input['time_interval'] = '';
				$input['city'] = '';
				DB::table('news')->insert($input);
				Session::flash('message', 'Successfully Added Work!');
				return Redirect::back();
			}
		}
		return view('services.addnews');	
	}

	public function editnews($id, Request $request)
	{
		$id = $id;
		$thisdata = DB::table('news')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-work');
			}
			$input['type'] = 'event';
			$input['time_interval'] = '';
			$input['city'] = '';
			DB::table('news')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Work!');
			return Redirect::back();
		}
		return view('services.editnews', compact('thisdata'));
	}

	public function deletenews($id)
	{
		$id = $id;
		DB::table('news')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted work!');                                                
		return Redirect::back();
	}

	// --- Blog Module ---
	public function viewblog()
	{
		$allblog = DB::table('blog')->orderBy('id','DESC')->get();	
		return view('services.viewblog', compact('allblog'));
	}

	public function addblog(Request $request)
	{
		if ($request->isMethod('post')) {
			$rules = ['name' => 'required', 'description' => 'required'];
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput();
			} else {
				$input = $request->except(['_token', 'image']);
				if ($request->hasFile('image')) {
					$file = Input::file('image');
					$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-blog');
				}
				$input['slug'] = strtolower(str_slug($input['name'], '-'));
				DB::table('blog')->insert($input);
				Session::flash('message', 'Successfully Added Blog Story!');
				return Redirect::back();
			}
		}
		return view('services.addblog');	
	}

	public function editblog($id, Request $request)
	{
		$id = $id;
		$thisdata = DB::table('blog')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-blog');
			}
			$input['slug'] = strtolower(str_slug($input['name'], '-'));
			DB::table('blog')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Blog Story!');
			return Redirect::back();
		}
		return view('services.editblog', compact('thisdata'));
	}

	public function deleteblog($id)
	{
		$id = $id;
		DB::table('blog')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted blog story!');                                                
		return Redirect::back();
	}

	// --- Gallery Module ---
	public function viewgallery()
	{
		$allgallery = DB::table('gallery')->orderBy('id','DESC')->get();
		return view('services.viewgallery', compact('allgallery'));
	}

	public function addgallery(Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/gallery', 'sunshine-gallery');
			}
			DB::table('gallery')->insert($input);
			Session::flash('message', 'Successfully Added Gallery Item!');
			return Redirect::back();
		}
		return view('services.addgallery');
	}

	public function editgallery($id, Request $request)
	{
		$id = $id;
		$thisdata = DB::table('gallery')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/gallery', 'sunshine-gallery');
			}
			DB::table('gallery')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Gallery Item!');
			return Redirect::back();
		}
		return view('services.editgallery', compact('thisdata'));
	}

	public function deletegallery($id)
	{
		$id = $id;
		DB::table('gallery')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted gallery item!');                                                
		return Redirect::back();
	}

	// --- Team Module ---
	public function viewtestimonial()
	{
		$alltestimonial = DB::table('testimonial')->orderBy('id', 'DESC')->get();
		return view('services.viewtestimonial', compact('alltestimonial'));
	}

	public function addtestimonial(Request $request)
	{
		if ($request->isMethod('post')) {
			$rules = ['name' => 'required', 'description' => 'required'];
			$validator = Validator::make(Input::all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput();
			} else {
				$input = $request->except(['_token', 'image']);
				if ($request->hasFile('image')) {
					$file = Input::file('image');
					$input['image'] = Helpers::imageUpload($file, 'uploads/testimonial', 'sunshine-team');
				}
				DB::table('testimonial')->insert($input);
				Session::flash('message', 'Successfully Added Team Member!');
				return Redirect::back();
			}
		}
		return view('services.addtestimonial');		
	}

	public function edittestimonial($id, Request $request)
	{
		$id = $id;
		$thisdata = DB::table('testimonial')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/testimonial', 'sunshine-team');
			}
			DB::table('testimonial')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Team Member!');
			return Redirect::back();
		}
		return view('services.edittestimonial', compact('thisdata'));
	}

	public function deletetestimonial($id)
	{
		$id = $id;
		DB::table('testimonial')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted team member!');                                                
		return Redirect::back();
	}

	// --- Slider Module ---
	public function viewslider()
	{
		$allslider = DB::table('slider')->orderBy('id', 'DESC')->get();
		return view('services.viewslider', compact('allslider'));
	}

	public function addslider(Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/slider', 'sunshine-slider');
			}
			DB::table('slider')->insert($input);
			Session::flash('message', 'Successfully Added Slider!');
			return Redirect::back();
		}
		return view('services.addslider');
	}

	public function editslider($id, Request $request)
	{
		$id = $id;
		$thisdata = DB::table('slider')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = Input::file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/slider', 'sunshine-slider');
			}
			DB::table('slider')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Slider!');
			return Redirect::back();
		}
		return view('services.editslider', compact('thisdata'));
	}

	public function deleteslider($id)
	{
		$id = $id;
		DB::table('slider')->where('id', $id)->delete();
		Session::flash('message', 'Successfully deleted slider!');                                                
		return Redirect::back();
	}

	// --- Status Toggles ---
	public function populargallery($id, $status)
	{
		$decodeid = $id;
		DB::table('gallery')->where('id', $decodeid)->update(['status' => $status]);
		return Redirect::back();
	}

	public function populartestimonial($id, $status)
	{
		$decodeid = $id;
		DB::table('testimonial')->where('id', $decodeid)->update(['status' => $status]);
		return Redirect::back();		
	}

	public function popularslider($id, $status)
	{
		$decodeid = $id;
		DB::table('slider')->where('id', $decodeid)->update(['status' => $status]);
		return Redirect::back();
	}
}
