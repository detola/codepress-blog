<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codepress Dashboard</title>
  <!-- plugins:css -->

  {{-- <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css"> --}}

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <link href="{{asset('css/admin.css')}}" rel="stylesheet">

  {{-- <link rel="stylesheet" href="css/style.css"> --}}

  <!-- endinject -->

  <link rel="shortcut icon" href="images/favicon.png" />

  @yield('styles')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo.svg" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{route('admin.users.create')}}" class="nav-link">User
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="{{route('admin.categories.index')}}" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Category</a>
          </li>
          <li class="nav-item">
          <a href="/" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Homepage</a>
          </li>
        </ul>

        {{-- Items on the right --}}
        <ul class="navbar-nav navbar-nav-right">   
            
            {{-- Notifications --}}
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              <span class="count">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-email-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          {{-- End Notifications --}}

          {{-- Profile Bar --}}
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{ Auth::user()->name }} !</span>
            <img class="img-xs rounded-circle" src="{{ Auth::user()->photo? user()->photo->path : '/images/default.png'}}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              <a class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a class="dropdown-item">
                Change Password
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a>
            <a href="{{url('/logout')}}" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
          {{-- End Profile Bar --}}
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ Auth::user()->photo? user()->photo->path : '/images/default.png'}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{Auth::user()->name}}</p>
                  <div>
                    <small class="designation text-muted">{{Auth::user()->role->name}}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="{{route('admin.posts.create')}}" class="btn btn-success btn-block">New Post<i class="mdi mdi-plus"></i></a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <!-- Users Link -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.users.index')}}">All Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.users.create')}}">Create User</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Posts Links -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#posts" aria-expanded="true" aria-controls="posts">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Posts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="posts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.posts.index')}}">All Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.posts.create')}}">Create Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.comments.index')}}">All Comments</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Category Link -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.categories.index')}}">All Categories</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Media Links -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#media" aria-expanded="false" aria-controls="media">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Media</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="media">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.media.index')}}">All Media</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.media.create')}}">Upload Media</a>
                </li>
              </ul>
            </div>
          </li>


          {{-- <li class="nav-item">
{{route('admin.media.index')}}
            {{route('admin.media.create')}}
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
              <i class="menu-icon mdi mdi-sticker"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Register </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                </li>
              </ul>
            </div>
          </li> --}}
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

                @yield('content')
                
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="https://github.com/detola/codepress" target="_blank">Codepress</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->

  {{-- <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script> --}}
  
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->

  {{-- <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script> --}}

  <!-- endinject -->
  <!-- Custom js for this page-->

  {{-- <script src="js/dashboard.js"></script> --}}

  <!-- End custom js for this page-->

  <script src="{{asset('js/admin.js')}}"></script>

  @yield('scripts')

</body>

</html>