@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Edit Popups
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Popups</a></li>
        <li class="active"> Edit Popups</li>
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
            <h5>Edit Popups</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			<?php
				$getid = base64_encode(serialize($categories->id));
			?>
			{{ Form::model($categories, array('action' => array('PopupsController@edit', $getid), 'method' => 'POST','files'=>true)) }}
			{{ csrf_field() }}
              <div class="box-body">
				<?php echo Helpers::errormessage($errors);?>
				<?php echo Helpers::flashMessage();?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" value="<?php echo $categories->title;?>" class="form-control" placeholder="Enter title here">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Url*</label>
                  <input type="text" name="url" required="" value="<?php echo $categories->url;?> class="form-control" placeholder="Enter Site Url">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Add Image</label>
                  <?php echo  Form::file('image',array('name'=>'image[]')); ?>
                </div>
				<?php if($categories->image!=""){
					  ?>
					  <img src="<?php echo URL::asset('uploads/popup/'.$categories->image)?>" style="width:150px;margin:auto;">
					  <?php
				  }?>
              </div>
              <!-- /.box-body -->
			<div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
		</div>
	  </div>
</section>
</div>
	
@include('includes.admin-sidebar');
@include('includes.admin-footer');