<?php
namespace App\Helpers;
Use Config;
Use Redirect;
Use Session;
Use Input;
Use HTML;
Use URL;
Use DB;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\RegisteruserController;
use App\Http\Controllers\FeedController;
class Helpers
{
	public static function mail_content_section(){
		$headers = "MIME-Version: 1.0" . "\r\n";
					$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers.= "From:info@redbrigadelucknow.org" . "\r\n".
							"Reply-To:info@redbrigadelucknow.org" . "\r\n";
							return $headers;
	}
	public static function mail_footer_section(){
		$content='<div style="background:rgb(227,30,36);padding:10px 0px;width:100%;float:left">
<div style="width:100%">
<div style="width:100%;float:left">
<p style="margin:7px 0px;color:#fff;padding-right:15px;font-size:12px;text-align:center;">
Fearless Life Of Women - Red Brigade Lucknow </p><div class="yj6qo"></div><div class="adL">

</div></div><div class="adL">

</div></div><div class="adL">
</div></div><div class="adL">
</div></div></div>';
	  return $content;
	}
	public static function mail_header_section(){
		$content='<div style="width:100%;padding:0px;"><div class="adM">
</div><div style="width:100%;float:left;background:rgb(227,30,36)">';
$variable=URL::asset('uploads/img/logo.png');
$content.="<a href='".URL::to('/')."'><div style='background:url(".$variable.");background-size:contain;background-repeat:no-repeat;height:170px;width:100%;float:left'>";
$content.='<div class="adM">
</div><div style="padding-top:50px;margin-left:20%;width:66.66666667%;float:left"><div class="adM">
</div><div style="margin:auto;float:none;width:58.33333333%"><div class="adM">
</div><a href="'.URL::to('/').'" style="font-size:32px;color:#fff;font-weight:700;letter-spacing:-1px;text-align:center"><span class="il">Red Brigade Lucknow</span></a>
</div>

</div>
</div></a>';
	  return $content;
	}
	public static function mail_main_message($message){
		$content=' <div style="background:#fff;padding:0px 15px 30px;margin-bottom:50px;margin:2%;width: 92%;float:left;">
<img src="'.URL::asset('uploads/img/logo.png').'" style="left:-25px;width: 22%;position: relative;float:left;">
<a href="'.URL::to('/').'" style="background:rgb(227,30,36);color:white;padding:10px;border-radius:4px;float:right;margin-top:25px;">Go to <span class="il">Red Brigade Lucknow</span></a>
<div style="width: 95%;
float: left;
border: 1px solid #ddd;
padding: 10px;background:rgb(246,246,246);">
<table style="border-spacing:0" width="100%">
            <tbody>
              <tr>
                <td style="padding:15px 15px 0px 15px" align="center">
                  <table style="border-spacing:0" width="100%">
                    <tbody><tr>
                      <td style="padding:0">
                       '.$message.'</td>
					</tr>
                  </tbody></table>
                </td>
              </tr>
              
				  <tr>
				<td style="padding:15px 20px 20px 20px;width:100%">
                  <div style="font-family:Georgia,Arial,Helvetica;font-size:15px;color:#333;font-weight:normal;line-height:1.6;font-style:italic;width:100%">Warm regards,<br>
				Red Brigade Lucknow</div>
                </td>
              </tr>
              <tr>
                
              </tr>
            </tbody>
          </table>
</div>

</div>';
	  return $content;
	}
	
	
    public function sendmessage($mobile,$msg)
    {
		$apikey = env('SMS_API_KEY', '');
		$apisender = env('SMS_SENDER_ID', 'REDBRG');
		$msg =$msg;
		$num = $mobile;
		$ms = rawurlencode($msg);
		 
		$url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$apikey.'&senderid='.$apisender.'&channel=2&DCS=0&flashsms=0&number='.$num.'&text='.$ms.'&route=1';
		$ch=curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,"");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
		$data = curl_exec($ch);

    }


	public static function projectName()
    {
		 return 'RED BRIGADE LUCKNOW';
    } 
	public static function getmainmail()
    {
		 return 'info@redbrigadelucknow.org';
    } 
    public static function getUserNameShow($name,$email){
		if($name!=""){
			return ucwords($name);
		}else{
			return $email;
		}
    }
	public static function controllerName(){
		$routeArray = app('request')->route()->getAction();
		$controllerAction = class_basename($routeArray['controller']);
		list($controller, $action) = explode('@', $controllerAction);
		return $controller;
	}
	public static function actionName(){
		$routeArray = app('request')->route()->getAction();
		$controllerAction = class_basename($routeArray['controller']);
		list($controller, $action) = explode('@', $controllerAction);
		return $action;
	}
	public static function errormessage($errors){
		$content="";
		if($errors->any()){
			$content= implode('', $errors->all('<div class="error-message">:message</div>'));
		}
		return $content;
	}
	public static function getSessionMessage(){
		$content="";
		if (Session::has('message')){
			$content.='<div class="alert alert-info">'.Session::get('message').'</div>';
		}
		return $content;
	}
	public static function flashMessage(){
		if (Session::has('message')){
			$class="";
			$class = Session::get('alert-class');
			$message = Session::get('message');
			$content='<div class="alert '.htmlspecialchars($class, ENT_QUOTES, 'UTF-8').'">'.htmlspecialchars($message, ENT_QUOTES, 'UTF-8').'</div>';
			return $content;
		}
		else{
			$content="";
			return $content;
		}
	}
	public static function sendTextSMS($txtmsg,$mobile){
		$mobile=str_replace('$$',',',$mobile);
		$txtmsg=rawurlencode($txtmsg);
		$smsApiKey = env('SMS_API_KEY_2', '');
		$url="http://sms.imgglobalinfotech.com/api/send_http.php?authkey=".$smsApiKey."&mobiles=".$mobile."&message=".$txtmsg."&sender=MIMESY&route=B";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
		curl_close($ch);
	}

	/**
	 * Allowed MIME types for image uploads.
	 */
	private static $allowedMimeTypes = [
		'image/jpeg' => 'jpg',
		'image/png' => 'png',
		'image/gif' => 'gif',
		'image/webp' => 'webp',
	];

	/**
	 * Validate file is a genuine image by checking MIME type via finfo (not extension).
	 */
	public static function imageExtension($file){
		// Primary check: MIME type from file content (not user-supplied extension)
		$mimeType = $file->getMimeType();
		if (!array_key_exists($mimeType, self::$allowedMimeTypes)) {
			\Log::warning("File rejected by MIME check: " . $file->getClientOriginalName() . " (MIME: " . $mimeType . ")");
			return false;
		}

		// Secondary check: extension whitelist
		$extension = strtolower($file->getClientOriginalExtension());
		$ext = array('jpg','jpeg','gif','png', 'webp', 'jfif');
		$isValid = in_array($extension, $ext);
		if (!$isValid) {
			\Log::warning("File rejected by extension check: " . $file->getClientOriginalName() . ": " . $extension);
		}
		return $isValid;
	}

	/**
	 * Get safe extension based on actual MIME type.
	 */
	public static function getSafeExtension($file){
		$mimeType = $file->getMimeType();
		if (array_key_exists($mimeType, self::$allowedMimeTypes)) {
			return self::$allowedMimeTypes[$mimeType];
		}
		return null;
	}

	public static function videoExtension($file){
		$extension = strtolower($file->getClientOriginalExtension());
		$ext = array('mp4','webm','ogg');
		return in_array($extension, $ext);
	}

	/**
	 * Sanitize filename to prevent path traversal and special characters.
	 */
	public static function sanitizeFilename($name) {
		// Remove path separators and null bytes
		$name = str_replace(['/', '\\', "\0", '..'], '', $name);
		// Only allow alphanumeric, hyphens, underscores
		$name = preg_replace('/[^a-zA-Z0-9_-]/', '', $name);
		// Ensure not empty
		if (empty($name)) {
			$name = 'upload';
		}
		return substr($name, 0, 100); // Limit length
	}

	public static function fileUpload($file,$destinationPath,$fileName){
		$array=array();
		$files = is_array($file) ? $file : [$file];
		foreach($files as $f){
				if ($f === null) continue;
				\Log::info("Uploading file: " . $f->getClientOriginalName());

				// Use safe extension from MIME type when possible
				$safeExt = self::getSafeExtension($f);
				$extension = $safeExt ?: strtolower($f->getClientOriginalExtension());

				$sanitizedName = self::sanitizeFilename($fileName);
				$newfilename = $sanitizedName.'-'.rand(100,999).'.'.$extension;
				$fullDestinationPath = public_path($destinationPath);

				$f->move($fullDestinationPath, $newfilename);
				$array[]=$newfilename;
		}
		return implode('{$}',$array);
	}

	public static function imageUpload($file,$destinationPath,$fileName){
		$array=array();
		$files = is_array($file) ? $file : [$file];
		\Log::info("imageUpload received " . count($files) . " files.");
		foreach($files as $fileimage){
				if ($fileimage === null) {
					\Log::warning("File is null in imageUpload loop.");
					continue;
				}
				if (!self::imageExtension($fileimage)){
					\Log::warning("File rejected by imageExtension: " . $fileimage->getClientOriginalName());
					continue;
				}

				// Use safe extension from MIME type, not user-supplied extension
				$safeExt = self::getSafeExtension($fileimage);
				$extension = $safeExt ?: strtolower($fileimage->getClientOriginalExtension());

				$sanitizedName = self::sanitizeFilename($fileName);
				$newfilename = $sanitizedName.'.'.$extension;
				$fullDestinationPath = public_path($destinationPath);

				if(file_exists($fullDestinationPath.'/'.$newfilename)){
					$info=pathinfo($newfilename);
					$imageNamee=self::sanitizeFilename($info['filename']).'-'.rand(100,999);
					$newfilename=$imageNamee.".".$info['extension'];
				}
				$array[]=$newfilename;
				\Log::info("Moving file to: " . $fullDestinationPath . '/' . $newfilename);
				$upload_success = $fileimage->move($fullDestinationPath, $newfilename);
			 }
			  $imageNames = implode('{$}',$array);
			  return $imageNames;
	}
	public static function compress_image($destination_url, $quality) {
		$sizeee = filesize($destination_url);
		if($sizeee>648576){
			$info = getimagesize($destination_url);
			if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($destination_url);
			elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($destination_url);
			elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($destination_url);
			imagejpeg($image, $destination_url, $quality);
		}
		return $destination_url;
	}
	public static function resize_image($destination_url){
		$info = getimagesize($destination_url);
		if($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg')
		{
			$src = imagecreatefromjpeg($destination_url);
		}
		else if($info['mime'] == 'image/png')
		{
			$src = imagecreatefrompng($destination_url);
		}
		else
		{
			$src = imagecreatefromgif($destination_url);
		}
		list($width,$height)=getimagesize($destination_url);
		if($width>850){
			$newwidth=850;
			$newheight=($height/$width)*$newwidth;
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			imagejpeg($tmp,$destination_url,80);
			imagedestroy($src);
			imagedestroy($tmp);
		}
		return $destination_url;
	}
	public static function dateformatforposting($date){
		$content="";
		date_default_timezone_set('Asia/Kolkata');
		$cpasttime=date('d-m-Y H:i:s', strtotime($date));
				$time_ago = strtotime($cpasttime);
				$time = date('d-m-Y H:i:s');
				$cur_time 	= strtotime($time);
				$time_elapsed 	= $cur_time - $time_ago;
				$seconds 	= $time_elapsed ;
				$minutes 	= round($time_elapsed / 60 );
				$hours 		= round($time_elapsed / 3600);
				$days 		= round($time_elapsed / 86400 );
				$weeks 		= round($time_elapsed / 604800);
				$months 	= round($time_elapsed / 2600640 );
				$years 		= round($time_elapsed / 31207680 );
			// Seconds
			if($seconds<0){
				$content.= "";
			}
			else if($seconds <= 60){
				$content.= "  $seconds seconds ago";
			}
			//Minutes
			else if($minutes <=60){
				if($minutes==1){
					$content.= " one minute ago";
				}
				else{
					$content.= "  $minutes minutes ago";
				}
			}
			//Hours
			else if($hours <=24){
				if($hours==1){
					$content.= "  an hour ago";
				}else{
					$content.= "  $hours hours ago";
				}
			}
			//Days
			else if($days <= 7){
				if($days==1){
					$content.=" yesterday at ".date('h:i A',strtotime($date));
				}else{
					$content.= "  $days days ago ( ".date('M d, Y',strtotime($date)). ' at '.date('h:i A',strtotime($date)). ")";
				}
			}
			else{
				$content.= date('M d, Y',strtotime($date));
			}
			return $content;
	}

	
}


?>