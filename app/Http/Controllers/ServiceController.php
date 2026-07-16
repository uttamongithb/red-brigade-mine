<?php
namespace App\Http\Controllers;
use DB;
use Auth;
use Session;
use Mail;
use File;
use Config;
use Redirect;	
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helpers;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

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
	public function viewnews(Request $request)
	{
		$filter = $request->get('filter');
		$today = date('Y-m-d');
		
		$query = DB::table('news');
		
		if ($filter == 'previous') {
			$query->where('date', '<', $today)
			      ->where('date', '!=', 'Ongoing');
		} else {
			$query->where(function($q) use ($today) {
				$q->where('date', '>=', $today)
				  ->orWhere('date', 'Ongoing');
			});
		}
		
		$allnews = $query->orderBy('date','DESC')->get();	
		return view('services.viewnews', compact('allnews', 'filter'));
	}

	public function addnews(Request $request)
	{
		if ($request->isMethod('post')) {
			$rules = [
				'date' => 'required',
			];
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput($request->except('password'));
			} else {
				$input = $request->only(['name', 'description', 'date']);
				$input['name'] = $input['name'] !== null ? $input['name'] : '';
				$input['description'] = $input['description'] !== null ? $input['description'] : '';
				if ($request->hasFile('image')) {
					$file = $request->file('image');
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
		$id = (int) $id;
		$thisdata = DB::table('news')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->only(['name', 'description', 'date']);
			$input['name'] = $input['name'] !== null ? $input['name'] : '';
			$input['description'] = $input['description'] !== null ? $input['description'] : '';
			if ($request->hasFile('image')) {
				$file = $request->file('image');
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
		$id = (int) $id;
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
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput();
			} else {
				$input = $request->only(['name', 'description', 'date']);
				if ($request->hasFile('image')) {
					$file = $request->file('image');
					$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-blog');
				}
				$input['slug'] = strtolower(\Illuminate\Support\Str::slug($input['name'], '-'));
				DB::table('blog')->insert($input);
				Session::flash('message', 'Successfully Added Blog Story!');
				return Redirect::back();
			}
		}
		return view('services.addblog');	
	}

	public function editblog($id, Request $request)
	{
		$id = (int) $id;
		$thisdata = DB::table('blog')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->only(['name', 'description', 'date']);
			if ($request->hasFile('image')) {
				$file = $request->file('image');
				$input['image'] = Helpers::imageUpload($file, 'uploads/news', 'sunshine-blog');
			}
			$input['slug'] = strtolower(\Illuminate\Support\Str::slug($input['name'], '-'));
			DB::table('blog')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Blog Story!');
			return Redirect::back();
		}
		return view('services.editblog', compact('thisdata'));
	}


	public function deleteblog($id)
	{
		$id = (int) $id;
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
			$rules = [
				'name' => 'required|string|max:255',
				'type' => 'required|string|max:50',
			];
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput();
			}
			$input = $request->only(['name', 'type', 'embed', 'status']);
			if ($request->hasFile('image')) {
				$file = $request->file('image');
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
		$id = (int) $id;
		$thisdata = DB::table('gallery')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->only(['name', 'type', 'embed', 'status']);
			if ($request->hasFile('image')) {
				$file = $request->file('image');
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
		$id = (int) $id;
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
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return Redirect::back()->withErrors($validator)->withInput();
			} else {
				$input = $request->except(['_token', 'image']);
				if ($request->hasFile('image')) {
					$file = $request->file('image');
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
		$id = (int) $id;
		$thisdata = DB::table('testimonial')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->only(['name', 'description', 'type', 'status']);
			if ($request->hasFile('image')) {
				$file = $request->file('image');
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
		$id = (int) $id;
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
			if ($request->hasFile('image')) {
				$files = $request->file('image');
				foreach ($files as $file) {
					// Upload each file individually to get single filenames
					$uploadedName = Helpers::fileUpload([$file], 'uploads/slider', 'sunshine-slider');
					
					$input = [
						'image' => $uploadedName,
						'name' => $request->input('name', ''),
						'description' => $request->input('description', ''),
						'status' => 1
					];
					DB::table('slider')->insert($input);
				}
				Session::flash('message', 'Successfully Added ' . count($files) . ' Slider(s)!');
			}
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
				$file = $request->file('image');
				// Helper expects array
				$input['image'] = Helpers::fileUpload([$file], 'uploads/slider', 'sunshine-slider');

				// Optional: Delete old image if it exists
				if ($thisdata && !empty($thisdata->image)) {
					$oldPath = public_path('uploads/slider/' . $thisdata->image);
					if (file_exists($oldPath)) {
						@unlink($oldPath);
					}
				}
			}

			// Maintain name/desc or set to empty if intentionally removed
			if (!$request->has('name')) $input['name'] = $thisdata->name ?? '';
			if (!$request->has('description')) $input['description'] = $thisdata->description ?? '';

			DB::table('slider')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Slider!');
			return Redirect::back();
		}
		return view('services.editslider', compact('thisdata'));
	}

	public function deleteslider($id)
	{
		\Log::info("DELETE SLIDER REQUEST RECEIVED for ID: " . $id);
		$slider = DB::table('slider')->where('id', (int)$id)->first();
		if ($slider) {
			if (!empty($slider->image)) {
				// Handle both single and potential multi-image strings
				$images = explode('{$}', $slider->image);
				foreach ($images as $img) {
					if (!empty($img)) {
						$filePath = public_path('uploads/slider/' . $img);
						if (file_exists($filePath)) {
							@unlink($filePath);
							\Log::info("Deleted slider file: " . $filePath);
						}
					}
				}
			}
			DB::table('slider')->where('id', (int)$id)->delete();
			\Log::info("Deleted slider record from DB. ID: " . $id);
			Session::flash('message', 'Successfully deleted slider!');
		} else {
			\Log::warning("Slider record not found in DB for ID: " . $id);
			Session::flash('error', 'Slider not found!');
		}
		return Redirect::action('ServiceController@viewslider');
	}

	public function multiSlider(Request $request)
	{
		$ids = $request->input('hg_cart');
		if ($ids) {
			$idArray = explode(',', $ids);
			foreach ($idArray as $id) {
				$slider = DB::table('slider')->where('id', (int)$id)->first();
				if ($slider && !empty($slider->image)) {
					$images = explode('{$}', $slider->image);
					foreach ($images as $img) {
						if (!empty($img)) {
							$filePath = public_path('uploads/slider/' . $img);
							if (file_exists($filePath)) {
								@unlink($filePath);
							}
						}
					}
				}
				DB::table('slider')->where('id', (int)$id)->delete();
			}
			return 1;
		}
		return 0;
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

	/* Strategy Section Methods */
	public function viewstrategy()
	{
		$allstrategy = DB::table('strategy')->orderby('id','DESC')->get();
		return view('services.viewstrategy',compact('allstrategy'));
	}

	public function addstrategy(Request $request)
	{
		if ($request->isMethod('post')) {
			\Log::info("Strategy add attempt started.");
			\Log::info("Full Request Data: " . json_encode($request->all()));
			\Log::info("Full Files Data: " . json_encode($request->file()));
			\Log::info("PHP _FILES: " . json_encode($_FILES));
			
			$input = $request->except(['_token', 'image']);
			
			// Try both $request and Input facade
			$file = $request->file('image') ?: $request->file('image');
			
			if ($file) {
				\Log::info("File found for 'image'. Name: " . $file->getClientOriginalName());
				if (!$file->isValid()) {
					$error = $file->getErrorMessage();
					\Log::error("File upload invalid: " . $error);
					Session::flash('error', 'Upload failed: ' . $error . '. Please ensure the file is under 2MB.');
					return Redirect::back()->withInput();
				}

				$fileName = \Illuminate\Support\Str::slug($request->input('name', 'rb-strategy'), '-');
				$input['image'] = Helpers::imageUpload($file, 'uploads/strategy', $fileName);
				\Log::info("imageUpload result: " . ($input['image'] ?: "EMPTY"));
			} else {
				\Log::warning("No file found in request for 'image'. Checking for any file...");
				$allFiles = $request->file();
				if (!empty($allFiles)) {
					\Log::info("Found other files in request: " . json_encode(array_keys($allFiles)));
				}
				Session::flash('error', 'Please select an image to upload.');
				return Redirect::back()->withInput();
			}
			
			if (empty($input['image'])) {
				\Log::error("Strategy add failed: Image upload returned empty.");
				Session::flash('error', 'Invalid file type. Please upload a jpg, png, or webp image.');
				return Redirect::back()->withInput();
			}

			$input['status'] = 1;
			DB::table('strategy')->insert($input);
			Session::flash('message', 'Successfully Added Strategy Pillar!');
			return Redirect::action('ServiceController@viewstrategy');
		}
		return view('services.addstrategy');
	}

	public function editstrategy($id, Request $request)
	{
		$thisdata = DB::table('strategy')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			\Log::info("Strategy edit attempt for ID: " . $id);
			$input = $request->except(['_token', 'image']);
			
			if ($request->hasFile('image')) {
				$file = $request->file('image');
				
				if (!$file->isValid()) {
					$error = $file->getErrorMessage();
					\Log::error("File upload invalid: " . $error);
					Session::flash('error', 'Upload failed: ' . $error);
					return Redirect::back()->withInput();
				}

				$fileName = \Illuminate\Support\Str::slug($request->input('name', 'rb-strategy'), '-');
				$input['image'] = Helpers::imageUpload($file, 'uploads/strategy', $fileName);
				\Log::info("imageUpload result: " . ($input['image'] ?: "EMPTY"));
				
				if (empty($input['image'])) {
					Session::flash('error', 'Invalid file type. Please upload a jpg, png, or webp image.');
					return Redirect::back()->withInput();
				}

				// Cleanup old image
				if ($thisdata && !empty($thisdata->image)) {
					$oldImages = explode('{$}', $thisdata->image);
					foreach ($oldImages as $oldImg) {
						$oldPath = public_path('uploads/strategy/' . $oldImg);
						if (file_exists($oldPath)) {
							@unlink($oldPath);
						}
					}
				}
			}
			
			DB::table('strategy')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Strategy Pillar!');
			return Redirect::action('ServiceController@viewstrategy');
		}
		return view('services.editstrategy', compact('thisdata'));
	}

	public function deletestrategy($id)
	{
		DB::table('strategy')->where('id', $id)->delete();
		Session::flash('message', 'Successfully Deleted Strategy Pillar!');
		return Redirect::back();
	}

	public function statusstrategy($id, $status)
	{
		DB::table('strategy')->where('id', $id)->update(['status' => $status]);
		return Redirect::back();
	}

	/* Education Cards Methods */
	public function vieweducation()
	{
		$alleducation = DB::table('education_cards')->orderby('id','DESC')->get();
		$allgallery = DB::table('gallery')->whereIn('type', ['Donate', 'Activity'])->orderby('id','DESC')->get();
		return view('services.vieweducation',compact('alleducation', 'allgallery'));
	}

	public function addeducation(Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = $request->file('image') ?: $request->file('image');
				if ($file && $file->isValid()) {
					$fileName = \Illuminate\Support\Str::slug($request->input('name', 'edu-card'), '-');
					$input['image'] = Helpers::imageUpload($file, 'uploads/gallery', $fileName);
				}
			}
			$input['status'] = 1;
			DB::table('education_cards')->insert($input);
			Session::flash('message', 'Successfully Added Education Feature!');
			return Redirect::action('ServiceController@vieweducation');
		}
		return view('services.addeducation');
	}

	public function editeducation($id, Request $request)
	{
		$thisdata = DB::table('education_cards')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token', 'image']);
			if ($request->hasFile('image')) {
				$file = $request->file('image') ?: $request->file('image');
				if ($file && $file->isValid()) {
					$fileName = \Illuminate\Support\Str::slug($request->input('name', 'edu-card'), '-');
					$input['image'] = Helpers::imageUpload($file, 'uploads/gallery', $fileName);

					// Cleanup old image
					if ($thisdata && !empty($thisdata->image)) {
						$oldPath = public_path('uploads/gallery/' . $thisdata->image);
						if (file_exists($oldPath)) {
							@unlink($oldPath);
						}
					}
				}
			}
			DB::table('education_cards')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Education Feature!');
			return Redirect::action('ServiceController@vieweducation');
		}
		return view('services.editeducation', compact('thisdata'));
	}

	public function deleteeducation($id)
	{
		$thisdata = DB::table('education_cards')->where('id', $id)->first();
		if ($thisdata && !empty($thisdata->image)) {
			$oldPath = public_path('uploads/gallery/' . $thisdata->image);
			if (file_exists($oldPath)) {
				@unlink($oldPath);
			}
		}
		DB::table('education_cards')->where('id', $id)->delete();
		Session::flash('message', 'Successfully Deleted Education Feature!');
		return Redirect::back();
	}

	/* Skills Cards Methods */
	public function viewskills()
	{
		$allskills = DB::table('skills_cards')->orderby('id','DESC')->get();
		return view('services.viewskills',compact('allskills'));
	}

	public function addskills(Request $request)
	{
		if ($request->isMethod('post')) {
			$input = $request->except(['_token']);
			$input['status'] = 1;
			DB::table('skills_cards')->insert($input);
			Session::flash('message', 'Successfully Added Skill Pillar!');
			return Redirect::action('ServiceController@viewskills');
		}
		return view('services.addskills');
	}

	public function editskills($id, Request $request)
	{
		$thisdata = DB::table('skills_cards')->where('id', $id)->first();
		if ($request->isMethod('post')) {
			$input = $request->except(['_token']);
			DB::table('skills_cards')->where('id', $id)->update($input);
			Session::flash('message', 'Successfully Updated Skill Pillar!');
			return Redirect::action('ServiceController@viewskills');
		}
		return view('services.editskills', compact('thisdata'));
	}

	public function deleteskills($id)
	{
		DB::table('skills_cards')->where('id', $id)->delete();
		Session::flash('message', 'Successfully Deleted Skill Pillar!');
		return Redirect::back();
	}
}
