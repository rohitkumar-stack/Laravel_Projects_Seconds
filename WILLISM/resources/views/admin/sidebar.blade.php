<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="/admin/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="/admin/css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="/admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="/admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="/admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="/admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="/admin/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="/admin/css/semantic.min.css" />
       <!-- font-Awesome
       <link rel="stylesheet" href="https://fonts.googleapis.com/css"> -->

       <!-- font-awesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      
   </head>
   <body class="inner_page widgets">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="{{'index.html'}}"><img class="logo_icon img-responsive" src="/admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="/admin/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li><a href="tables.html"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>HOME</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>Carousel </span></a></li>
                           <li><a href="media_gallery.html">> <span>UI/UX design</span></a></li>
                        </ul>
                     </li>
                     <li><a href="{{'aboutt'}}"><i class="fa fa-table purple_color2"></i> <span>ABOUT</span></a></li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>MYWORK</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="email.html">> <span>Our Projects</span></a></li>
                        </ul>
                     </li>
                     <li>
                     <li>
                        <a href="#blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>BLOG</span></a>
                        <ul class="collapse list-unstyled" id="blog">
                           <li><a href="email.html">> <span>See Our Blog</span></a></li>
                        </ul>
                     </li>
                     <li><a href="{{'contactus'}}"><i class="fa fa-table purple_color2"></i> <span>CONTACT US</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="/admin/images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="/admin/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               @yield('content')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="/admin/js/jquery.min.js"></script>
      <script src="/admin/js/popper.min.js"></script>
      <script src="/admin/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="/admin/js/animate.js"></script>
      <!-- select country -->
      <script src="/admin/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="/admin/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="/admin/js/Chart.min.js"></script>
      <script src="/admin/js/Chart.bundle.min.js"></script>
      <script src="/admin/js/utils.js"></script>
      <script src="/admin/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="/admin/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="/admin/js/custom.js"></script>
      <!-- calendar file css -->    
      <script src="/admin/js/semantic.min.js"></script>
      <script></script>
   </body>
</html>
