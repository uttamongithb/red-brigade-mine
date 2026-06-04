@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update Gallery
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="active">Update Gallery</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action('ServiceController@viewgallery')?>">
				<i class="fa fa-barcode"></i> Gallery List
		  </a>
		  </div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Update Gallery</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
					<?php $getid = base64_encode(serialize($thisdata->id)); ?>
			{{ Form::open(array('action' => array('ServiceController@editgallery',$getid),'files' => true)) }}
			  {{ csrf_field() }}
              <div class="box-body">
					<?php echo Helpers::errormessage($errors);?>
					<?php echo Helpers::flashMessage();?>
                    <div class="col-md-12 create">
		
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Gallery Type</label>
							<select name="type"  class="form-control" >
								<option value="">Select Gallery Type</option>
								<option value="Activity" <?php if($thisdata->type=='Activity') { echo "selected"; } ?>>Activity</option>
								<option value="Campains" <?php if($thisdata->type=='Campains') { echo "selected"; } ?>>Campains</option>
								<option value="News" <?php if($thisdata->type=='News') { echo "selected"; } ?>>News</option>
							</select>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Image</label>
							  <?php echo  Form::file('image',array('name'=>'image[]','multiple')); ?>
							</div>
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