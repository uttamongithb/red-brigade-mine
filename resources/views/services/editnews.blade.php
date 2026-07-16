@include('includes.admin-header');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update Our Work / Stories
      </h1>
    </section>
    <section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewnews'])?>">
				<i class="fa fa-barcode"></i> Work List
		  </a>
		  </div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Update Work</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
				<?php $getid = $thisdata->id; ?>
			{{ Form::open(array('action' => array('ServiceController@editnews',$getid),'files' => true)) }}			
			  {{ csrf_field() }}
              <div class="box-body">
                    <div class="col-md-12 create">
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Title/Name</label>
							<input  type="text" value="<?php echo $thisdata->name; ?>" name="name" class="form-control"  />
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Image</label>
							  <?php echo  Form::file('image',array('name'=>'image[]','multiple')); ?>
							</div>
						</div>
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Work Date</label>
							<input required type="text" value="<?php echo $thisdata->date; ?>" id="date" name="date" class="form-control"  />
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group" style="margin-top:20px;">
							  <label for="exampleInputEmail1">Description</label>
							  <textarea class="form-control ckeditor" name="description"><?php echo $thisdata->description; ?></textarea>
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