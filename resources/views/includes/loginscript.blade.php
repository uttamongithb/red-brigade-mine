<script src="<?php echo URL::asset('js/front/jquery.min.js');?>"></script>
	<script>
		$(document).ready(function(){
				$.ajaxSetup({
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
				});
			});
	</script>
<script>
// registeration//
$('#useremail').keypress(function(e){if(e.which=='13'){regsiteruser();}});
$('#userpassword').keypress(function(e){if(e.which=='13'){regsiteruser();}});
$('#fusername').keypress(function(e){if(e.which=='13'){regsiteruser();}});
$('#lusername').keypress(function(e){if(e.which=='13'){regsiteruser();}});
$('#loginemail').keypress(function(e){if(e.which=='13'){login();}});
$('#loginpassword').keypress(function(e){if(e.which=='13'){login();}});
function regsiteruser(){
	var email = $("#useremail").val();
	var fname = $("#fusername").val();
	var lname = $("#lusername").val();
	var filetrpass = /^(?=.*[0-9])(?=.*[a-zA-Z]){8,50}.*$/;
	var password = $("#userpassword").val();
	// var usertype = $('input[name=usertype]:checked').val();
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(email=="" && password=="" && lname=="" && fname==""){
		$("#register_error").show();
		$("#fusername").addClass('errorborder');
		$("#lusername").addClass('errorborder');
		$("#useremail").addClass('errorborder');
		$("#userpassword").addClass('errorborder');
		$("#register_error").html('Please fill out all the fields to signup.');
		return false;
	}
	else{
		$("#fusername").removeClass('errorborder');
		$("#lusername").removeClass('errorborder');
		$("#useremail").removeClass('errorborder');
		$("#userpassword").removeClass('errorborder');
	}
	if(fname==""){
		$("#register_error").show();
		$("#fusername").addClass('errorborder');
		$("#register_error").html('Please Enter first name.');
		return false;
	}
	if(lname==""){
		$("#register_error").show();
		$("#lusername").addClass('errorborder');
		$("#register_error").html('Please Enter last name.');
		return false;
	}
	if(email==""){
		$("#register_error").show();
		$("#useremail").addClass('errorborder');
		$("#register_error").html('Please Enter email address.');
		return false;
	}
	if(password==""){
		$("#register_error").show();
		$("#userpassword").addClass('errorborder');
		$("#register_error").html('Please Enter password.');
		return false;
	}
	if(email!="" && password!="" && lname!="" && fname!=""){
		if(!filter.test(email)) 
		{
			$("#register_error").show();
			$("#useremail").addClass('errorborder');
			$("#register_error").html('Please Enter valid email address.');
			return false;
		}
		else{
			$("#useremail").removeClass('errorborder');
		}
		if(!filetrpass.test(password)){
			$("#userpassword").addClass('errorborder');
			$("#register_error").show();
			$("#register_error").html('Password should contain minimum one number and one character');
			return false;
		}else{
			$("#userpassword").removeClass('errorborder');
		}
		$("#register_error").html('');
		$("#register_error").hide();
		$("#loadingshow").show();
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>ajax/registeruser',
		   data:'_token =<?php echo csrf_token();?>&email='+email+'&password='+password+'&fname='+fname+'&lname='+lname,
		   success:function(data){
			   $("#loadingshow").hide();
				if(data==1){
					$("#register_error").show();
					$("#useremail").addClass('errorborder');
					$("#register_error").html('This Email address is already registered with us.');
					return false;
					
				}
				else{
					window.location.href='<?php echo Config::get('constants.PROJECT_URL');?>setloginsession/'+data;
				}
		   }
		});
	}
}
</script>
<script>
//login//
function login(){
	var email = $("#loginemail").val();
	var password = $("#loginpassword").val();
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(email=="" || password==""){
		$("#login_error").show();
		$("#login_error").html('Please Fill all the fields.');
		$("#loginemail").addClass('errorborder');
		$("#loginpassword").addClass('errorborder');
		return false;
	}
	else{
		$("#loginemail").removeClass('errorborder');
		$("#loginpassword").removeClass('errorborder');
	}
	if(email!=""){
		if(!filter.test(email)) 
		{
			$("#login_error").show();
			$("#loginemail").addClass('errorborder');
			$("#login_error").html('Please Enter valid email address.');
			return false;
		}
		else{
			$("#loginemail").removeClass('errorborder');
		}
		$("#login_error").html('');
		$("#login_error").hide();
		$("#loadingshow").show();
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>ajax/loginuser',
		   data:'_token =<?php echo csrf_token();?>&email='+email+'&password='+password,
		   success:function(data){
			   $("#loadingshow").hide();
			   if(data==4){
					$("#login_error").show();
					$("#loginemail").addClass('errorborder');
					$("#loginpasswordl").addClass('errorborder');
					$("#login_error").html('Invalud email address or password');
					return false;
				}
				if(data==2){
					$("#login_error").show();
					$("#login_error").html('You have been blocked by administrator.');
					return false;
				}
				if(data==1){
					$("#loginform").hide();
					$("#SuccessConfirm").show();
				}
				else{
					window.location.href='<?php echo Config::get('constants.PROJECT_URL');?>setloginsession/'+data;
				}
		   }
		});
	}
}
function resendmail(){
	$("#loadingshow").show();
	var getid = $("#recentid").val();
		$.ajax({
		   type:'POST',
		   url:'<?php echo Config::get('constants.PROJECT_URL');?>ajax/resendactivationlink/'+getid,
		   success:function(data){
			   $("#loadingshow").hide();
				if(data==1){
					$("#loginform").hide();
					$("#SuccessConfirm").show();
				}
		   }
		});
}
</script>