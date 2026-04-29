@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Popups 
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Popups</a></li>
        <li class="active">Add Popups</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action('PopupsController@index')?>">
				<i class="fa fa-barcode"></i> Popups List
		  </a>
		  </div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Add Popups</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
			{{ Form::open(array('action' => 'PopupsController@add','files' => true)) }}
           
			{{ csrf_field() }}
              <div class="box-body">
				<?php echo Helpers::errormessage($errors);?>
				<?php echo Helpers::flashMessage();?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Popup Title*</label>
                  <input type="text" name="title" required="" class="form-control" placeholder="Enter title here">
                </div> 
				  <div class="form-group">
                  <label for="exampleInputEmail1">Url*</label>
                  <input type="text" name="url" required="" class="form-control" placeholder="Enter Site Url">
                </div> 
				<div class="form-group">
                  <label for="exampleInputEmail1">Add Images*</label>
                  <?php echo  Form::file('image',array('required','name'=>'image[]','multiple','required')); ?>
                </div>
              </div>
              <!-- /.box-body -->
			<div class="box-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
		</div>
	  </div>
</section>
</div>
    
<script>
function check(){
	var getvideo = $("#enterlink").val();
	var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
	if(getvideo!=""){
		if(!getvideo.match(regExp)){
			alert('enter correct youtube url');
			return false;
		}
		var result = getvideo.indexOf("watch?v=") > -1;
		if (result==true){
			var pinvideo = getvideo.replace("watch?v=", "embed/");
			$("#enterlink").val(pinvideo);
		}
	}
	else{
		
	}
	
}
</script>
@include('includes.admin-sidebar');
@include('includes.admin-footer');

