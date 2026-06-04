@include('includes.admin-header');
@include('includes.admin-sidebar');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        View All Gallery
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Gallery</a></li>
        <li class="active">View All Gallery</li>
      </ol>
    </section>
	<section class="content">
      <div class="row">
	<div class="col-xs-12">
        <div class="box" style="background:#fff">
            <div class="box-header">
				<div class="box-tools pull-left col-md-12 col-sm-12" style="padding:0px;">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php echo Helpers::errormessage($errors);?>
						<?php echo Helpers::flashMessage();?>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
						<div class="col-md-6 col-sm-6 col-xs-6" style="padding:0px;">
							<a class="btn btn-app pull-left greenback" href="<?php echo action('ServiceController@addgallery')?>">
								<i class="fa fa-plus-circle"></i> Add New Gallery
							</a>
						</div>
					</div>
				</div>
			</div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered" id="example" border="1">
                <thead>
				<tr>

                  <th>S.No</th>
                  <th>Gallery Type</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
				</thead>
				<tbody>
				
				<?php
					if(isset($allgallery)){
						if(!empty($allgallery)){
							$i=0;
							foreach($allgallery as $tt){ $i++;
				?>
                <tr>
				  <td><?php echo $i?></td>
				  <td><?php echo ucwords($tt->type);?></td>
				  <td><img style="width:75px;height:75px;" class="img-responsive" src="<?php echo URL::asset('uploads/gallery/'.$tt->image)?>"/></td>

				    <?php $idget = base64_encode(serialize($tt->id)); ?>
					 <td>
						<?php if($tt->status==0){ ?>
							  <a class="actionbtn btn-info" href="<?php  echo action('ServiceController@populargallery',[$idget,1])?>"><i class="fa fa-star-o"></i></a>
							  <?php } else{ ?>
							  <a class="actionbtn btn-info" href="<?php  echo action('ServiceController@populargallery',[$idget,0])?>">
								<i class="fa fa-star"></i>
							  </a>
						  <?php } ?>
					  </td>
					  <td style="width:200px;">
							<a href="<?php  echo action('ServiceController@editgallery',$idget)?>" title="Edit" class="actionbtn btn-info">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?php echo action('ServiceController@deletegallery',$idget)?>" title="Delete" class="actionbtn btn-danger">
								<i class="fa fa-trash-o"></i>
							</a>
					  </td>
				</tr>
					<?php } ?>
					<?php } ?>
					<?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
		</section>
</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
		$.ajaxSetup({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
		});
	});

	function muldelete() {
		var p=[];
		$.each($("input[name='checkCat']:checked"), function(){            
			p.push($(this).val());
		});
		if(p!=""){
		var datavar = '_token = <?php echo csrf_token();?>&hg_cart='+p;
		$.ajax({
               type:'POST',
               url:'<?php echo Config::get('constants.PROJECT_URL');?>admin/multiGallery',
			   
               data:datavar,
			 	success:function(data){
					if(data==1){
			 			window.location.reload();
			 		}
               		
               }
            });
		}
		else{
			alert('Please Select Gallery to delete');
		}
		
		
	}
	</script>
@include('includes.admin-footer');