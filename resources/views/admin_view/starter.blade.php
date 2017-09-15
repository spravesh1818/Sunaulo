<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel|@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href={{asset('css/preeti.css')}}>
  <link rel="stylesheet" href={{asset('css/style1.css')}}>
  @yield('stylesheets')

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
    <link rel="stylesheet" href={{URL::asset('css/AdminLTE.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{URL::asset('css/skin-red.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/myFont.css')}}>

</head>
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
              <span class="label label-success">{{0}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Here goes the message Header</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src={{URL::asset('images/user2-160x160.jpg')}} class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Message title
                        <small><i class="fa fa-clock-o"></i> Time of arrival</small>
                      </h4>
                      <p>Message Body</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(!empty(auth()->user()->usr_avatar))
                <img src={{URL::asset('uploads/'.auth()->user()->usr_avatar)}} class="user-image" alt="User Image">
             @else
              <img src={{URL::asset('images/user2-160x160.jpg')}} class="user-image" alt="User Image">
              @endif
              
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
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
          
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">

    <section class="sidebar">

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
          
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="header">Menu Items</li>
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
    </section>
  </aside>


  <div class="content-wrapper">
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

    @yield('content')
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2017 <a href="">WebCreations Inc</a>.</strong> All rights reserved.
  </footer>

  
  
</div>

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src={{ URL::asset('js/jquery-2.2.3.min.js') }}></script>
<script src={{ URL::asset('js/preeti.js') }}></script>
<script src={{ URL::asset('js/bootstrap.min.js') }}></script>
<script src={{ URL::asset('js/app.min.js') }}></script>
@yield('scripts')


</body>
</html>
