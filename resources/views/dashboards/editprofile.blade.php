
@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Edit profile
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="active">Edit profile</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
	   
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Your Profile</h3>
            </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" action="<?php echo action([\App\Http\Controllers\DashboardController::class, 'updateprofile'])?>" method="post">
			{{ csrf_field() }}
			<?php
			if(Auth::check()){
				$username = 	Auth::user()->name;
				$contactnumber = 	Auth::user()->number;
				$address = 	Auth::user()->address;
				$email = 	Auth::user()->email;
			}
			?>
              <div class="box-body">
				<?php echo Helpers::errormessage($errors);?>
				<?php echo Helpers::flashMessage();?>
				<input name="id" type="hidden" value="<?php echo Auth::user()->id?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $username;?>" placeholder="Enter Your name">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Contact Number</label>
                  <input type="text" name="number" class="form-control" value="<?php echo $contactnumber;?>" placeholder="Enter Your contact number here(Show in website)">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Your address</label>
                  <input type="text" name="address" class="form-control" value="<?php echo $address;?>" placeholder="Enter Your address here(Show in website)">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Email Address</label>
                  <input type="text" name="name" class="form-control" readonly="" value="<?php echo $email;?>" placeholder="Enter Your name">
                  <p> Note:- You cannot change your email address </p>
                </div>
                <fieldset>
                	Change password
                	<p> Note : - Leave empty if you dont want to change your password </p>
                	 <div class="form-group">
                  <input type="password" name="password" class="form-control"  value="" placeholder="Enter Your password here">
                 </div>
                </fieldset>
              </div>
              <!-- /.box-body -->
			<div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
		</div>
	  </div>
</section>
</div>
	
@include('includes.admin-sidebar');
@include('includes.admin-footer');