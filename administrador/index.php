<?php
require_once 'includes/header.php';
?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-speedometer"></i> dashboard</h1>
          <p>Impulsando el desarrollo sostenible</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <!DOCTYPE html>


 


<html lang="en">
<head>
   <!-- otros links, como bootstrap.css o adminlte.css -->
   <style>
    .content-wrapper {
      padding-left: 0 !important;
      margin-left: 0 !important;
    }
  </style>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>AdminLTE 3 | Dashboard</title>
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" rel="stylesheet"/>
<!-- Font Awesome -->
<link href="css/all.min.css" rel="stylesheet"/>
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet"/>
<!-- Tempusdominus Bootstrap 4 -->
<link href="css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>
<!-- iCheck -->
<link href="css/icheck-bootstrap.min.css" rel="stylesheet"/>
<!-- JQVMap -->
<link href="css/jqvmap.min.css" rel="stylesheet"/>
<!-- Theme style -->
<link href="css/adminlte.min.css" rel="stylesheet"/>
<!-- overlayScrollbars -->
<link href="css/OverlayScrollbars.min.css" rel="stylesheet"/>
<!-- Daterange picker -->
<link href="css/daterangepicker.css" rel="stylesheet"/>
<!-- summernote -->
<link href="css/summernote-bs4.min.css" rel="stylesheet"/>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
<img alt="AdminLTELogo" class="animation__shake" height="60" src="img/AdminLTELogo.png" width="60"/>
</div>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
<!-- Left navbar links -->
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a class="nav-link" href="index3.html">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a class="nav-link" href="#">Contact</a>
</li>
</ul>
<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
<!-- Navbar Search -->
<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input aria-label="Search" class="form-control form-control-navbar" placeholder="Search" type="search"/>
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" data-widget="navbar-search" type="button">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>
<!-- Messages Dropdown Menu -->
<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a class="dropdown-item" href="#">
<!-- Message Start -->
<div class="media">
<img alt="User Avatar" class="img-size-50 mr-3 img-circle" src="img/user1-128x128.jpg"/>
<div class="media-body">
<h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<!-- Message Start -->
<div class="media">
<img alt="User Avatar" class="img-size-50 img-circle mr-3" src="img/user8-128x128.jpg"/>
<div class="media-body">
<h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<!-- Message Start -->
<div class="media">
<img alt="User Avatar" class="img-size-50 img-circle mr-3" src="img/user3-128x128.jpg"/>
<div class="media-body">
<h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>
<!-- Message End -->
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item dropdown-footer" href="#">See All Messages</a>
</div>
</li>
<!-- Notifications Dropdown Menu -->
<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">
<i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item dropdown-footer" href="#">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-controlsidebar-slide="true" data-widget="control-sidebar" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Dashboard</h1>
</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Dashboard v1</li>
</ol>
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a class="small-box-footer" href="#">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Bounce Rate</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a class="small-box-footer" href="#">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a class="small-box-footer" href="#">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3>65</h3>
<p>Unique Visitors</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a class="small-box-footer" href="#">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">
<!-- Custom tabs (Charts with tabs)-->
<div class="card">
<div class="card-header">
<h3 class="card-title">
<i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
<div class="card-tools">
<ul class="nav nav-pills ml-auto">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#revenue-chart">Area</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#sales-chart">Donut</a>
</li>
</ul>
</div>
</div><!-- /.card-header -->
<div class="card-body">
<div class="tab-content p-0">
<!-- Morris chart - Sales -->
<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
<canvas height="300" id="revenue-chart-canvas" style="height: 300px;"></canvas>
</div>
<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
<canvas height="300" id="sales-chart-canvas" style="height: 300px;"></canvas>
</div>
</div>
</div><!-- /.card-body -->
</div>
<!-- /.card -->
<!-- DIRECT CHAT -->
<div class="card direct-chat direct-chat-primary">
<div class="card-header">
<h3 class="card-title">Direct Chat</h3>
<div class="card-tools">
<span class="badge badge-primary" title="3 New Messages">3</span>
<button class="btn btn-tool" data-card-widget="collapse" type="button">
<i class="fas fa-minus"></i>
</button>
<button class="btn btn-tool" data-widget="chat-pane-toggle" title="Contacts" type="button">
<i class="fas fa-comments"></i>
</button>
<button class="btn btn-tool" data-card-widget="remove" type="button">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<!-- /.card-header -->
<div class="card-body">
<!-- Conversations are loaded here -->
<div class="direct-chat-messages">
<!-- Message. Default to the left -->
<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
</div>
<!-- /.direct-chat-infos -->
<img alt="message user image" class="direct-chat-img" src="img/user1-128x128.jpg"/>
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->
<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
</div>
<!-- /.direct-chat-infos -->
<img alt="message user image" class="direct-chat-img" src="img/user3-128x128.jpg"/>
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
                      You better believe it!
                    </div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->
<!-- Message. Default to the left -->
<div class="direct-chat-msg">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-left">Alexander Pierce</span>
<span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
</div>
<!-- /.direct-chat-infos -->
<img alt="message user image" class="direct-chat-img" src="img/user1-128x128.jpg"/>
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->
<!-- Message to the right -->
<div class="direct-chat-msg right">
<div class="direct-chat-infos clearfix">
<span class="direct-chat-name float-right">Sarah Bullock</span>
<span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
</div>
<!-- /.direct-chat-infos -->
<img alt="message user image" class="direct-chat-img" src="img/user3-128x128.jpg"/>
<!-- /.direct-chat-img -->
<div class="direct-chat-text">
                      I would love to.
                    </div>
<!-- /.direct-chat-text -->
</div>
<!-- /.direct-chat-msg -->
</div>
<!--/.direct-chat-messages-->
<!-- Contacts are loaded here -->
<div class="direct-chat-contacts">
<ul class="contacts-list">
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user1-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
</span>
<span class="contacts-list-msg">How have you been? I was...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user7-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
</span>
<span class="contacts-list-msg">I will be waiting for...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user3-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
</span>
<span class="contacts-list-msg">I'll call you back at...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user5-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
</span>
<span class="contacts-list-msg">Where is your new...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user6-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
</span>
<span class="contacts-list-msg">Can I take a look at...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
<li>
<a href="#">
<img alt="User Avatar" class="contacts-list-img" src="img/user8-128x128.jpg"/>
<div class="contacts-list-info">
<span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
</span>
<span class="contacts-list-msg">Never mind I found...</span>
</div>
<!-- /.contacts-list-info -->
</a>
</li>
<!-- End Contact Item -->
</ul>
<!-- /.contacts-list -->
</div>
<!-- /.direct-chat-pane -->
</div>


<!-- /.card-body -->
<div class="card-footer">
<form action="#" method="post">
<div class="input-group">
<input class="form-control" name="message" placeholder="Type Message ..." type="text"/>
<span class="input-group-append">
<button class="btn btn-primary" type="button">Send</button>
</span>
</div>
</form>
</div>
<!-- /.card-footer-->
</div>
<!--/.direct-chat -->
<!-- TO DO List -->
<div class="card">
<div class="card-header">
<h3 class="card-title">
<i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>
<div class="card-tools">
<ul class="pagination pagination-sm">
<li class="page-item"><a class="page-link" href="#">«</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>
</div>
</div>
<!-- /.card-header -->
<div class="card-body">
<ul class="todo-list" data-widget="todo-list">
<li>
<!-- drag handle -->
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<!-- checkbox -->
<div class="icheck-primary d-inline ml-2">
<input id="todoCheck1" name="todo1" type="checkbox" value=""/>
<label for="todoCheck1"></label>
</div>
<!-- todo text -->
<span class="text">Design a nice theme</span>
<!-- Emphasis label -->
<small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
<!-- General tools such as edit or delete-->
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input checked="" id="todoCheck2" name="todo2" type="checkbox" value=""/>
<label for="todoCheck2"></label>
</div>
<span class="text">Make the theme responsive</span>
<small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input id="todoCheck3" name="todo3" type="checkbox" value=""/>
<label for="todoCheck3"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input id="todoCheck4" name="todo4" type="checkbox" value=""/>
<label for="todoCheck4"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input id="todoCheck5" name="todo5" type="checkbox" value=""/>
<label for="todoCheck5"></label>
</div>
<span class="text">Check your messages and notifications</span>
<small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
<li>
<span class="handle">
<i class="fas fa-ellipsis-v"></i>
<i class="fas fa-ellipsis-v"></i>
</span>
<div class="icheck-primary d-inline ml-2">
<input id="todoCheck6" name="todo6" type="checkbox" value=""/>
<label for="todoCheck6"></label>
</div>
<span class="text">Let theme shine like a star</span>
<small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
<div class="tools">
<i class="fas fa-edit"></i>
<i class="fas fa-trash-o"></i>
</div>
</li>
</ul>
</div>
<!-- /.card-body -->
<div class="card-footer clearfix">
<button class="btn btn-primary float-right" type="button"><i class="fas fa-plus"></i> Add item</button>
</div>
</div>
<!-- /.card -->
</section>
<!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">
<!-- Map card -->
<div class="card bg-gradient-primary">
<div class="card-header border-0">
<h3 class="card-title">
<i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
<!-- card tools -->
<div class="card-tools">
<button class="btn btn-primary btn-sm daterange" title="Date range" type="button">
<i class="far fa-calendar-alt"></i>
</button>
<button class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse" type="button">
<i class="fas fa-minus"></i>
</button>
</div>
<!-- /.card-tools -->
</div>
<div class="card-body">
<div id="world-map" style="height: 250px; width: 100%;"></div>
</div>
<!-- /.card-body-->
<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<div id="sparkline-1"></div>
<div class="text-white">Visitors</div>
</div>
<!-- ./col -->
<div class="col-4 text-center">
<div id="sparkline-2"></div>
<div class="text-white">Online</div>
</div>
<!-- ./col -->
<div class="col-4 text-center">
<div id="sparkline-3"></div>
<div class="text-white">Sales</div>
</div>
<!-- ./col -->
</div>
<!-- /.row -->
</div>
</div>
<!-- /.card -->
<!-- solid sales graph -->
<div class="card bg-gradient-info">
<div class="card-header border-0">
<h3 class="card-title">
<i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>
<div class="card-tools">
<button class="btn bg-info btn-sm" data-card-widget="collapse" type="button">
<i class="fas fa-minus"></i>
</button>
<button class="btn bg-info btn-sm" data-card-widget="remove" type="button">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
</div>
<!-- /.card-body -->
<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<input class="knob" data-fgcolor="#39CCCC" data-height="60" data-readonly="true" data-width="60" type="text" value="20"/>
<div class="text-white">Mail-Orders</div>
</div>
<!-- ./col -->
<div class="col-4 text-center">
<input class="knob" data-fgcolor="#39CCCC" data-height="60" data-readonly="true" data-width="60" type="text" value="50"/>
<div class="text-white">Online</div>
</div>
<!-- ./col -->
<div class="col-4 text-center">
<input class="knob" data-fgcolor="#39CCCC" data-height="60" data-readonly="true" data-width="60" type="text" value="30"/>
<div class="text-white">In-Store</div>
</div>
<!-- ./col -->
</div>
<!-- /.row -->
</div>
<!-- /.card-footer -->
</div>
<!-- /.card -->
<!-- Calendar -->
<div class="card bg-gradient-success">
<div class="card-header border-0">
<h3 class="card-title">
<i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
<!-- tools card -->
<div class="card-tools">
<!-- button with a dropdown -->
<div class="btn-group">
<button class="btn btn-success btn-sm dropdown-toggle" data-offset="-52" data-toggle="dropdown" type="button">
<i class="fas fa-bars"></i>
</button>
<div class="dropdown-menu" role="menu">
<a class="dropdown-item" href="#">Add new event</a>
<a class="dropdown-item" href="#">Clear events</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">View calendar</a>
</div>
</div>
<button class="btn btn-success btn-sm" data-card-widget="collapse" type="button">
<i class="fas fa-minus"></i>
</button>
<button class="btn btn-success btn-sm" data-card-widget="remove" type="button">
<i class="fas fa-times"></i>
</button>
</div>
<!-- /. tools -->
</div>
<!-- /.card-header -->
<div class="card-body pt-0">
<!--The calendar -->
<div id="calendar" style="width: 100%"></div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
<b>Version</b> 3.2.0
    </div>
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="js/sparkline.js"></script>
<!-- JQVMap -->
<script src="js/jquery.vmap.min.js"></script>
<script src="js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="js/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<script>
  // Inicializar gráfico
  var ctx = document.getElementById('salesChart').getContext('2d');
  var salesChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May'],
      datasets: [{
        label: 'Ventas 2023',
        data: [1000, 2000, 1500, 3000, 2500],
        backgroundColor: 'rgba(60,141,188,0.2)',
        borderColor: 'rgba(60,141,188,1)'
      }]
    }
  });
</script>




</body>
</html>


    <?php
require_once 'includes/footer.php';
?>
