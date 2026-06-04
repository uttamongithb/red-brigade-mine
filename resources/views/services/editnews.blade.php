@include('includes.admin-header');
 <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update Work
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Work</a></li>
        <li class="active">Update Work</li>
      </ol>
    </section>
<section class="content">
      <div class="row">
	    <div class="col-md-12">
			<a class="btn btn-app pull-right" href="<?php echo action('ServiceController@viewnews')?>">
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
				<?php $getid = base64_encode(serialize($thisdata->id)); ?>
			{{ Form::open(array('action' => array('ServiceController@editnews',$getid),'files' => true)) }}			
			  {{ csrf_field() }}
              <div class="box-body">
					<?php echo Helpers::errormessage($errors);?>
					<?php echo Helpers::flashMessage();?>
                    <div class="col-md-12 create">
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Work Type</label>
							<select name="type" id="work-type" class="form-control" required>
								<option value="event" <?php echo ($thisdata->type == 'event') ? 'selected' : ''; ?>>Work/Event</option>
								<option value="blog" <?php echo ($thisdata->type == 'blog') ? 'selected' : ''; ?>>Blog/Story</option>
							</select>
						</div>
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Title/Name*</label>
							<input  type="text" value="<?php echo $thisdata->name; ?>" name="name" id="work-name" class="form-control"  />
						</div>
						<div class="col-md-8 form-group" id="slug-group" style="display:<?php echo ($thisdata->type == 'blog') ? 'block' : 'none'; ?>;">
							<label for="SAMStudId">Slug (URL)*</label>
							<input type="text" name="slug" id="work-slug" value="<?php echo $thisdata->slug; ?>" class="form-control"  />
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
						<div class="col-md-8 form-group event-only" style="display:<?php echo ($thisdata->type == 'event') ? 'block' : 'none'; ?>;">
							<label for="SAMStudId">Time Interval</label>
							<input type="text" id="time_interval" name="time_interval" value="<?php echo $thisdata->time_interval; ?>" class="form-control"  />
						</div>
						<div class="col-md-8 form-group event-only" style="display:<?php echo ($thisdata->type == 'event') ? 'block' : 'none'; ?>;">
							<label for="SAMStudId">City</label>
							<input type="text" id="city" name="city"  value="<?php echo $thisdata->city; ?>"class="form-control"  />
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group" style="margin-top:20px;">
							  <label for="exampleInputEmail1">Description*</label>
							  <textarea class="form-control ckeditor" name="description" required><?php echo $thisdata->description; ?></textarea>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.getElementById('work-type');
    const eventFields = document.querySelectorAll('.event-only');
    const slugGroup = document.getElementById('slug-group');
    const slugInput = document.getElementById('work-slug');

    function toggleFields() {
        if (typeSelect.value === 'blog') {
            eventFields.forEach(el => el.style.display = 'none');
            slugGroup.style.display = 'block';
            slugInput.setAttribute('required', 'required');
        } else {
            eventFields.forEach(el => el.style.display = 'block');
            slugGroup.style.display = 'none';
            slugInput.removeAttribute('required');
        }
    }

    typeSelect.addEventListener('change', toggleFields);
});
</script>



@include('includes.admin-sidebar');
@include('includes.admin-footer');