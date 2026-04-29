<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
	  <?php
	  $adminname="";
		if(Auth::check())
		{
			$adminname =  Auth::user()->name;
		}
	  ?>
        <div class="pull-left image" style="height:20px">
         </div>
        <div class="pull-left info">
          <p><i class="fa fa-user"></i> <?php echo ucwords($adminname)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard" style="color:#800000;"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo action('DashboardController@index')?>"><i class="fa fa-dashboard"></i> View Dashboard</a></li>
           <li><a href="<?php echo URL('main-admin/logout')?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
		  
        </li> 

		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@viewslider')?>"><i class="fa fa-cubes"></i> View Slider</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span>Our Team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@viewtestimonial')?>"><i class="fa fa-cubes"></i> View Team</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span>Research & Publications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@viewgallery')?>"><i class="fa fa-cubes"></i> ViewResearch & Publications</a></li>
          </ul>
        </li> 
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span> Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@viewnews')?>"><i class="fa fa-cubes"></i> View  Events</a></li>
          </ul>
        </li> 
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@viewblog')?>"><i class="fa fa-cubes"></i> View Blog</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cubes" style="color:#800000;"></i> <span>Contacts Listing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-double-left pull-right faffff"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="<?php echo action('ServiceController@enquiry')?>"><i class="fa fa-cubes"></i> View Enquiry</a></li>
          </ul>
        </li> 
      </ul>
    </section>
  </aside>
