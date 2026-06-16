<aside class="main-sidebar">
    <!-- Unified Header Row (Main Menu + Toggle) -->
    <div class="sidebar-header-row">
        <span class="sidebar-header-label">Main Menu</span>
        <div class="sidebar-toggle-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <i class="fa fa-bars"></i>
        </div>
    </div>

    <!-- Sidebar Navigation -->
    <section class="sidebar">
      <ul class="sidebar-menu">

		<li class="{{ Request::is('admin/viewslider') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewslider')?>">
            <i class="fa fa-picture-o"></i> <span>Home Hero Slider</span>
          </a>
        </li>

		<li class="{{ Request::is('admin/viewstrategy') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewstrategy')?>">
            <i class="fa fa-th-large"></i> <span>Strategy Pillars</span>
          </a>
        </li>

        <li class="treeview {{ Request::is('admin/viewnews') || Request::is('admin/addnews') || Request::is('admin/vieweducation') || Request::is('admin/addeducation') || Request::is('admin/viewskills') || Request::is('admin/addskills') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Our Work</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('admin/viewnews') && Request::get('filter') == 'previous' ? 'active' : '' }}">
              <a href="<?php echo action('ServiceController@viewnews')?>?filter=previous"><i class="fa fa-circle-o"></i> Previous Work</a>
            </li>
            <li class="{{ Request::is('admin/viewnews') && !Request::has('filter') ? 'active' : '' }}">
              <a href="<?php echo action('ServiceController@viewnews')?>"><i class="fa fa-circle-o"></i> Ongoing Work</a>
            </li>
            <li class="{{ Request::is('admin/viewnews') && Request::get('filter') == 'upcoming' ? 'active' : '' }}">
              <a href="<?php echo action('ServiceController@viewnews')?>?filter=upcoming"><i class="fa fa-circle-o"></i> Upcoming Work</a>
            </li>
            <li class="{{ Request::is('admin/vieweducation') ? 'active' : '' }}">
              <a href="<?php echo action('ServiceController@vieweducation')?>"><i class="fa fa-circle-o"></i> Education</a>
            </li>
            <li class="{{ Request::is('admin/viewskills') ? 'active' : '' }}">
              <a href="<?php echo action('ServiceController@viewskills')?>"><i class="fa fa-circle-o"></i> Skills</a>
            </li>
          </ul>
        </li>

		<li class="{{ Request::is('admin/viewtestimonial') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewtestimonial')?>">
            <i class="fa fa-users"></i> <span>Our Team</span>
          </a>
        </li>
		<li class="{{ Request::is('admin/enquiry') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@enquiry')?>">
            <i class="fa fa-envelope"></i> <span>Enquiries</span>
          </a>
        </li> 

      </ul>
    </section>
  </aside>
