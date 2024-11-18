<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
  data-theme="default" data-topbar="light" data-bs-theme="light">

<head>

  <meta charset="utf-8">
  <title>Biodata</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Minimal Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="/steex/assets/images/favicon.ico">

  <!-- Fonts css load -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet">

  <!-- jsvectormap css -->
  <link href="/steex/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

  <!-- Layout config Js -->
  <script src="/steex/assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="/steex/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="/steex/assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="/steex/assets/css/app.min.css" rel="stylesheet" type="text/css">
  <!-- custom Css-->
  <link href="/steex/assets/css/custom.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Begin page -->
  <div id="layout-wrapper">

    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-light">
          <span class="logo-sm">
            <img src="/steex/assets/images/logo-sm.png" alt="" height="22">
          </span>
          <span class="logo-lg">
            <img src="/steex/assets/images/logo-light.png" alt="" height="22">
          </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
          id="vertical-hover">
          <i class="ri-record-circle-line"></i>
        </button>
      </div>

      <div id="scrollbar">
        <div class="container-fluid">

          <div id="two-column-menu">
          </div>
          <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
              <a href="/" class="nav-link menu-link"> <i class='bx bx-customize'></i> <span
                  data-key="t-calendar">Dashboard</span> </a>
            </li>
          </ul>
        </div>
        </li>
        </ul>
      </div>
      </li>

      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
  </div>
  <!-- Left Sidebar End -->
  <!-- Vertical Overlay-->
  <div class="vertical-overlay"></div>
  <header id="page-topbar">
    <div class="layout-width">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box horizontal-logo">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="/steex/assets/images/logo-sm.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="/steex/assets/images/logo-dark.png" alt="" height="22">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="/steex/assets/images/logo-sm.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="/steex/assets/images/logo-light.png" alt="" height="22">
              </span>
            </a>
          </div>

          <button type="button"
            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
            id="topnav-hamburger-icon">
            <span class="hamburger-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </div>

        <div class="d-flex align-items-center">
          <div class="ms-1 header-item d-none d-sm-flex">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
              data-toggle="fullscreen">
              <i class='bi bi-arrows-fullscreen fs-lg'></i>
            </button>
          </div>

          <div class="dropdown ms-sm-3 header-item topbar-user">
            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="d-flex align-items-center">
                <img class="rounded-circle header-profile-user" src="/foto/profile.jpg"
                  alt="Header Avatar">
                <span class="text-start ms-xl-2">
                  <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Moh. Septiabudi W.</span>
                  <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Web Developer</span>
                </span>
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <h6 class="dropdown-header">Welcome Septa</h6>
              <a class="dropdown-item" href="pages-profile.html"><i
                  class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span
                  class="align-middle">Profile</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="auth-logout.html"><i
                  class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle"
                  data-key="t-logout">Logout</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- removeNotificationModal -->
  <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            id="NotificationModalbtn-close"></button>
        </div>
        <div class="modal-body p-md-5">
          <div class="text-center">
            <div class="text-danger">
              <i class="bi bi-trash display-4"></i>
            </div>
            <div class="mt-4 fs-base">
              <h4 class="mb-1">Are you sure ?</h4>
              <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
            </div>
          </div>
          <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
          </div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!-- removeCartModal -->
  <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            id="close-cartmodal"></button>
        </div>
        <div class="modal-body p-md-5">
          <div class="text-center">
            <div class="text-danger">
              <i class="bi bi-trash display-5"></i>
            </div>
            <div class="mt-4">
              <h4>Are you sure ?</h4>
              <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
            </div>
          </div>
          <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
          </div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <?= $this->renderSection('content') ?>


  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>
            document.write(new Date().getFullYear())
          </script> © Septiabudi.WS
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block">
            by Moh. Septiabudi W.
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->



  <!--start back-to-top-->
  <button class="btn btn-dark btn-icon" id="back-to-top">
    <i class="bi bi-caret-up fs-3xl"></i>
  </button>
  <!--end back-to-top-->

  <!--preloader-->
  <div id="preloader">
    <div id="status">
      <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script src="/steex/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/steex/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="/steex/assets/js/plugins.js"></script>

  <!-- apexcharts -->
  <script src="/steex/assets/libs/apexcharts/apexcharts.min.js"></script>

  <!-- Echarts -->
  <script src="/steex/assets/libs/echarts/echarts.min.js"></script>

  <!-- Vector map-->
  <script src="/steex/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
  <script src="/steex/assets/libs/jsvectormap/maps/world-merc.js"></script>

  <script src="/steex/assets/libs/list.js/list.min.js"></script>

  <!-- dashboard-analytics init js -->
  <script src="/steex/assets/js/pages/dashboard-analytics.init.js"></script>

  <!-- App js -->
  <script src="/steex/assets/js/app.js"></script>
</body>

</html>
