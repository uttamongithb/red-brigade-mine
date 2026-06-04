@include('includes.admin-header');
@include('includes.admin-sidebar');
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        View All Enquiry
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
				</div>
			</div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table class="table table-bordered" id="example" border="1">
                <thead>
				<tr>
                  <th>S.No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>State</th>
                  <th>District</th>
                  <th>Query</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
				</thead>
				<tbody>
				
				<?php 
					if(isset($allquery)){
						if(!empty($allquery)){
							$i=0;
							foreach($allquery as $tt){ $i++;

				?>
                <tr>
				  <td><?php echo $i?></td>
				  <td><?php echo ucwords($tt->name);?></td>
				  <td><?php echo $tt->email; ?></td>
				  <td><?php echo $tt->mobile; ?></td>
				  <td><?php echo $tt->state; ?></td>
				  <td><?php echo $tt->district; ?></td>
				  <td><?php echo $tt->msg; ?></td>
				  <td><?php echo $tt->created_at;?></td>
				    <?php $idget = $tt->id; ?>
					  <td style="width:200px;">
							<a href="<?php echo action('ServiceController@deleteEnquiry',$idget)?>" title="Delete" class="actionbtn btn-danger">
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

@include('includes.admin-footer');