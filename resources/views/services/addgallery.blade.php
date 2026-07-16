@include('includes.admin-header');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add Gallery
      </h1>
    </section>
    <section class="content">
      <div class="row">
	    <div class="col-md-12" style="margin-bottom: 20px;">
			<a class="btn btn-default" href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewgallery'])?>" style="font-weight: 600; padding: 8px 16px; border-radius: 8px; border: 1px solid #d0d5dd; background: #fff; color: #344054; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
				<i class="fa fa-arrow-left"></i> Back to List
			</a>
		</div>
		    <div class="col-md-12">
		 <div class="box box-primary">
            <div class="widget-title"> <span class="icon"> <i class="fa fa-plus-circle"></i> </span>
            <h5>Add Gallery</h5>
          </div>
			
            <!-- /.box-header -->
            <!-- form start -->
			
			{{ Form::open(array('action' => [\App\Http\Controllers\ServiceController::class, 'addgallery'],'files' => true)) }}
			  {{ csrf_field() }}
              <div class="box-body">
                    <div class="col-md-12 create">
						<div class="col-md-8 form-group">
							<label for="SAMStudId">Gallery Type</label>
							<select name="type" id="gallery-type" class="form-control" required>
								<option value="">Select Gallery Type</option>
								<option value="Photo">General Photo</option>
								<option value="Video">Video</option>
							</select>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Title/Name*</label>
							  <input required type="text" name="name" class="form-control" placeholder="Enter title for image/video" />
							</div>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1" id="image-label">Image/Thumbnail*</label>
							  <?php echo  Form::file('image',array('name'=>'image[]','multiple')); ?>
							</div>
						</div>
						<div class="col-md-8 form-group" id="video-link-group" style="display:none;">
							<div class="form-group">
							  <label for="exampleInputEmail1">Video Embeded/Link*</label>
							 <input type="text" id="video-embed-input" name="embed" class="form-control" placeholder="Paste iframe or video link here" />
							</div>
						</div>
						<div class="col-md-12 text-left" style="padding-right:15px;margin-bottom:20px; display: flex; gap: 12px; align-items: center;">
							<input type="submit" class="btn btn-sqr" value="Submit" title="Submit" style="background: #E31E24; color: #fff; padding: 10px 24px; border: none; border-radius: 8px; font-weight: 600;" />
							<a href="<?php echo action([\App\Http\Controllers\ServiceController::class, 'viewgallery'])?>" class="btn btn-default" style="padding: 10px 24px; border-radius: 8px; font-weight: 600; border: 1px solid #d0d5dd; background: #fff; color: #344054; text-decoration: none;">Cancel</a>
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
    const typeSelect = document.getElementById('gallery-type');
    const videoGroup = document.getElementById('video-link-group');
    const videoInput = document.getElementById('video-embed-input');
    const imageLabel = document.getElementById('image-label');

    function toggleFields() {
        if (typeSelect.value === 'Video') {
            videoGroup.style.display = 'block';
            videoInput.setAttribute('required', 'required');
            imageLabel.innerText = 'Video Thumbnail*';
        } else {
            videoGroup.style.display = 'none';
            videoInput.removeAttribute('required');
            imageLabel.innerText = 'Image*';
        }
    }

    typeSelect.addEventListener('change', toggleFields);
});
</script>



@include('includes.admin-sidebar');
@include('includes.admin-footer');