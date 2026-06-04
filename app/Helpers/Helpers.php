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
//api code =        VVLcCvhPTEeKU60jght0ew //
		$apikey = "VVLcCvhPTEeKU60jght0ew";
		$apisender = "REDBRG";
		$msg =$msg;
		$num = $mobile;    // MULTIPLE NUMBER VARIABLE PUT HERE...!                
		$ms = rawurlencode($msg);   //This for encode your message content                        
		 
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
			$content='<div class="alert '.$class.'">'.$message.'</div>';
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
		$url="http://sms.imgglobalinfotech.com/api/send_http.php?authkey=706b7ffed8ac4d47b4bbd9b0306735e2&mobiles=".$mobile."&message=".$txtmsg."&sender=MIMESY&route=B";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_exec($ch);
		curl_close($ch);
	}
	public static function imageExtension($file){
		$filename = $file->getClientOriginalName();
		$extension = $file->getClientOriginalExtension();
		$ext = array('jpg','JPG','jpeg','gif','png');
		if(!in_array($extension, $ext)){
			return false;
		}
		return true;
	}
	public static function imageUpload($file,$destinationPath,$fileName){
		$array=array();
		foreach($file as $fileimage){
				$filename = $fileimage->getClientOriginalName();
					$extension = $fileimage->getClientOriginalExtension();
					$ext = array('jpg','JPG','jpeg', 'gif', 'png');
					$newfilename = $fileName.'.'.$extension;
					if(file_exists($destinationPath.'/'.$newfilename)){
						$info=pathinfo($newfilename);
						$imageNamee=$info['filename'].'-'.rand(100,999);
						$newfilename=$imageNamee.".".$info['extension'];
					}
					$array[]=$newfilename;
					$upload_success = $fileimage->move($destinationPath, $newfilename);
					$resi = $destinationPath .'/'. $newfilename;
					// $resizeimage=Helpers::resize_image($resi);
					// $resizeimage=Helpers::compress_image($resi,80);
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