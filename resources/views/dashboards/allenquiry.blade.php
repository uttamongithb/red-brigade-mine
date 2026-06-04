@include('includes.admin-header')
@include('includes.admin-sidebar')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        View All Enquiries
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Enquiry</a></li>
        <li class="active">View All Enquiry</li>
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
					<?php
					 $counttotalusers = count(DB::table('registerusers')->select('id')->get());
					 $blocktotalusers = count(DB::table('registerusers')->select('id')->where('activation_status','blocked')->get());
					 $activatedtotalusers = count(DB::table('registerusers')->select('id')->where('activation_status','activated')->get());
					?>
					<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
						<div class="col-md-6 col-sm-6 col-xs-6" style="padding:0px;">
							<a class="btn btn-app pull-left greenback">
							<span class="badge bg-green"><?php echo 
								$activatedtotalusers;?></span>
							<i class="fa fa-check-circle"></i> Activated Users </a>
							<a class="btn btn-app pull-left" style="background:red;">
							<span class="badge bg-green"><?php echo 
								$blocktotalusers;?></span>
							<i class="fa fa-ban"></i> Blocked Users </a>
							<a class="btn btn-app pull-left yellowback" style="background:rgb(255,152,0);">
							<span class="badge bg-green"><?php echo 
								$counttotalusers;?></span>
							<i class="fa fa-barcode"></i> Total Members
							</a>
						</div>
					</div>
				</div>
			</div>
      <div class="box-body" style="padding:15px;">
			<div class="">
		  <table class="table table-bordered" id="example" border="1">
				<thead>
				<tr>
				   
                   <th>S.No</th>
                   <th>User Name</th>
                   <th>Package</th>
                   <th>User Email</th>
                   <th>Contact Number</th>
                   <th>Message</th>
                   <th>Requested On</th>
                </tr>
				</thead>
				<tbody>
				
				<?php
					if(isset($findllmemebers)){
						if(!empty($findllmemebers)){
							$i=0;
							foreach($findllmemebers as $member){$i++;
				?>
                <tr>
				  <td><?php echo $i?></td>
                  <td><?php echo ucwords($member->fname);?> <?php echo ucwords($member->lname);?></td>
                  <td><?php echo ucwords($member->title);?></td>
                  <td><?php echo $member->email;?></td>
                  <td><?php echo $member->number;?></td>
                  <td><?php echo $member->message;?></td>
                  <td><?php echo $member->created_at;?></td>
				  <?php $idget = $member->id;?>
				  
                 </tr>
					<?php } ?>
					<?php } ?>
					<?php } ?>
              </tbody></table>
            </div>
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
               url:'<?php echo Config::get('constants.PROJECT_URL');?>main-admin/catmul',
               data:datavar,
			 	success:function(data){
			 		if(data==1){
			 			window.location.reload();
			 		}
               		
               }
            });
		}
		else{
			alert('Please Select categories to delete');
		}
		
		
	}
	</script>
@include('includes.admin-footer');