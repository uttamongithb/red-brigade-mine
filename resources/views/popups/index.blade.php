@include('includes.admin-header');
@include('includes.admin-sidebar');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        View All Popups
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Popups</a></li>
        <li class="active">View All Popups</li>
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
					<a class="btn btn-app pull-left blueback" onclick="muldelete()"><i class="fa fa-trash-o"></i> Multiple Delete </a>
					<a class="btn btn-app pull-left yellowback" href="<?php echo action([\App\Http\Controllers\PopupsController::class, 'index'])?>" style="background:rgb(255,152,0);">
						
						<i class="fa fa-barcode"></i> Popup List
					</a>
					<a class="btn btn-app pull-left greenback" href="<?php echo action([\App\Http\Controllers\PopupsController::class, 'add'])?>">
						<i class="fa fa-plus-circle"></i> Add New Popup
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
				<th style="width:3%;">
					<input type="checkbox" class="form-control" style="text-align: left;min-height:13px!important;height:3%" id="select_all" >
				</th>
                  <th>S.No</th>
                  <th>Title</th>
                  <th>Url</th>
                  <th>Action</th>
                </tr>
				</thead>
				<tbody>
				
				<?php
					if(isset($habits)){
						if(!empty($habits)){
							$i=0;
							foreach($habits as $tt){$i++;
				?>
                <tr>
				<td><input type="checkbox" class="form-control checkbox" style="text-align: left;min-height:13px!important;height:3%" name="checkCat" value="<?php echo ucwords($tt->id);?>"/></td>
				<td><?php echo $i;?></td>
				<td><?php echo $tt->title;?></td>

                <td><?php echo $tt->url;?></td>
				<?php $idget = $tt->id;?>
				 
				  <td>
					<a href="<?php echo action([\App\Http\Controllers\PopupsController::class, 'edit'],$idget)?>" class="actionbtn btn-info">
						<i class="fa fa-edit"></i> Edit
					</a>
					<a href="<?php echo action([\App\Http\Controllers\PopupsController::class, 'delete'],$idget)?>" class="actionbtn btn-danger">
						<i class="fa fa-trash-o"></i> Delete
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
               url:'<?php echo Config::get('constants.PROJECT_URL');?>admin/muldeltefacilities',
               data:datavar,
			 	success:function(data){
			 		if(data==1){
			 			window.location.reload();
			 		}
               		
               }
            });
		}
		else{
			alert('Please Select facilities to delete');
		}
		
		
	}
	</script>
@include('includes.admin-footer');