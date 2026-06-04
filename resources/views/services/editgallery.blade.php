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
							<select name="type" id="gallery-type" class="form-control" >
								<option value="">Select Gallery Type</option>
								<option value="Photo" <?php if($thisdata->type=='Photo') { echo "selected"; } ?>>Photo</option>
								<option value="Video" <?php if($thisdata->type=='Video') { echo "selected"; } ?>>Video</option>
							</select>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1">Title/Name*</label>
							  <input required type="text" name="name" class="form-control" value="<?php echo $thisdata->name; ?>" placeholder="Enter title for image/video" />
							</div>
						</div>
						<div class="col-md-8 form-group">
							<div class="form-group">
							  <label for="exampleInputEmail1" id="image-label">Image</label>
							  <?php echo  Form::file('image',array('name'=>'image[]','multiple')); ?>
							</div>
						</div>
						<div class="col-md-8 form-group" id="video-link-group" style="display:none;">
							<div class="form-group">
							  <label for="exampleInputEmail1">Video Embeded/Link*</label>
							 <input type="text" id="video-embed-input" name="embed" class="form-control" value="<?php echo $thisdata->embed; ?>" placeholder="Paste iframe or video link here" />
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
    const typeSelect = document.getElementById('gallery-type');
    const videoGroup = document.getElementById('video-link-group');
    const videoInput = document.getElementById('video-embed-input');
    const imageLabel = document.getElementById('image-label');

    function toggleFields() {
        if (typeSelect.value === 'Video') {
            videoGroup.style.display = 'block';
            videoInput.setAttribute('required', 'required');
            imageLabel.innerText = 'Video Thumbnail';
        } else {
            videoGroup.style.display = 'none';
            videoInput.removeAttribute('required');
            imageLabel.innerText = 'Image';
        }
    }

    typeSelect.addEventListener('change', toggleFields);
    toggleFields(); // Initial call to set correct state
});
</script>



@include('includes.admin-sidebar');
@include('includes.admin-footer');