<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel|@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href={{asset('css/preeti.css')}}>
  <link rel="stylesheet" href={{asset('css/style1.css')}}>
  @yield('stylesheets')

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
    <link rel="stylesheet" href={{ URL::asset('css/AdminLTE.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/skin-red.min.css')}}>
    <link rel="stylesheet" href={{ URL::asset('css/myFont.css')}}>
    
  
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <?php #if inbox=0 then don't show the span below
              ?>
              <span class="label label-success">{{0}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><!--Your messages-->Here goes the message Header</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src={{URL::asset('images/user2-160x160.jpg')}} class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Message title
                        <small><i class="fa fa-clock-o"></i> Time of arrival</small>
                      </h4>
                      <!-- The message -->
                      <p>Message Body</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              @if(!empty(auth()->user()->usr_avatar))
                <img src={{URL::asset('uploads/'.auth()->user()->usr_avatar)}} class="user-image" alt="User Image">
             @else
              <img src={{URL::asset('images/user2-160x160.jpg')}} class="user-image" alt="User Image">
              @endif
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                @if(!empty(auth()->user()->usr_avatar))
                <img src={{URL::asset('uploads/'.auth()->user()->usr_avatar)}} class="img-circle" alt="User Image">
                @else
               <img src={{URL::asset('images/user2-160x160.jpg')}} class="img-circle" alt="User Image">
              @endif

                <p>
                  {{auth()->user()->name}}
                  <small>Designation</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
        @if(!empty(auth()->user()->usr_avatar))
          <img src={{URL::asset('uploads/'.auth()->user()->usr_avatar)}} class="img-circle" alt="User Image">
        @else
          <img src={{URL::asset('images/user2-160x160.jpg')}} class="img-circle" alt="User Image">
        @endif
          
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <!-- Status -->
          
        </div>
      </div>
    <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Menu Items</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/"><i class="fa fa-home"></i> <span>DashBoard</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('user.index')}}>View</a></li>
            <li><a href={{route('user.create')}}>Add</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-question-circle"></i> <span>Quiz</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('quiz.index')}}>View All Questions</a></li>
            <li><a href={{route('quiz.create')}}>Add Questions</a></li>
            <li><a href={{route('quiz.createq')}}>Create a Quiz</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Content</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('content.index')}}>View</a></li>
            <li><a href={{route('content.create')}}>Add</a></li>
          </ul>
        </li>

          <li class="treeview">
          <a href="#"><i class="fa fa-video-camera"></i> <span>Video Post</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('content.vindex')}}>View</a></li>
            <li><a href={{route('video.create')}}>Add</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-star"></i> <span>Review</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('comment.review')}}>Comments</a></li>
            <li><a href={{route('question.review')}}>Questions</a></li>
            <li><a href={{route('reply.review')}}>Replies</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-info"></i> <span>Infographics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{ route('info.create') }}>Add</a></li>
            <li><a href={{ route('info.index') }}>View</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-file-image-o"></i> <span>Photo Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{ route('gal.create') }}>Create an Album</a></li>
            <li><a href={{ route('gal.index') }}>View Albums</a></li>
          </ul>
        </li>




        <li class="treeview">
          <a href="#"><i class="fa fa-tag"></i> <span>Tags</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('tag.index')}}>View</a></li>
            <li><a href={{route('tag.create')}}>Add</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-folder-o"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href={{route('category.index')}}>View</a></li>
            <li><a href={{route('category.create')}}>Add</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="/logout"><i class="fa fa-sign-out"></i> <span>Logout</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('main_header')
        <small>@yield('headerSmall')</small>
      </h1>
      @include('partials._messages')
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">admin</li>
         <li class="active">@yield('destination')</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="www.webcreations.com">WebCreations Inc</a>.</strong> All rights reserved.
  </footer>

<!-- Control Sidebar -->
  
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src={{ URL::asset('js/jquery-2.2.3.min.js') }}></script>
<script src={{ URL::asset('js/preeti.js') }}></script>
<script src={{ URL::asset('js/bootstrap.min.js') }}></script>
<script src={{ URL::asset('js/app.min.js') }}></script>
@yield('scripts')


</body>
</html>
