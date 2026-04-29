<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
</head>
<body style="margin:0px;font-family: 'Open Sans', sans-serif;">
	<div style="width:550px;margin:auto;">
		<div style="background:url(<?php echo URL::asset('images/emails/activate-bg.jpg')?>);background-size:cover;padding:5%;">
		<div style="background:rgba(255,255,255,0.9);text-align:center;padding: 1% 2% 4%;">
			<?php echo Htmlhelpers::emailheader();?>
			<div style="width:100%;display:inline-block;border-top: 1px solid #ddd;">
				<p style="margin: 10px;font-size:30px;color:#2995E2;font-weight:700;font-size:25px">Account Activation</p>
				<p style="margin: 10px;font-size:20px;color:#333;font-weight:600;">Dear <?php echo ucwords($name)?></p>
				<p style="margin: 10px;font-size:14px;color:#333;font-weight:500;">Your account is created.</p> 
				<p style="margin: 10px;font-size:14px;color:#333;font-weight:500;"> Please click on Verify Account to complete your registration process. </p>
				<a href="<?php echo action('RegisteruserController@approve',$token)?>" target="_blank" 
				style="font-weight:700;text-decoration:none;color:#fff;background:linear-gradient(#126DAD, #2995E2);padding:10px 20px;margin: 2% 0%;display: inline-block;">
				Verify Your Account</a>
			</div>
		</div>
	</div>
	<?php echo Htmlhelpers::emailfooter();?>
	</div>
</body>
</html>

