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
class DashboardController extends Controller {
	public function index(){
		return view('dashboards.index');
	}
	public function editprofile(){
		if(Auth::check()){
			$getid = Auth::user()->id;
		}
		return view('dashboards.editprofile');
	}
	public function updateprofile(Request $request){
		if(Auth::check()){
			$getid = Auth::user()->id;
		}
		if ($request->isMethod('post')){
			$input = Input::all();
			unset($input['_token']);
			if($input['password']!=""){
				$dataupdate['password'] = bcrypt($input['password']);
			}
			$dataupdate['name'] = $input['name'];
			$dataupdate['address'] = $input['address'];
			$dataupdate['number'] = $input['number'];
			Session::put('mim_messagetrue','Your profile updated successfully');
			DB::table('users')->where('id',$getid)->update($dataupdate);
			return redirect()->action('DashboardController@editprofile');
			
		}else{
			return redirect()->action('DashboardController@editprofile');
		}
	}
	public function allmembers(){
		$findllmemebers = DB::table('registerusers')->orderBy('id','DESC')->get();
		return view('dashboards.allmembers',compact('findllmemebers'));
	}
	public function allenquiry(){
		$findllmemebers = DB::table('request')->join('packages','packages.id','=','request.packageid')->join('registerusers','registerusers.id','=','request.userid')->select('registerusers.fname','registerusers.lname','registerusers.email','registerusers.number','packages.title','request.*')->orderBy('id','DESC')->get();
		
		return view('dashboards.allenquiry',compact('findllmemebers'));
	}
    public function topuser($id){
		$decodeid = $id;
		$status['userid'] = $decodeid;
		$topusers = DB::table('topusers')->where('userid',$decodeid)->first();
		if(!empty($topusers)){
			DB::table('topusers')->where('id',$topusers->id)->delete();
			Session::flash('message', 'This expert is removed from top experts');
			return Redirect::back();
	    }else{
			DB::table('topusers')->insert($status);
			Session::flash('message', 'This expert is added in top experts successfully.');
			return Redirect::back();
		}
	}
	public function blockuser($id){
		$decodeid = $id;
		$status['activation_status'] = 'blocked';
		DB::table('registerusers')->where('id',$decodeid)->update($status);
		Session::flash('message', 'user has been blocked successfully!');
		return Redirect::back();
	}
	public function activateuser($id){
		$decodeid = $id;
		$status['activation_status'] = 'activated';
		DB::table('registerusers')->where('id',$decodeid)->update($status);
		Session::flash('message', 'user has been activated successfully!');
		return Redirect::back();
	}
	public function expertslisting(){
		$findllmemebers = DB::table('registerusers')->where('usertype','consultant')->orderBy('id','DESC')->get();
		return view('dashboards.expertslisting',compact('findllmemebers'));
	}
	public function blockpost($id){
		$decodeid = $id;
		$status['status'] = 'blocked';
		DB::table('posts')->where('id',$decodeid)->update($status);
		Session::flash('message', 'Expertise listing has been blocked successfully!');
		return Redirect::back();
	}
	public function activatepost($id){
		$decodeid = $id;
		$status['status'] = 'active';
		DB::table('posts')->where('id',$decodeid)->update($status);
		Session::flash('message', 'Expertise listing has been activated successfully!');
		return Redirect::back();
	}
	public function deletepost($id){
		$decodeid = $id;
		$findpost = DB::table('posts')->where('id',$decodeid)->first();
		$destinationPaths = 'uploads/posts';
		if($findpost->image!=""){
			File::delete($destinationPaths.'/'.$findpost->image);
		}
		$status['status'] = 'active';
		DB::table('posts')->where('id',$decodeid)->delete();
		Session::flash('message', 'Expertise listing has been deleted successfully!');
		return Redirect::back();
	}
	public function featuredpost($id,$status){
		$decodeid = $id;
		$dstatus['featured'] = $status;
		DB::table('posts')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'Featured status of expertise listing has been changed successfully.');
		return Redirect::back();
	}
	public function popularpost($id,$status){
		$decodeid = $id;
		$dstatus['popular'] = $status;
		DB::table('posts')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'Popular status of expertise listing has been changed successfully.');
		return Redirect::back();
	}
	public function alllistings(){
		$findllmemebers = DB::table('posts')->join('categories','categories.id','=','posts.category')->join('registerusers','registerusers.id','=','posts.userid')->join('subcategories','subcategories.id','=','posts.subcategory')->select('categories.name as catname','subcategories.name as subname','registerusers.fname as userfname','registerusers.lname as userlname','posts.*')->orderBy('id','DESC')->get();
		return view('dashboards.alllistings',compact('findllmemebers'));
	}
	public function allquestions(){
		$findallquestions = DB::table('questions')->join('registerusers','registerusers.id','=','questions.userid')->select('questions.id as quid','questions.*','registerusers.*')->orderBy('questions.id','DESC')->get();
		return view('dashboards.allquestions',compact('findallquestions'));
	}
	public function blockquestion($id){
		$decodeid = $id;
		$dstatus['status'] = 'blocked';
		DB::table('questions')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'Blocked Successfully.');
		return Redirect::back();
	}
	public function activatequestion($id){
		$decodeid = $id;
		$dstatus['status'] = 'activated';
		DB::table('questions')->where('id',$decodeid)->update($dstatus);
		Session::flash('message', 'Activate Successfully.');
		return Redirect::back();
	}
	public function viewquestion($id){
		$decodeid = $id;
		$sinlgequestion = DB::table('questions')->join('registerusers','registerusers.id','=','questions.userid')->select('questions.id as quid','questions.*','registerusers.fname','registerusers.lname')->where('questions.id',$decodeid)->first();
		return view('dashboards.viewquestion',compact('sinlgequestion'));
	}
}?>