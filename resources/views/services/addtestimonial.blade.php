@include('includes.admin-header');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Our Team
      </h1>
    </section>
    <section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action('ServiceController@viewtestimonial')?>">
				<i class="fa fa-barcode"></i> Team List
		  </a>
		  </div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Add Team</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
			{{ Form::open(array('action' => 'ServiceController@addtestimonial','files' => true)) }}
			  {{ csrf_field() }}
              <div class="box-body">
                    <div class="col-md-12 create">
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Team Name</label>
							<input required type="text" name="name" class="form-control"  />
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Image</label>
							  <?php echo  Form::file('image',array('required','name'=>'image[]','multiple','required')); ?>
							</div>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group" style="margin-top:20px;">
							  <label for="exampleInputEmail1">Description*</label>
							  <textarea class="form-control ckeditor" name="description" required></textarea>
							</div>
						</div>
						<div class="col-md-12 text-left" style="padding-right:15px;margin-bottom:20px;">
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