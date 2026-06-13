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

		<li class="{{ Request::is('admin/viewtestimonial') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewtestimonial')?>">
            <i class="fa fa-users"></i> <span>Our Team</span>
          </a>
        </li>

		<li class="{{ Request::is('admin/viewnews') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewnews')?>">
            <i class="fa fa-briefcase"></i> <span>Our Work / Stories</span>
          </a>
        </li>

		<li class="{{ Request::is('admin/viewblog') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewblog')?>">
            <i class="fa fa-edit"></i> <span>Blog</span>
          </a>
        </li>

		<li class="{{ Request::is('admin/viewslider') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewslider')?>">
            <i class="fa fa-picture-o"></i> <span>Slider</span>
          </a>
        </li>

		<li class="{{ Request::is('admin/viewgallery') ? 'active' : '' }}">
          <a href="<?php echo action('ServiceController@viewgallery')?>">
            <i class="fa fa-image"></i> <span>Gallery</span>
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
