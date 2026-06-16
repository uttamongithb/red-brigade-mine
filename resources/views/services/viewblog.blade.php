@include('includes.admin-header');
@include('includes.admin-sidebar');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Blog
      </h1>
    </section>
    <section class="content">
      <div class="row">
	<div class="col-xs-12">
        <div class="box" style="background:#fff">
            <div class="box-header">
				<div class="box-tools pull-left col-md-12 col-sm-12" style="padding:0px;">
					<div class="col-md-12 col-sm-12 col-xs-12">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
						<div class="col-md-6 col-sm-6 col-xs-6" style="padding:0px;">
							<a class="btn btn-app pull-left yellowback" href="<?php echo action('ServiceController@viewblog')?>" style="background:rgb(255,152,0);">
								<i class="fa fa-barcode"></i> Blog List
							</a>
							<a class="btn btn-app pull-left greenback" href="<?php echo action('ServiceController@addblog')?>">
								<i class="fa fa-plus-circle"></i> Add New Blog
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
                  <th>Title</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Description</th>
              
                  <th>Action</th>
                </tr>
				</thead>
				<tbody>
				
				<?php
					if(isset($allblog)){
						if(!empty($allblog)){
							$i=0;
							foreach($allblog as $tt){ $i++;
				?>
                <tr>
				  <td><?php echo $i?></td>
				  <td><?php echo ucwords($tt->name);?></td>
				  <td><img style="width:75px;height:75px;" class="img-responsive" src="<?php echo URL::asset('uploads/Blog/'.$tt->image)?>"/></td>
				  <td><?php echo $tt->date;?></td>
				  <td><?php echo ucwords($tt->description);?></td>
				    <?php $idget = $tt->id; ?>
					  <td style="width:200px;">
							<a href="<?php  echo action('ServiceController@editblog',$idget)?>" title="Edit" class="actionbtn btn-info">
								<i class="fa fa-edit"></i>
							</a>
							<a href="<?php  echo action('ServiceController@deleteblog',$idget)?>" title="Edit" class="actionbtn btn-danger" onclick="return confirm('are you sure this blog delete')">
								D
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
               url:'<?php echo Config::get('constants.PROJECT_URL');?>admin/multiBlog',
			   
               data:datavar,
			 	success:function(data){
					if(data==1){
			 			window.location.reload();
			 		}
               		
               }
            });
		}
		else{
			toastr.warning('Please Select Blog to delete');
		}
		
		
	}
	</script>
@include('includes.admin-footer');