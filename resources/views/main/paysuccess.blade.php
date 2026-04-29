			@include('includes.header')
			<style>
			.pagename {
	width: 120px;
height: 120px;
position: absolute;
left: 225px;
border-radius: 50%;
background: #ffe30b;
padding: 46px 24px;
color: #2f2f2f;
font-size: 26px;
box-shadow: 1px 10px 6px -6px #efd04e;
bottom: -51px;
z-index: 99999;			
			}
	.alert {
padding: 15px;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;
background: green;
color: #fff;
font-size: 28px;
text-align: center;
	}
</style>
					<?php echo Helpers::errormessage($errors);?>
					<?php echo Helpers::flashMessage();?>
		@include('includes.footer')