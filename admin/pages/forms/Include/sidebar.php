
<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?> 
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?= $page == 'dashboard.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="book_an_appointment.php" class="nav-link <?= $page == 'book_an_appointment.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Book an Appointment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="careers.php" class="nav-link <?= $page == 'careers.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Carrers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contact_us.php" class="nav-link <?= $page == 'contact_us.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Contact 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="getacall.php" class="nav-link <?= $page == 'getacall.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-phone"></i>
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Get a Call 
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="blogs.php" class="nav-link <?= $page == 'blogs.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-rss"></i>
              <p>
                Blogs
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="add_new_doctor.php" class="nav-link <?= $page == 'add_new_doctor.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Add New Doctor
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="specialist_doctor.php" class="nav-link <?= $page == 'specialist_doctor.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Specialist Doctor
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          	<li class="nav-item">
            <a href="headoctor.php" class="nav-link <?= $page == 'headoctor.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                 Director
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="testimonials.php" class="nav-link <?= $page == 'testimonials.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Testimonials
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="case_study.php" class="nav-link <?= $page == 'case_study.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Case Study
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="offer.php" class="nav-link <?= $page == 'offer.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Offer
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="change_password.php" class="nav-link <?= $page == 'change_password.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-gift"></i>
              <p>
                Change Password
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link <?= $page == 'logout.php' ? 'active':'' ?>">
          <i class="fa fa-sign-out-alt fa-sign-out"></i>
				
              <p>
                logout
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>	
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
