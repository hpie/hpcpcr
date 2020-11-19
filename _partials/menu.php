      <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left pl-0">
              <a href="index.php" class=" pr-3 pl-0">Home</a>
			  <a href="#" class=" pr-3"><img height=20px src="images/himachal-portal.jpg"></a>
			  <a href="#" class=" pr-3"><img height=20px src="images/india-portal.jpg"></a>
              <!--<a href="#" class="p-3">Events</a>
              <a href="#" class="p-3">Become A Volunteer</a>-->
            </div>
            <div class="col-md-6 text-md-right">
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
            </div>
          </div>
        </div>
      </div>
      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">
            

            <div class="site-logo">
              <a href="index.php" class="text-white"><img height=50px width=50px src="images/hpcpcr-logo.png"></a>
            </div>

			<?php
				$activePage = basename($_SERVER['PHP_SELF']);
				$homelnk = 'class="active"';
				$aboutlnk  = '';
				$functionslnk  = '';
				$powerslnk  = '';
				$actslnk  = '';
				$rtelnk  = '';
				$activitylnk = '';
				$gallerylnk = '';
				$stafflnk = '';
				$contactlnk = '';
				if($activePage == "index.php")
				{
					$homelnk = 'class="active"';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "about.php")
				{
					$homelnk = '';
					$aboutlnk  = 'class="active"';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "functions.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = 'class="active"';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "powers.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = 'class="active"';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "acts.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = 'class="active"';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "rte.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = 'class="active"';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage == "activity.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = 'class="active"';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage ==  "gallery.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = 'class="active"';
					$stafflnk = '';
					$contactlnk = '';
				}else if($activePage ==  "staff.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = 'class="active"';
					$contactlnk = '';
				}else if($activePage ==  "contact.php")
				{
					$homelnk = '';
					$aboutlnk  = '';
					$functionslnk  = '';
					$powerslnk  = '';
					$actslnk  = '';
					$rtelnk  = '';
					$activitylnk = '';
					$gallerylnk = '';
					$stafflnk = '';
					$contactlnk = 'class="active"';
				}
		
			?>
            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li <?php echo $homelnk ?> id="homeli"><a id="homelnk" href="index.php" class="nav-link">Home</a></li>
                <li <?php echo $aboutlnk ?> id="aboutli"><a id="aboutlnk" href="about.php" class="nav-link">About Us</a></li>
				<li <?php echo $functionslnk ?> id="functionsli"><a id="functionslnk" href="functions.php" class="nav-link">Functions</a></li>
				<li <?php echo $powerslnk ?> id="powersli"><a id="powerslnk" href="powers.php" class="nav-link">Powers</a></li>
				<li <?php echo $actslnk ?> id="actsli"><a id="actslnk" href="acts.php" class="nav-link">Acts & Rules</a></li>
				<li <?php echo $rtelnk ?> id="rteli"><a id="rtelnk" href="rte.php" class="nav-link">RTI</a></li>
                <li <?php echo $activitylnk ?> id="activityli"><a id="activitylnk" href="activity.php" class="nav-link">Activities</a></li>
				<li <?php echo $stafflnk ?> id="staffli"><a id="stafflnk" href="staff.php" class="nav-link">Staff</a></li>
                <li <?php echo $gallerylnk ?> id="galleryli"><a id="gallerylnk" href="gallery.php" class="nav-link">Gallery</a></li>
                <li <?php echo $contactlnk ?> id="contactli"><a id="contactlnk" href="contact.php" class="nav-link">Contact Us</a></li>
              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>

            

          </div>
        </div>

      </header>