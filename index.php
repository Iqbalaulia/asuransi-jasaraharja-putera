<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard sales - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
    Dashboard
  </title>
   <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png"> <!-- Clear -->
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico"><!-- Clear -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet"><!-- Clear -->
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet"><!-- Clear -->
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css"><!-- Clear -->
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css"><!-- Clear -->
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="modern admin logo" src="app-assets/images/logo/logo.png">
              <h3 class="brand-text">Modern Admin</h3>
            </a>
          </li>
          <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
              <ul class="mega-dropdown-menu dropdown-menu row">
                <li class="col-md-2">
                  <div id="mega-menu-carousel-example">
                      <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                    <div>
                      <img class="rounded img-fluid mb-1" src="app-assets/images/slider/slider-2.png"
                      alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                      <p class="news-content">
                        <span class="font-small-2">January 26, 2018</span>
                      </p>
                    </div>
                  </div>
                </li>
                <li class="col-md-3">
                  <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>
                  <ul class="drilldown-menu">
                    <li class="menu-list">
                      <ul>
                        <li>
                          <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a>
                        </li>
                        <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                          <ul>
                            <li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i>  Second level</a></li>
                            <li><a href="#"><i class="la la-lemon-o"></i> Second level menu</a>
                              <ul>
                                <li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i>  Third level</a></li>
                                <li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>
                                <li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>
                                <li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>
                              </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>
                            <li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>
                          </ul>
                        </li>
                        <li>
                          <a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a>
                        </li>
                        <li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
                        <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                        <li>
                          <a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="col-md-3">
                  <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
                  <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                    <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                      <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne"
                        aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                      <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne"
                      aria-expanded="true">
                        <div class="card-content">
                          <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon.
                            Jelly wafer jelly beans. Caramels chocolate cake liquorice
                            cake wafer jelly beans croissant apple pie.</p>
                        </div>
                      </div>
                      <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                        href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                      <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo"
                      aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu
                            dessert pie. Tiramisu macaroon muffin jelly marshmallow
                            cake. Pastry oat cake chupa chups.</p>
                        </div>
                      </div>
                      <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                        href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                      <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree"
                      aria-expanded="false">
                        <div class="card-content">
                          <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes
                            lollipop macaroon. Cake dragée jujubes donut chocolate
                            bar chocolate cake cupcake chocolate topping.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-md-4">
                  <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                  <form class="form form-horizontal">
                    <div class="form-body">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                            <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                            <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                        <div class="col-sm-9">
                          <div class="position-relative has-icon-left">
                            <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                            <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 mb-1">
                          <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
              <div class="search-input">
                <input class="input" type="text" placeholder="Explore Modern...">
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">Hello,
                  <span class="user-name text-bold-700">John Doe</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
              </div>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i>
                <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">You have new order!</h6>
                        <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading red darken-1">99% Server load</h6>
                        <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                        <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Generate monthly report</h6>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-notification nav-item">
              <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Messages</span>
                  </h6>
                  <span class="notification-tag badge badge-default badge-warning float-right m-0">4 New</span>
                </li>
                <li class="scrollable-container media-list w-100">
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Margaret Govan</h6>
                        <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-busy rounded-circle">
                          <img src="app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Bret Lezama</h6>
                        <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-online rounded-circle">
                          <img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time>
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)">
                    <div class="media">
                      <div class="media-left">
                        <span class="avatar avatar-sm avatar-away rounded-circle">
                          <img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">Eric Alsobrook</h6>
                        <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p>
                        <small>
                          <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time>
                        </small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
 
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
          <div class="col-xl-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Revenue</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row mb-1">
                    <div class="col-6 col-md-4">
                      <h5>Current week</h5>
                      <h2 class="danger">$82,124</h2>
                    </div>
                    <div class="col-6 col-md-4">
                      <h5>Previous week</h5>
                      <h2 class="text-muted">$52,502</h2>
                    </div>
                  </div>
                  <div class="chartjs">
                    <canvas id="thisYearRevenue" width="400" style="position: absolute;"></canvas>
                    <canvas id="lastYearRevenue" width="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-12">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-header bg-hexagons">
                    <h4 class="card-title">Hit Rate
                      <span class="danger">-12%</span>
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-content collapse show bg-hexagons">
                    <div class="card-body pt-0">
                      <div class="chartjs">
                        <canvas id="hit-rate-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content collapse show bg-gradient-directional-danger ">
                    <div class="card-body bg-hexagons-danger">
                      <h4 class="card-title white">Deals
                        <span class="white">-55%</span>
                        <span class="float-right">
                          <span class="white">152</span>
                          <span class="red lighten-4">/200</span>
                        </span>
                      </h4>
                      <div class="chartjs">
                        <canvas id="deals-doughnut" height="275"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Order Value </h6>
                          <h3>$ 88,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-trophy success font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="card pull-up">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media d-flex">
                        <div class="media-body text-left">
                          <h6 class="text-muted">Calls</h6>
                          <h3>3,568</h3>
                        </div>
                        <div class="align-self-center">
                          <i class="icon-call-in danger font-large-2 float-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Revenue, Hit Rate & Deals -->
        <!-- Emails Products & Avg Deals -->
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Emails</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <p>Open rate
                    <span class="float-right text-bold-600">89%</span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="pt-1">Sent
                    <span class="float-right">
                      <span class="text-bold-600">310</span>/500</span>
                  </p>
                  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
                    <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 48%"
                    aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Top Products</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a href="#">Show all</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content collapse show">
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table mb-0">
                      <tbody>
                        <tr>
                          <th scope="row" class="border-top-0">iPone X</th>
                          <td class="border-top-0">2245</td>
                        </tr>
                        <tr>
                          <th scope="row">One Plus</th>
                          <td>1850</td>
                        </tr>
                        <tr>
                          <th scope="row">Samsung S7</th>
                          <td>1550</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-center">Average Deal Size</h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-md-6 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                      <h6 class="danger text-bold-600">-30%</h6>
                      <h4 class="font-large-2 text-bold-400">$12,536</h4>
                      <p class="blue-grey lighten-2 mb-0">Per rep</p>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                      <h6 class="success text-bold-600">12%</h6>
                      <h4 class="font-large-2 text-bold-400">$18,548</h4>
                      <p class="blue-grey lighten-2 mb-0">Per team</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Emails Products & Avg Deals -->
        <!-- Total earning & Recent Sales  -->
        <div class="row">
          <div class="col-12 col-md-4">
            <div class="card">
              <div class="card-content">
                <div class="earning-chart position-relative">
                  <div class="chart-title position-absolute mt-2 ml-2">
                    <h1 class="display-4">$1,596</h1>
                    <span class="text-muted">Total Earning</span>
                  </div>
                  <canvas id="earning-chart" class="height-450"></canvas>
                  <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                    <a href="#" class="btn round btn-danger mr-1 btn-glow">Statistics <i class="ft-bar-chart"></i></a>
                    <span class="text-muted">for the <a href="#" class="danger darken-2">last year.</a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="recent-sales" class="col-12 col-md-8">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Recent Sales</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                  <ul class="list-inline mb-0">
                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                      href="invoice-summary.html" target="_blank">View all</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content mt-1">
                <div class="table-responsive">
                  <table id="recent-orders" class="table table-hover table-xl mb-0">
                    <thead>
                      <tr>
                        <th class="border-top-0">Product</th>
                        <th class="border-top-0">Customers</th>
                        <th class="border-top-0">Categories</th>
                        <th class="border-top-0">Popularity</th>
                        <th class="border-top-0">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-truncate">iPone X</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-5.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+8 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1200.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">iPad</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+5 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1190.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">OnePlus</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-2.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-3.png"
                              alt="Avatar">
                            </li>
                            <li class="avatar avatar-sm">
                              <span class="badge badge-info">+3 more</span>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 70%"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 999.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">ZenPad</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 65%"
                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1150.00</td>
                      </tr>
                      <tr>
                        <td class="text-truncate">Pixel 2</td>
                        <td class="text-truncate p-1">
                          <ul class="list-unstyled users-list m-0">
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png"
                              alt="Avatar">
                            </li>
                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres"
                            class="avatar avatar-sm pull-up">
                              <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                              alt="Avatar">
                            </li>
                          </ul>
                        </td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round">Mobile</button>
                        </td>
                        <td>
                          <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%"
                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-truncate">$ 1180.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Total earning & Recent Sales  -->
        <!-- Analytics map based session -->
        <div class="row">
          <div class="col-12">
            <div class="card box-shadow-0">
              <div class="card-content">
                <div class="row">
                  <div class="col-md-9 col-12">
                    <div id="world-map-markers" class="height-450"></div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="card-body text-center">
                      <h4 class="card-title mb-0">Visitors Sessions</h4>
                      <div class="row">
                        <div class="col-12">
                          <p class="pb-1">Sessions by Browser</p>
                          <div id="sessions-browser-donut-chart" class="height-200"></div>
                        </div>
                        <div class="col-12">
                          <div class="sales pr-2 pt-2">
                            <div class="sales-today mb-2">
                              <p class="m-0">Today's
                                <span class="success float-right"><i class="ft-arrow-up success"></i> 6.89%</span>
                              </p>
                              <div class="progress progress-sm mt-1 mb-0">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <div class="sales-yesterday">
                              <p class="m-0">Yesterday's
                                <span class="danger float-right"><i class="ft-arrow-down danger"></i> 4.18%</span>
                              </p>
                              <div class="progress progress-sm mt-1 mb-0">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Analytics map based session -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->

  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
  type="text/javascript"></script>
  <script src="app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
  type="text/javascript"></script>


  <script src="app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  
  <!-- BEGIN MODERN JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>