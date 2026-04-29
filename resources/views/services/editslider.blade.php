@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update Slider
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
        <li class="active">Update Slider</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action('ServiceController@viewslider')?>">
				<i class="fa fa-barcode"></i> Slider List
		  </a>
		  </div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Update Slider</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
					<?php $getid = base64_encode(serialize($thisdata->id)); ?>
			{{ Form::open(array('action' => array('ServiceController@editslider',$getid),'files' => true)) }}
			  {{ csrf_field() }}
              <div class="box-body">
					<?php echo Helpers::errormessage($errors);?>
					<?php echo Helpers::flashMessage();?>
                    <div class="col-md-12 create">
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Slider Name</label>
							<input type="text" value="<?php echo $thisdata->name; ?>" name="name" class="form-control"  />
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Image</label>
							  <?php echo  Form::file('image',array('name'=>'image[]','multiple')); ?>
							</div>
						</div>
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Slider Description</label>
							<input type="text" value="<?php echo $thisdata->description; ?>" name="description" class="form-control"  />
						</div>
						<div class="col-md-12 text-left" style="pUpdateing-right:15px;margin-bottom:20px;">
							<input type="submit" class="btn btn-sqr" value="Submit" title="Submit"  />
						</div>
                    </div>
				</div>
			</form>
		</div>
	  </div>
</section>
</div>



@include('includes.admin-sidebar');
@include('includes.admin-footer');