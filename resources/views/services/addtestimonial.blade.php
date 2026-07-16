@include('includes.admin-header');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Our Team
      </h1>
    </section>
    <section class="content">
      <div class="row">
	    <div class="col-md-12" style="margin-bottom: 20px;">
			<a class="btn btn-default" href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewtestimonial'])?>" style="font-weight: 600; padding: 8px 16px; border-radius: 8px; border: 1px solid #d0d5dd; background: #fff; color: #344054; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
				<i class="fa fa-arrow-left"></i> Back to List
			</a>
		</div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Add Team</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
			{{ Form::open(array('action' => [\App\Http\Controllers\ServiceController::class, 'addtestimonial'],'files' => true)) }}
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
								<label for="status">Status</label>
								<select name="status" class="form-control" required>
									<option value="1">Active</option>
									<option value="0">Alumni</option>
								</select>
							</div>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group" style="margin-top:20px;">
							  <label for="exampleInputEmail1">Description*</label>
							  <textarea class="form-control ckeditor" name="description" required></textarea>
							</div>
						</div>
						<div class="col-md-12 text-left" style="padding-right:15px;margin-bottom:20px; display: flex; gap: 12px; align-items: center;">
							<input type="submit" class="btn btn-sqr" value="Submit" title="Submit" style="background: #E31E24; color: #fff; padding: 10px 24px; border: none; border-radius: 8px; font-weight: 600;" />
							<a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewtestimonial'])?>" class="btn btn-default" style="padding: 10px 24px; border-radius: 8px; font-weight: 600; border: 1px solid #d0d5dd; background: #fff; color: #344054; text-decoration: none;">Cancel</a>
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