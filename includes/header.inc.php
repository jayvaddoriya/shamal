<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Shamol - Admin</title>
 
    <!-- cache control -->
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta name="theme-color" content="#0040B4">

    
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
   
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.1.0/css/intlTelInput.css" integrity="sha512-OkSoWyaoScjXhOm87XO5hDz1E5buvm2aAkq+5zJmaYpylA0OKJ5no5qc4ZRrmApoaXEgXc3n0iyVS1q5FgiJjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
 
</head> 
 <body class="layout-fixed sidebar-expand-md sidebar-mini bg-body-tertiary">
  <!-- MOBILE VIEW -->
  <div class="position-fixed top-0 start-0 w-100 h-100 mobile__view justify-content-center align-items-center">
    <div class="w-100 text-center">
      <img src="assets/images/icons/desktop.png" alt="icon">
      <p class="mb-0 fs-5 mt-3">
        This dashboard is best <br> viewed on <b>Desktop</b>
      </p>
    </div>
  </div>


    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <!-- <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> 
                 <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 4.17a.83.83 0 0 0-.83.83v10c0 .46.37.83.83.83h1.67V4.17zM5 2.5A2.5 2.5 0 0 0 2.5 5v10A2.5 2.5 0 0 0 5 17.5h10a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5zm3.33 1.67v11.66H15c.46 0 .83-.37.83-.83V5a.83.83 0 0 0-.83-.83zm4.76 3.57c.32.33.32.86 0 1.18L12 10l1.08 1.08a.83.83 0 0 1-1.18 1.18l-1.67-1.67a.83.83 0 0 1 0-1.18l1.67-1.67a.83.83 0 0 1 1.18 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5 4.17a.83.83 0 0 0-.83.83v10c0 .46.37.83.83.83h1.67V4.17zM5 2.5A2.5 2.5 0 0 0 2.5 5v10A2.5 2.5 0 0 0 5 17.5h10a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5zm3.33 1.67v11.66H15c.46 0 .83-.37.83-.83V5a.83.83 0 0 0-.83-.83zm4.76 3.57c.32.33.32.86 0 1.18L12 10l1.08 1.08a.83.83 0 0 1-1.18 1.18l-1.67-1.67a.83.83 0 0 1 0-1.18l1.67-1.67a.83.83 0 0 1 1.18 0" fill="#868E96"/></svg>
              </a> -->
              <!--begin::Brand Link-->
            <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="assets/images/logo.svg"
              alt="AdminLTE Logo"
              class="brand-image"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <!-- <span class="brand-text fw-light">AdminLTE 4</span> -->
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
            </li>
            
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto align-items-center"> 
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown header__dropdown">
              <a class="nav-link ac__btn w-auto align-items-center d-inline-flex gap-1" data-bs-toggle="dropdown" href="#">
                <img
                    src="./assets/images/icons/sd.svg"
                    alt="User Avatar" width="24" height="22"
                    class=""
                />
                <span>Skydive Dubai Palm</span> 
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.529 5.529c.26-.26.682-.26.942 0L8 9.057l3.529-3.528a.667.667 0 1 1 .942.943l-4 4a.667.667 0 0 1-.942 0l-4-4a.667.667 0 0 1 0-.943" fill="#212529"/></svg>
              </a>
              <div class="dropdown-menu p-2 dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item px-2 rounded-2">
                  <!--begin::Message-->
                  <div class="d-flex gap-2 align-items-center">
                    <div class="flex-shrink-0">
                      <img
                        src="./assets/images/icons/sd.svg"
                        alt="User Avatar" width="24" height="22"
                        class=""
                    />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title mb-0">
                        Skydive Dubai Palm 
                      </h3> 
                    </div>
                  </div>
                  <!--end::Message-->
                </a> 
                <a href="#" class="dropdown-item px-2 rounded-2">
                  <!--begin::Message-->
                  <div class="d-flex gap-2 align-items-center">
                    <div class="flex-shrink-0">
                      <img
                        src="./assets/images/icons/sd.svg"
                        alt="User Avatar" width="24" height="22"
                        class=""
                    />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title mb-0">
                        Skydive Dubai Desert
                      </h3> 
                    </div>
                  </div>
                  <!--end::Message-->
                </a> 
              </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            
            <!--begin::Fullscreen Toggle-->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li> -->
            <!--end::Fullscreen Toggle-->
            <li class="nav-item mx-3">
                <span class="d-block" style="background-color: #DEE2E6; width: 1px; height: 20px;"></span>
            </li>
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle p-0 d-inline-flex align-items-center justify-content-center" data-bs-toggle="dropdown">
                <img
                  src="./assets/images/icons/user.png"
                  class="user-image rounded-circle m-0"
                  alt="User Image"
                /> 
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="./assets/images/icons/user.png"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <li class="user-body">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                  </div>
                  <!--end::Row-->
                </li>
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->

      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-white shadow" data-bs-theme="light">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <!-- <i class="bi bi-list"></i> -->
              <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 4.17a.83.83 0 0 0-.83.83v10c0 .46.37.83.83.83h1.67V4.17zM5 2.5A2.5 2.5 0 0 0 2.5 5v10A2.5 2.5 0 0 0 5 17.5h10a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5zm3.33 1.67v11.66H15c.46 0 .83-.37.83-.83V5a.83.83 0 0 0-.83-.83zm4.76 3.57c.32.33.32.86 0 1.18L12 10l1.08 1.08a.83.83 0 0 1-1.18 1.18l-1.67-1.67a.83.83 0 0 1 0-1.18l1.67-1.67a.83.83 0 0 1 1.18 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5 4.17a.83.83 0 0 0-.83.83v10c0 .46.37.83.83.83h1.67V4.17zM5 2.5A2.5 2.5 0 0 0 2.5 5v10A2.5 2.5 0 0 0 5 17.5h10a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5zm3.33 1.67v11.66H15c.46 0 .83-.37.83-.83V5a.83.83 0 0 0-.83-.83zm4.76 3.57c.32.33.32.86 0 1.18L12 10l1.08 1.08a.83.83 0 0 1-1.18 1.18l-1.67-1.67a.83.83 0 0 1 0-1.18l1.67-1.67a.83.83 0 0 1 1.18 0" fill="#868E96"/></svg>
          </a> 
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper px-0">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-ope">
                <a href="booking.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.67 1.67c.46 0 .83.37.83.83v.83h5V2.5a.83.83 0 1 1 1.67 0v.83H15a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5a2.5 2.5 0 0 1-2.5-2.5v-10A2.5 2.5 0 0 1 5 3.33h.83V2.5c0-.46.38-.83.84-.83M5.83 5H5a.83.83 0 0 0-.83.83v2.5h11.66v-2.5A.83.83 0 0 0 15 5h-.83v.83a.83.83 0 0 1-1.67 0V5h-5v.83a.83.83 0 1 1-1.67 0zm10 5H4.17v5.83c0 .46.37.84.83.84h10c.46 0 .83-.38.83-.84zM7.5 13.33c0-.46.37-.83.83-.83h3.34a.83.83 0 0 1 0 1.67H8.33a.83.83 0 0 1-.83-.84" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.67 1.67c.46 0 .83.37.83.83v.83h5V2.5a.83.83 0 1 1 1.67 0v.83H15a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5a2.5 2.5 0 0 1-2.5-2.5v-10A2.5 2.5 0 0 1 5 3.33h.83V2.5c0-.46.38-.83.84-.83M5.83 5H5a.83.83 0 0 0-.83.83v2.5h11.66v-2.5A.83.83 0 0 0 15 5h-.83v.83a.83.83 0 0 1-1.67 0V5h-5v.83a.83.83 0 1 1-1.67 0zm10 5H4.17v5.83c0 .46.37.84.83.84h10c.46 0 .83-.38.83-.84zM7.5 13.33c0-.46.37-.83.83-.83h3.34a.83.83 0 0 1 0 1.67H8.33a.83.83 0 0 1-.83-.84" fill="#000" fill-opacity=".2"/></svg>
                  <p>
                    Bookings 
                  </p>
                  <span class="nav-label">Bookings</span>
                </a> 
              </li>
              <li class="nav-item">
                <a href="waivers.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.5 15.83q4.17-2.5 4.17-5c0-2.5-.84-2.5-1.67-2.5s-1.7.9-1.67 2.5c.03 1.71 1.38 2.4 2.09 3.34 1.25 1.66 2.08 2.08 2.91.83q.84-1.25 1.25-2.08 1.26 2.91 3.34 2.91H15m0 0-1.67-1.66v-10c0-.94.74-1.67 1.67-1.67s1.67.73 1.67 1.67v10zm-1.67-10h3.34" stroke="#212529" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2.5 15.83q4.17-2.5 4.17-5c0-2.5-.84-2.5-1.67-2.5s-1.7.9-1.67 2.5c.03 1.71 1.38 2.4 2.09 3.34 1.25 1.66 2.08 2.08 2.91.83q.84-1.25 1.25-2.08 1.26 2.91 3.34 2.91H15m0 0-1.67-1.66v-10c0-.94.74-1.67 1.67-1.67s1.67.73 1.67 1.67v10zm-1.67-10h3.34" stroke="#000" stroke-opacity=".2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  <p>Signed Waivers</p> 
                  <span class="nav-label">Signed Waivers</span> 
                </a>
              </li>
              <li class="nav-item active">
                <a href="accounts.php" class="nav-link ">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3.333a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5m-4.167 2.5a4.167 4.167 0 1 1 8.334 0 4.167 4.167 0 0 1-8.334 0m9.193-3.431a.833.833 0 0 1 1.014-.6 4.166 4.166 0 0 1 0 8.072.833.833 0 0 1-.413-1.615 2.5 2.5 0 0 0 0-4.843.833.833 0 0 1-.601-1.014M5.833 13.333a2.5 2.5 0 0 0-2.5 2.5V17.5a.833.833 0 1 1-1.666 0v-1.667a4.167 4.167 0 0 1 4.166-4.166h3.334a4.167 4.167 0 0 1 4.166 4.166V17.5a.833.833 0 1 1-1.666 0v-1.667a2.5 2.5 0 0 0-2.5-2.5zm8.36-.916a.833.833 0 0 1 1.015-.599 4.17 4.17 0 0 1 3.125 4.01V17.5a.833.833 0 1 1-1.666 0v-1.664a2.5 2.5 0 0 0-1.875-2.404.833.833 0 0 1-.599-1.015" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3.333a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5m-4.167 2.5a4.167 4.167 0 1 1 8.334 0 4.167 4.167 0 0 1-8.334 0m9.193-3.431a.833.833 0 0 1 1.014-.6 4.166 4.166 0 0 1 0 8.072.833.833 0 0 1-.413-1.615 2.5 2.5 0 0 0 0-4.843.833.833 0 0 1-.601-1.014M5.833 13.333a2.5 2.5 0 0 0-2.5 2.5V17.5a.833.833 0 1 1-1.666 0v-1.667a4.167 4.167 0 0 1 4.166-4.166h3.334a4.167 4.167 0 0 1 4.166 4.166V17.5a.833.833 0 1 1-1.666 0v-1.667a2.5 2.5 0 0 0-2.5-2.5zm8.36-.916a.833.833 0 0 1 1.015-.599 4.17 4.17 0 0 1 3.125 4.01V17.5a.833.833 0 1 1-1.666 0v-1.664a2.5 2.5 0 0 0-1.875-2.404.833.833 0 0 1-.599-1.015" fill="#968C8A"/></svg>
                  <p>Account</p>
                  <span class="nav-label">Account</span>
                </a> 
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.17 3.33a.83.83 0 0 0 0 1.67h1.66a.83.83 0 0 0 0-1.67zm-2.36 0a2.5 2.5 0 0 1 2.36-1.66h1.66c1.1 0 2.02.7 2.36 1.66h.98a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5v-10a2.5 2.5 0 0 1 2.5-2.5zM6.8 5h-.98a.83.83 0 0 0-.83.83v10a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84v-10a.83.83 0 0 0-.83-.83h-.98a2.5 2.5 0 0 1-2.36 1.67H9.17A2.5 2.5 0 0 1 6.8 5m-.14 6.67c0-.46.37-.84.83-.84a.83.83 0 1 1 0 1.67.83.83 0 0 1-.83-.83m7.25.59-2.5 2.5a.83.83 0 0 1-1.18 0l-.83-.84a.83.83 0 1 1 1.18-1.18l.24.25 1.91-1.91a.83.83 0 0 1 1.18 1.18m-7.25 1.9a.83.83 0 1 1 .84.83.83.83 0 0 1-.83-.82" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.17 3.33a.83.83 0 0 0 0 1.67h1.66a.83.83 0 0 0 0-1.67zm-2.36 0a2.5 2.5 0 0 1 2.36-1.66h1.66c1.1 0 2.02.7 2.36 1.66h.98a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5v-10a2.5 2.5 0 0 1 2.5-2.5zM6.8 5h-.98a.83.83 0 0 0-.83.83v10a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84v-10a.83.83 0 0 0-.83-.83h-.98a2.5 2.5 0 0 1-2.36 1.67H9.17A2.5 2.5 0 0 1 6.8 5m-.14 6.67c0-.46.37-.84.83-.84a.83.83 0 1 1 0 1.67.83.83 0 0 1-.83-.83m7.25.59-2.5 2.5a.83.83 0 0 1-1.18 0l-.83-.84a.83.83 0 1 1 1.18-1.18l.24.25 1.91-1.91a.83.83 0 0 1 1.18 1.18m-7.25 1.9a.83.83 0 1 1 .84.83.83.83 0 0 1-.83-.82" fill="#000" fill-opacity=".2"/></svg>
                  <p>Manifest</p>
                  <span class="nav-label">Manifest</span>
                </a> 
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.67 1.73a.8.8 0 0 1 .66 0l5.83 2.5a.83.83 0 0 1-.65 1.54L10 3.4 4.5 5.77a.83.83 0 1 1-.66-1.54zm-8 6.6c0-.46.37-.83.83-.83h15a.83.83 0 0 1 0 1.67v7.5a.83.83 0 0 1 0 1.66h-15a.83.83 0 0 1 0-1.66v-7.5a.83.83 0 0 1-.83-.84m2.5.84v7.5h11.66v-7.5zm2.5 1.66c.46 0 .83.38.83.84v2.5a.83.83 0 0 1-1.67 0v-2.5c0-.46.38-.84.84-.84m3.33 0c.46 0 .83.38.83.84v2.5a.83.83 0 0 1-1.66 0v-2.5c0-.46.37-.84.83-.84m3.33 0c.46 0 .84.38.84.84v2.5a.83.83 0 0 1-1.67 0v-2.5c0-.46.37-.84.83-.84" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.67 1.73a.8.8 0 0 1 .66 0l5.83 2.5a.83.83 0 0 1-.65 1.54L10 3.4 4.5 5.77a.83.83 0 1 1-.66-1.54zm-8 6.6c0-.46.37-.83.83-.83h15a.83.83 0 0 1 0 1.67v7.5a.83.83 0 0 1 0 1.66h-15a.83.83 0 0 1 0-1.66v-7.5a.83.83 0 0 1-.83-.84m2.5.84v7.5h11.66v-7.5zm2.5 1.66c.46 0 .83.38.83.84v2.5a.83.83 0 0 1-1.67 0v-2.5c0-.46.38-.84.84-.84m3.33 0c.46 0 .83.38.83.84v2.5a.83.83 0 0 1-1.66 0v-2.5c0-.46.37-.84.83-.84m3.33 0c.46 0 .84.38.84.84v2.5a.83.83 0 0 1-1.67 0v-2.5c0-.46.37-.84.83-.84" fill="#000" fill-opacity=".2"/></svg>
                  <p>Classroom</p>
                  <span class="nav-label">Classroom</span>
                </a> 
              </li>
              <li class="nav-item">
                <a href="customer-tickets.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.17 5a.83.83 0 0 0-.84.83v1.81a2.5 2.5 0 0 1 0 4.72v1.8a.83.83 0 0 0 .84.84h7.5v-.83a.83.83 0 0 1 1.66 0V15h2.5a.83.83 0 0 0 .84-.83v-1.81a2.5 2.5 0 0 1 0-4.72v-1.8a.83.83 0 0 0-.84-.84h-2.5v.83a.83.83 0 1 1-1.66 0V5zm0-1.67a2.5 2.5 0 0 0-2.5 2.5v2.5c0 .46.37.84.83.84a.83.83 0 1 1 0 1.66.83.83 0 0 0-.83.84v2.5a2.5 2.5 0 0 0 2.5 2.5h11.66a2.5 2.5 0 0 0 2.5-2.5v-2.5a.83.83 0 0 0-.83-.84.83.83 0 1 1 0-1.66c.46 0 .83-.38.83-.84v-2.5a2.5 2.5 0 0 0-2.5-2.5zm8.33 5c.46 0 .83.38.83.84v1.66a.83.83 0 1 1-1.66 0V9.17c0-.46.37-.84.83-.84" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M4.17 5a.83.83 0 0 0-.84.83v1.81a2.5 2.5 0 0 1 0 4.72v1.8a.83.83 0 0 0 .84.84h7.5v-.83a.83.83 0 0 1 1.66 0V15h2.5a.83.83 0 0 0 .84-.83v-1.81a2.5 2.5 0 0 1 0-4.72v-1.8a.83.83 0 0 0-.84-.84h-2.5v.83a.83.83 0 1 1-1.66 0V5zm0-1.67a2.5 2.5 0 0 0-2.5 2.5v2.5c0 .46.37.84.83.84a.83.83 0 1 1 0 1.66.83.83 0 0 0-.83.84v2.5a2.5 2.5 0 0 0 2.5 2.5h11.66a2.5 2.5 0 0 0 2.5-2.5v-2.5a.83.83 0 0 0-.83-.84.83.83 0 1 1 0-1.66c.46 0 .83-.38.83-.84v-2.5a2.5 2.5 0 0 0-2.5-2.5zm8.33 5c.46 0 .83.38.83.84v1.66a.83.83 0 1 1-1.66 0V9.17c0-.46.37-.84.83-.84" fill="#000" fill-opacity=".2"/></svg>
                  <p>Customer Tickets</p>
                  <span class="nav-label">Customer Tickets</span>
                </a> 
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.33a2.5 2.5 0 0 0-2.5 2.5v2.5h5v-2.5a2.5 2.5 0 0 0-2.5-2.5m4.17 5v-2.5a4.17 4.17 0 0 0-8.34 0v2.5a2.5 2.5 0 0 0-2.5 2.5v5a2.5 2.5 0 0 0 2.5 2.5h8.34a2.5 2.5 0 0 0 2.5-2.5v-5a2.5 2.5 0 0 0-2.5-2.5M5.83 10a.83.83 0 0 0-.83.83v5c0 .46.37.84.83.84h8.34c.46 0 .83-.38.83-.84v-5a.83.83 0 0 0-.83-.83zm2.5 3.33a1.67 1.67 0 1 1 3.34 0 1.67 1.67 0 0 1-3.34 0" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.33a2.5 2.5 0 0 0-2.5 2.5v2.5h5v-2.5a2.5 2.5 0 0 0-2.5-2.5m4.17 5v-2.5a4.17 4.17 0 0 0-8.34 0v2.5a2.5 2.5 0 0 0-2.5 2.5v5a2.5 2.5 0 0 0 2.5 2.5h8.34a2.5 2.5 0 0 0 2.5-2.5v-5a2.5 2.5 0 0 0-2.5-2.5M5.83 10a.83.83 0 0 0-.83.83v5c0 .46.37.84.83.84h8.34c.46 0 .83-.38.83-.84v-5a.83.83 0 0 0-.83-.83zm2.5 3.33a1.67 1.67 0 1 1 3.34 0 1.67 1.67 0 0 1-3.34 0" fill="#000" fill-opacity=".2"/></svg>
                  <p>Credentials</p>
                  <span class="nav-label">Credentials</span>
                </a> 
              </li> 
              <li class="nav-header">Manage</li>
              <li class="nav-item">
                <a href="waiver-mgmt.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.83 3.33a.83.83 0 0 0-.83.84v11.66a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84V7.5h-2.5a1.67 1.67 0 0 1-1.67-1.67v-2.5zm6.67 1.18 1.32 1.32H12.5zM4.07 2.4a2.5 2.5 0 0 1 1.76-.73h5.84q.34 0 .59.24l4.16 4.17q.24.24.25.59v9.16a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5V4.17c0-.67.27-1.3.74-1.77m6.17 6.18a2.01 2.01 0 0 1 2.85 2.84L8.92 15.6a.8.8 0 0 1-.59.24H6.67a.83.83 0 0 1-.84-.83v-1.67q.01-.34.25-.59zm1.43 1.07q-.15 0-.25.1L7.5 13.69v.49h.49l3.92-3.93a.35.35 0 0 0-.24-.59" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.83 3.33a.83.83 0 0 0-.83.84v11.66a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84V7.5h-2.5a1.67 1.67 0 0 1-1.67-1.67v-2.5zm6.67 1.18 1.32 1.32H12.5zM4.07 2.4a2.5 2.5 0 0 1 1.76-.73h5.84q.34 0 .59.24l4.16 4.17q.24.24.25.59v9.16a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5V4.17c0-.67.27-1.3.74-1.77m6.17 6.18a2.01 2.01 0 0 1 2.85 2.84L8.92 15.6a.8.8 0 0 1-.59.24H6.67a.83.83 0 0 1-.84-.83v-1.67q.01-.34.25-.59zm1.43 1.07q-.15 0-.25.1L7.5 13.69v.49h.49l3.92-3.93a.35.35 0 0 0-.24-.59" fill="#000" fill-opacity=".2"/></svg>
                  <p>Waiver Mgmt.</p>
                  <span class="nav-label">Waiver Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="profiles.php" class="nav-link">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99996 3.33335C8.61925 3.33335 7.49996 4.45264 7.49996 5.83335C7.49996 7.21407 8.61925 8.33335 9.99996 8.33335C11.3807 8.33335 12.5 7.21407 12.5 5.83335C12.5 4.45264 11.3807 3.33335 9.99996 3.33335ZM5.83329 5.83335C5.83329 3.53217 7.69877 1.66669 9.99996 1.66669C12.3011 1.66669 14.1666 3.53217 14.1666 5.83335C14.1666 8.13454 12.3011 10 9.99996 10C7.69877 10 5.83329 8.13454 5.83329 5.83335ZM8.33329 13.3334C7.67025 13.3334 7.03437 13.5967 6.56553 14.0656C6.09668 14.5344 5.83329 15.1703 5.83329 15.8334V17.5C5.83329 17.9603 5.4602 18.3334 4.99996 18.3334C4.53972 18.3334 4.16663 17.9603 4.16663 17.5V15.8334C4.16663 14.7283 4.60561 13.6685 5.38701 12.8871C6.16842 12.1057 7.22822 11.6667 8.33329 11.6667H9.16663C9.62686 11.6667 9.99996 12.0398 9.99996 12.5C9.99996 12.9603 9.62686 13.3334 9.16663 13.3334H8.33329ZM13.75 13.3334C13.0596 13.3334 12.5 13.893 12.5 14.5834C12.5 15.2737 13.0596 15.8334 13.75 15.8334C14.4403 15.8334 15 15.2737 15 14.5834C15 13.893 14.4403 13.3334 13.75 13.3334ZM10.8333 14.5834C10.8333 12.9725 12.1391 11.6667 13.75 11.6667C15.3608 11.6667 16.6666 12.9725 16.6666 14.5834C16.6666 15.0857 16.5397 15.5583 16.3161 15.9709L18.0892 17.7441C18.4147 18.0695 18.4147 18.5972 18.0892 18.9226C17.7638 19.248 17.2361 19.248 16.9107 18.9226L15.1375 17.1494C14.7249 17.373 14.2523 17.5 13.75 17.5C12.1391 17.5 10.8333 16.1942 10.8333 14.5834Z" fill="#212529"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99996 3.33335C8.61925 3.33335 7.49996 4.45264 7.49996 5.83335C7.49996 7.21407 8.61925 8.33335 9.99996 8.33335C11.3807 8.33335 12.5 7.21407 12.5 5.83335C12.5 4.45264 11.3807 3.33335 9.99996 3.33335ZM5.83329 5.83335C5.83329 3.53217 7.69877 1.66669 9.99996 1.66669C12.3011 1.66669 14.1666 3.53217 14.1666 5.83335C14.1666 8.13454 12.3011 10 9.99996 10C7.69877 10 5.83329 8.13454 5.83329 5.83335ZM8.33329 13.3334C7.67025 13.3334 7.03437 13.5967 6.56553 14.0656C6.09668 14.5344 5.83329 15.1703 5.83329 15.8334V17.5C5.83329 17.9603 5.4602 18.3334 4.99996 18.3334C4.53972 18.3334 4.16663 17.9603 4.16663 17.5V15.8334C4.16663 14.7283 4.60561 13.6685 5.38701 12.8871C6.16842 12.1057 7.22822 11.6667 8.33329 11.6667H9.16663C9.62686 11.6667 9.99996 12.0398 9.99996 12.5C9.99996 12.9603 9.62686 13.3334 9.16663 13.3334H8.33329ZM13.75 13.3334C13.0596 13.3334 12.5 13.893 12.5 14.5834C12.5 15.2737 13.0596 15.8334 13.75 15.8334C14.4403 15.8334 15 15.2737 15 14.5834C15 13.893 14.4403 13.3334 13.75 13.3334ZM10.8333 14.5834C10.8333 12.9725 12.1391 11.6667 13.75 11.6667C15.3608 11.6667 16.6666 12.9725 16.6666 14.5834C16.6666 15.0857 16.5397 15.5583 16.3161 15.9709L18.0892 17.7441C18.4147 18.0695 18.4147 18.5972 18.0892 18.9226C17.7638 19.248 17.2361 19.248 16.9107 18.9226L15.1375 17.1494C14.7249 17.373 14.2523 17.5 13.75 17.5C12.1391 17.5 10.8333 16.1942 10.8333 14.5834Z" fill="black" fill-opacity="0.2"/>
                    </svg> 
                    <p>Profile Mgmt.</p>
                    <span class="nav-label">Profile Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="location-management.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.334a5.833 5.833 0 0 0-4.125 9.958l3.536 3.535a.833.833 0 0 0 1.178 0l3.536-3.535A5.833 5.833 0 0 0 10 3.334M5.833 2.93a7.5 7.5 0 0 1 9.47 11.54l-3.535 3.535a2.5 2.5 0 0 1-3.534 0L4.697 14.47A7.5 7.5 0 0 1 5.833 2.93M10 7.5a1.667 1.667 0 1 0 0 3.333A1.667 1.667 0 0 0 10 7.5M6.667 9.167a3.333 3.333 0 1 1 6.666 0 3.333 3.333 0 0 1-6.666 0" fill="#1F1F1F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10 3.334a5.833 5.833 0 0 0-4.125 9.958l3.536 3.535a.833.833 0 0 0 1.178 0l3.536-3.535A5.833 5.833 0 0 0 10 3.334M5.833 2.93a7.5 7.5 0 0 1 9.47 11.54l-3.535 3.535a2.5 2.5 0 0 1-3.534 0L4.697 14.47A7.5 7.5 0 0 1 5.833 2.93M10 7.5a1.667 1.667 0 1 0 0 3.333A1.667 1.667 0 0 0 10 7.5M6.667 9.167a3.333 3.333 0 1 1 6.666 0 3.333 3.333 0 0 1-6.666 0" fill="#000" fill-opacity=".2"/></svg>
                    <p>Location Mgmt.</p>
                    <span class="nav-label">Location Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="organization-credentials.php" class="nav-link">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16663 3.33335C8.70639 3.33335 8.33329 3.70645 8.33329 4.16669V5.83335C8.33329 6.29359 8.70639 6.66669 9.16663 6.66669H10.8333C11.2935 6.66669 11.6666 6.29359 11.6666 5.83335V4.16669C11.6666 3.70645 11.2935 3.33335 10.8333 3.33335H9.16663ZM6.66663 4.16669C6.66663 2.78598 7.78591 1.66669 9.16663 1.66669H10.8333C12.214 1.66669 13.3333 2.78597 13.3333 4.16669V5.83335C13.3333 7.21407 12.214 8.33335 10.8333 8.33335V9.16669H13.3333C13.9963 9.16669 14.6322 9.43008 15.1011 9.89892C15.5699 10.3678 15.8333 11.0036 15.8333 11.6667C17.214 11.6667 18.3333 12.786 18.3333 14.1667V15.8334C18.3333 17.2141 17.214 18.3334 15.8333 18.3334H14.1666C12.7859 18.3334 11.6666 17.2141 11.6666 15.8334V14.1667C11.6666 12.786 12.7859 11.6667 14.1666 11.6667C14.1666 11.4457 14.0788 11.2337 13.9225 11.0774C13.7663 10.9212 13.5543 10.8334 13.3333 10.8334H6.66663C6.44561 10.8334 6.23365 10.9212 6.07737 11.0774C5.92109 11.2337 5.83329 11.4457 5.83329 11.6667C7.214 11.6667 8.33329 12.786 8.33329 14.1667V15.8334C8.33329 17.2141 7.214 18.3334 5.83329 18.3334H4.16663C2.78591 18.3334 1.66663 17.2141 1.66663 15.8334V14.1667C1.66663 12.786 2.78591 11.6667 4.16663 11.6667C4.16663 11.0036 4.43002 10.3678 4.89886 9.89892C5.3677 9.43008 6.00358 9.16669 6.66663 9.16669H9.16663V8.33335C7.78591 8.33335 6.66663 7.21407 6.66663 5.83335V4.16669ZM4.16663 13.3334C3.70639 13.3334 3.33329 13.7064 3.33329 14.1667V15.8334C3.33329 16.2936 3.70639 16.6667 4.16663 16.6667H5.83329C6.29353 16.6667 6.66663 16.2936 6.66663 15.8334V14.1667C6.66663 13.7064 6.29353 13.3334 5.83329 13.3334H4.16663ZM14.1666 13.3334C13.7064 13.3334 13.3333 13.7064 13.3333 14.1667V15.8334C13.3333 16.2936 13.7064 16.6667 14.1666 16.6667H15.8333C16.2935 16.6667 16.6666 16.2936 16.6666 15.8334V14.1667C16.6666 13.7064 16.2935 13.3334 15.8333 13.3334H14.1666Z" fill="#212529"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16663 3.33335C8.70639 3.33335 8.33329 3.70645 8.33329 4.16669V5.83335C8.33329 6.29359 8.70639 6.66669 9.16663 6.66669H10.8333C11.2935 6.66669 11.6666 6.29359 11.6666 5.83335V4.16669C11.6666 3.70645 11.2935 3.33335 10.8333 3.33335H9.16663ZM6.66663 4.16669C6.66663 2.78598 7.78591 1.66669 9.16663 1.66669H10.8333C12.214 1.66669 13.3333 2.78597 13.3333 4.16669V5.83335C13.3333 7.21407 12.214 8.33335 10.8333 8.33335V9.16669H13.3333C13.9963 9.16669 14.6322 9.43008 15.1011 9.89892C15.5699 10.3678 15.8333 11.0036 15.8333 11.6667C17.214 11.6667 18.3333 12.786 18.3333 14.1667V15.8334C18.3333 17.2141 17.214 18.3334 15.8333 18.3334H14.1666C12.7859 18.3334 11.6666 17.2141 11.6666 15.8334V14.1667C11.6666 12.786 12.7859 11.6667 14.1666 11.6667C14.1666 11.4457 14.0788 11.2337 13.9225 11.0774C13.7663 10.9212 13.5543 10.8334 13.3333 10.8334H6.66663C6.44561 10.8334 6.23365 10.9212 6.07737 11.0774C5.92109 11.2337 5.83329 11.4457 5.83329 11.6667C7.214 11.6667 8.33329 12.786 8.33329 14.1667V15.8334C8.33329 17.2141 7.214 18.3334 5.83329 18.3334H4.16663C2.78591 18.3334 1.66663 17.2141 1.66663 15.8334V14.1667C1.66663 12.786 2.78591 11.6667 4.16663 11.6667C4.16663 11.0036 4.43002 10.3678 4.89886 9.89892C5.3677 9.43008 6.00358 9.16669 6.66663 9.16669H9.16663V8.33335C7.78591 8.33335 6.66663 7.21407 6.66663 5.83335V4.16669ZM4.16663 13.3334C3.70639 13.3334 3.33329 13.7064 3.33329 14.1667V15.8334C3.33329 16.2936 3.70639 16.6667 4.16663 16.6667H5.83329C6.29353 16.6667 6.66663 16.2936 6.66663 15.8334V14.1667C6.66663 13.7064 6.29353 13.3334 5.83329 13.3334H4.16663ZM14.1666 13.3334C13.7064 13.3334 13.3333 13.7064 13.3333 14.1667V15.8334C13.3333 16.2936 13.7064 16.6667 14.1666 16.6667H15.8333C16.2935 16.6667 16.6666 16.2936 16.6666 15.8334V14.1667C16.6666 13.7064 16.2935 13.3334 15.8333 13.3334H14.1666Z" fill="black" fill-opacity="0.2"/>
                    </svg>

                    <p>Organization & Credentials Mgmt.</p>
                    <span class="nav-label">Organization & Credentials Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3.33a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5m-4.17 2.5a4.17 4.17 0 1 1 8.34 0 4.17 4.17 0 0 1-8.34 0M15.83 5c.46 0 .84.37.84.83v2.5a.83.83 0 1 1-1.67 0v-2.5c0-.46.37-.83.83-.83m0 5.83c.46 0 .84.38.84.84a.83.83 0 1 1-1.67 0c0-.46.37-.84.83-.84m-10 2.5a2.5 2.5 0 0 0-2.5 2.5v1.67a.83.83 0 1 1-1.66 0v-1.67a4.17 4.17 0 0 1 4.16-4.16h3.34a4.17 4.17 0 0 1 4.16 4.16v1.67a.83.83 0 1 1-1.66 0v-1.67a2.5 2.5 0 0 0-2.5-2.5z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 3.33a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5m-4.17 2.5a4.17 4.17 0 1 1 8.34 0 4.17 4.17 0 0 1-8.34 0M15.83 5c.46 0 .84.37.84.83v2.5a.83.83 0 1 1-1.67 0v-2.5c0-.46.37-.83.83-.83m0 5.83c.46 0 .84.38.84.84a.83.83 0 1 1-1.67 0c0-.46.37-.84.83-.84m-10 2.5a2.5 2.5 0 0 0-2.5 2.5v1.67a.83.83 0 1 1-1.66 0v-1.67a4.17 4.17 0 0 1 4.16-4.16h3.34a4.17 4.17 0 0 1 4.16 4.16v1.67a.83.83 0 1 1-1.66 0v-1.67a2.5 2.5 0 0 0-2.5-2.5z" fill="#000" fill-opacity=".2"/></svg>
                    <p>Roles Mgmt.</p>
                    <span class="nav-label">Roles Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="users.php" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.67 4.17a.83.83 0 0 0-.84.83v.83a.83.83 0 0 1 0 1.67v1.67a.83.83 0 1 1 0 1.66v1.67a.83.83 0 1 1 0 1.67V15a.83.83 0 0 0 .84.83H15a.83.83 0 0 0 .83-.83V5a.83.83 0 0 0-.83-.83zm-2.5 10V15a2.5 2.5 0 0 0 2.5 2.5H15a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5H6.67A2.5 2.5 0 0 0 4.17 5v.83h-.84a.83.83 0 0 0 0 1.67h.84v1.67h-.84a.83.83 0 0 0 0 1.66h.84v1.67h-.84a.83.83 0 0 0 0 1.67zm6.66-5.84a.83.83 0 1 0 0 1.67.83.83 0 0 0 0-1.67m-2.5.84a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0m-.83 4.16c0-.46.37-.83.83-.83h5a.83.83 0 1 1 0 1.67h-5a.83.83 0 0 1-.83-.84" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.67 4.17a.83.83 0 0 0-.84.83v.83a.83.83 0 0 1 0 1.67v1.67a.83.83 0 1 1 0 1.66v1.67a.83.83 0 1 1 0 1.67V15a.83.83 0 0 0 .84.83H15a.83.83 0 0 0 .83-.83V5a.83.83 0 0 0-.83-.83zm-2.5 10V15a2.5 2.5 0 0 0 2.5 2.5H15a2.5 2.5 0 0 0 2.5-2.5V5A2.5 2.5 0 0 0 15 2.5H6.67A2.5 2.5 0 0 0 4.17 5v.83h-.84a.83.83 0 0 0 0 1.67h.84v1.67h-.84a.83.83 0 0 0 0 1.66h.84v1.67h-.84a.83.83 0 0 0 0 1.67zm6.66-5.84a.83.83 0 1 0 0 1.67.83.83 0 0 0 0-1.67m-2.5.84a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0m-.83 4.16c0-.46.37-.83.83-.83h5a.83.83 0 1 1 0 1.67h-5a.83.83 0 0 1-.83-.84" fill="#000" fill-opacity=".2"/></svg>
                    <p>Users Mgmt.</p>
                    <span class="nav-label">Users Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="aircraft-mgmt.php" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.83 2q.25-.32.67-.33H10c.3 0 .58.16.72.42l3.1 5.41h2.85a2.5 2.5 0 1 1 0 5h-2.85l-3.1 5.41a.8.8 0 0 1-.72.42H7.5a.83.83 0 0 1-.8-1.06l1.36-4.77H6.18l-1.42 1.42a.8.8 0 0 1-.6.25h-2.5a.83.83 0 0 1-.74-1.2L2.4 10 .92 7.04a.83.83 0 0 1 .75-1.2h2.5q.34 0 .59.24L6.18 7.5h1.88L6.7 2.73A.8.8 0 0 1 6.83 2M8.6 3.33 9.97 8.1a.83.83 0 0 1-.8 1.07H5.83a.8.8 0 0 1-.59-.25L3.82 7.5h-.8l1.06 2.13q.18.36 0 .74L3.02 12.5h.8l1.42-1.42a.8.8 0 0 1 .6-.25h3.33a.83.83 0 0 1 .8 1.07L8.6 16.67h.92l3.09-5.42a.8.8 0 0 1 .72-.42h3.34a.83.83 0 0 0 0-1.66h-3.34a.8.8 0 0 1-.72-.42l-3.1-5.42z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.83 2q.25-.32.67-.33H10c.3 0 .58.16.72.42l3.1 5.41h2.85a2.5 2.5 0 1 1 0 5h-2.85l-3.1 5.41a.8.8 0 0 1-.72.42H7.5a.83.83 0 0 1-.8-1.06l1.36-4.77H6.18l-1.42 1.42a.8.8 0 0 1-.6.25h-2.5a.83.83 0 0 1-.74-1.2L2.4 10 .92 7.04a.83.83 0 0 1 .75-1.2h2.5q.34 0 .59.24L6.18 7.5h1.88L6.7 2.73A.8.8 0 0 1 6.83 2M8.6 3.33 9.97 8.1a.83.83 0 0 1-.8 1.07H5.83a.8.8 0 0 1-.59-.25L3.82 7.5h-.8l1.06 2.13q.18.36 0 .74L3.02 12.5h.8l1.42-1.42a.8.8 0 0 1 .6-.25h3.33a.83.83 0 0 1 .8 1.07L8.6 16.67h.92l3.09-5.42a.8.8 0 0 1 .72-.42h3.34a.83.83 0 0 0 0-1.66h-3.34a.8.8 0 0 1-.72-.42l-3.1-5.42z" fill="#000" fill-opacity=".2"/></svg>
                    <p>Aircraft Mgmt.</p>
                    <span class="nav-label">Aircraft Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="aircraft-mgmt-2.php" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.83 2q.25-.32.67-.33H10c.3 0 .58.16.72.42l3.1 5.41h2.85a2.5 2.5 0 1 1 0 5h-2.85l-3.1 5.41a.8.8 0 0 1-.72.42H7.5a.83.83 0 0 1-.8-1.06l1.36-4.77H6.18l-1.42 1.42a.8.8 0 0 1-.6.25h-2.5a.83.83 0 0 1-.74-1.2L2.4 10 .92 7.04a.83.83 0 0 1 .75-1.2h2.5q.34 0 .59.24L6.18 7.5h1.88L6.7 2.73A.8.8 0 0 1 6.83 2M8.6 3.33 9.97 8.1a.83.83 0 0 1-.8 1.07H5.83a.8.8 0 0 1-.59-.25L3.82 7.5h-.8l1.06 2.13q.18.36 0 .74L3.02 12.5h.8l1.42-1.42a.8.8 0 0 1 .6-.25h3.33a.83.83 0 0 1 .8 1.07L8.6 16.67h.92l3.09-5.42a.8.8 0 0 1 .72-.42h3.34a.83.83 0 0 0 0-1.66h-3.34a.8.8 0 0 1-.72-.42l-3.1-5.42z" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M6.83 2q.25-.32.67-.33H10c.3 0 .58.16.72.42l3.1 5.41h2.85a2.5 2.5 0 1 1 0 5h-2.85l-3.1 5.41a.8.8 0 0 1-.72.42H7.5a.83.83 0 0 1-.8-1.06l1.36-4.77H6.18l-1.42 1.42a.8.8 0 0 1-.6.25h-2.5a.83.83 0 0 1-.74-1.2L2.4 10 .92 7.04a.83.83 0 0 1 .75-1.2h2.5q.34 0 .59.24L6.18 7.5h1.88L6.7 2.73A.8.8 0 0 1 6.83 2M8.6 3.33 9.97 8.1a.83.83 0 0 1-.8 1.07H5.83a.8.8 0 0 1-.59-.25L3.82 7.5h-.8l1.06 2.13q.18.36 0 .74L3.02 12.5h.8l1.42-1.42a.8.8 0 0 1 .6-.25h3.33a.83.83 0 0 1 .8 1.07L8.6 16.67h.92l3.09-5.42a.8.8 0 0 1 .72-.42h3.34a.83.83 0 0 0 0-1.66h-3.34a.8.8 0 0 1-.72-.42l-3.1-5.42z" fill="#000" fill-opacity=".2"/></svg>
                    <p>Aircraft Mgmt. 2</p>
                    <span class="nav-label">Aircraft Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="formation-mgmt.php" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.17 3.33a.83.83 0 0 0 0 1.67h1.66a.83.83 0 0 0 0-1.67zm-2.36 0a2.5 2.5 0 0 1 2.36-1.66h1.66c1.1 0 2.02.7 2.36 1.66h.98a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5v-10a2.5 2.5 0 0 1 2.5-2.5zM6.8 5h-.98a.83.83 0 0 0-.83.83v10a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84v-10a.83.83 0 0 0-.83-.83h-.98a2.5 2.5 0 0 1-2.36 1.67H9.17A2.5 2.5 0 0 1 6.8 5m-.14 5a.83.83 0 1 1 .84.83.83.83 0 0 1-.83-.83M10 10c0-.46.37-.83.83-.83h1.67a.83.83 0 1 1 0 1.66h-1.67A.83.83 0 0 1 10 10m-3.33 3.33a.83.83 0 1 1 .84.83H7.5a.83.83 0 0 1-.83-.83m3.33 0c0-.46.37-.83.83-.83h1.67a.83.83 0 1 1 0 1.67h-1.67a.83.83 0 0 1-.83-.84" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M9.17 3.33a.83.83 0 0 0 0 1.67h1.66a.83.83 0 0 0 0-1.67zm-2.36 0a2.5 2.5 0 0 1 2.36-1.66h1.66c1.1 0 2.02.7 2.36 1.66h.98a2.5 2.5 0 0 1 2.5 2.5v10a2.5 2.5 0 0 1-2.5 2.5H5.83a2.5 2.5 0 0 1-2.5-2.5v-10a2.5 2.5 0 0 1 2.5-2.5zM6.8 5h-.98a.83.83 0 0 0-.83.83v10a.83.83 0 0 0 .83.84h8.34a.83.83 0 0 0 .83-.84v-10a.83.83 0 0 0-.83-.83h-.98a2.5 2.5 0 0 1-2.36 1.67H9.17A2.5 2.5 0 0 1 6.8 5m-.14 5a.83.83 0 1 1 .84.83.83.83 0 0 1-.83-.83M10 10c0-.46.37-.83.83-.83h1.67a.83.83 0 1 1 0 1.66h-1.67A.83.83 0 0 1 10 10m-3.33 3.33a.83.83 0 1 1 .84.83H7.5a.83.83 0 0 1-.83-.83m3.33 0c0-.46.37-.83.83-.83h1.67a.83.83 0 1 1 0 1.67h-1.67a.83.83 0 0 1-.83-.84" fill="#000" fill-opacity=".2"/></svg>
                    <p>Formation Mgmt.</p>
                    <span class="nav-label">Formation Mgmt.</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6 1.69a9 9 0 0 0-1.21 0 8.33 8.33 0 1 0 1.22 0M8.03 3.63a6.7 6.7 0 0 0-3.8 3.04h2.76a15 15 0 0 1 1.04-3.04m.67 3.04q.45-1.7 1.31-3.24.87 1.53 1.3 3.24zm-2 1.66H3.54a7 7 0 0 0 0 3.34H6.7a15 15 0 0 1 0-3.34m1.68 3.34a13 13 0 0 1 0-3.34h3.26a13 13 0 0 1 0 3.34zm-1.4 1.66H4.24a6.7 6.7 0 0 0 3.8 3.04 15 15 0 0 1-1.05-3.04M10 16.57a13 13 0 0 1-1.3-3.24h2.6q-.43 1.7-1.3 3.24m1.98-.2a6.7 6.7 0 0 0 3.8-3.04h-2.76a15 15 0 0 1-1.04 3.04m1.33-4.7h3.15a7 7 0 0 0 0-3.34H13.3a15 15 0 0 1 0 3.34m-.29-5h2.75a6.7 6.7 0 0 0-3.8-3.04 15 15 0 0 1 1.05 3.04" fill="#1F1F1F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.6 1.69a9 9 0 0 0-1.21 0 8.33 8.33 0 1 0 1.22 0M8.03 3.63a6.7 6.7 0 0 0-3.8 3.04h2.76a15 15 0 0 1 1.04-3.04m.67 3.04q.45-1.7 1.31-3.24.87 1.53 1.3 3.24zm-2 1.66H3.54a7 7 0 0 0 0 3.34H6.7a15 15 0 0 1 0-3.34m1.68 3.34a13 13 0 0 1 0-3.34h3.26a13 13 0 0 1 0 3.34zm-1.4 1.66H4.24a6.7 6.7 0 0 0 3.8 3.04 15 15 0 0 1-1.05-3.04M10 16.57a13 13 0 0 1-1.3-3.24h2.6q-.43 1.7-1.3 3.24m1.98-.2a6.7 6.7 0 0 0 3.8-3.04h-2.76a15 15 0 0 1-1.04 3.04m1.33-4.7h3.15a7 7 0 0 0 0-3.34H13.3a15 15 0 0 1 0 3.34m-.29-5h2.75a6.7 6.7 0 0 0-3.8-3.04 15 15 0 0 1 1.05 3.04" fill="#000" fill-opacity=".2"/></svg>
                    <p>Geographic Mgmt.</p>
                    <span class="nav-label">Geographic Mgmt.</span>
                </a>
              </li>


              <li class="nav-header">Other</li>
              <li class="nav-item">
                <a href="audit-log.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.24 1.84A1.6 1.6 0 0 1 10 3.34v5.83a.83.83 0 0 0 .83.83h5.67a1.67 1.67 0 0 1 1.67 1.67l-.02.18A8.33 8.33 0 1 1 8.24 1.84m.1 1.69a6.67 6.67 0 1 0 8.14 8.14h-5.65a2.5 2.5 0 0 1-2.5-2.5zm3.68-1.3q.35-.23.76-.1a8.3 8.3 0 0 1 5.09 5.1.83.83 0 0 1-.79 1.1h-3.75a1.67 1.67 0 0 1-1.66-1.66V2.92c0-.27.13-.53.35-.68m1.31 1.98v2.46h2.46a6.7 6.7 0 0 0-2.46-2.46" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.24 1.84A1.6 1.6 0 0 1 10 3.34v5.83a.83.83 0 0 0 .83.83h5.67a1.67 1.67 0 0 1 1.67 1.67l-.02.18A8.33 8.33 0 1 1 8.24 1.84m.1 1.69a6.67 6.67 0 1 0 8.14 8.14h-5.65a2.5 2.5 0 0 1-2.5-2.5zm3.68-1.3q.35-.23.76-.1a8.3 8.3 0 0 1 5.09 5.1.83.83 0 0 1-.79 1.1h-3.75a1.67 1.67 0 0 1-1.66-1.66V2.92c0-.27.13-.53.35-.68m1.31 1.98v2.46h2.46a6.7 6.7 0 0 0-2.46-2.46" fill="#000" fill-opacity=".2"/></svg>
                  <p>Reports</p>
                  <span class="nav-label">Reports</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="emergency-alerts.php" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.72 1.99a2.5 2.5 0 0 1 3.45.93l5.92 10.2.05.1a2.5 2.5 0 0 1-2.3 3.45H4.02a2.5 2.5 0 0 1-2.13-3.55l5.9-10.2q.34-.58.92-.93M4.12 15h11.71a.83.83 0 0 0 .78-1.1L10.73 3.75v-.01a.83.83 0 0 0-1.47 0v.01L3.36 13.9a.83.83 0 0 0 .75 1.1M10 6.67c.46 0 .83.37.83.83v1.67a.83.83 0 0 1-1.66 0V7.5c0-.46.37-.83.83-.83m0 5a.83.83 0 1 1-.83.84v-.01c0-.46.37-.83.83-.83" fill="#212529"/><path fill-rule="evenodd" clip-rule="evenodd" d="M8.72 1.99a2.5 2.5 0 0 1 3.45.93l5.92 10.2.05.1a2.5 2.5 0 0 1-2.3 3.45H4.02a2.5 2.5 0 0 1-2.13-3.55l5.9-10.2q.34-.58.92-.93M4.12 15h11.71a.83.83 0 0 0 .78-1.1L10.73 3.75v-.01a.83.83 0 0 0-1.47 0v.01L3.36 13.9a.83.83 0 0 0 .75 1.1M10 6.67c.46 0 .83.37.83.83v1.67a.83.83 0 0 1-1.66 0V7.5c0-.46.37-.83.83-.83m0 5a.83.83 0 1 1-.83.84v-.01c0-.46.37-.83.83-.83" fill="#000" fill-opacity=".2"/></svg>
                  <p>Emergency Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M15 2.55a2.5 2.5 0 0 0-2.2 3.68L15 9.38l2.2-3.15A2.5 2.5 0 0 0 15 2.55m-2.07-1.11a4.17 4.17 0 0 1 5.67 5.7l-2.92 4.17a.83.83 0 0 1-1.36 0L11.4 7.14l-.05-.07a4.17 4.17 0 0 1 1.58-5.64m-5.8 1.15a.8.8 0 0 1 .74 0l1.25.62a.83.83 0 0 1-.74 1.5l-.05-.03v8.97l3.34 1.67V12.5a.83.83 0 1 1 1.66 0v2.82l3.34-1.67V12.5a.83.83 0 1 1 1.66 0v1.67c0 .31-.17.6-.46.74l-5 2.5a.8.8 0 0 1-.74 0L7.5 15.1l-4.63 2.3a.83.83 0 0 1-1.2-.74V5.83c0-.31.17-.6.46-.74zm-.46 11.06V4.68L3.33 6.35v8.97zM15 4.17a.83.83 0 1 1-.83.84V5c0-.46.37-.83.83-.83" fill="#1F1F1F"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15 2.55a2.5 2.5 0 0 0-2.2 3.68L15 9.38l2.2-3.15A2.5 2.5 0 0 0 15 2.55m-2.07-1.11a4.17 4.17 0 0 1 5.67 5.7l-2.92 4.17a.83.83 0 0 1-1.36 0L11.4 7.14l-.05-.07a4.17 4.17 0 0 1 1.58-5.64m-5.8 1.15a.8.8 0 0 1 .74 0l1.25.62a.83.83 0 0 1-.74 1.5l-.05-.03v8.97l3.34 1.67V12.5a.83.83 0 1 1 1.66 0v2.82l3.34-1.67V12.5a.83.83 0 1 1 1.66 0v1.67c0 .31-.17.6-.46.74l-5 2.5a.8.8 0 0 1-.74 0L7.5 15.1l-4.63 2.3a.83.83 0 0 1-1.2-.74V5.83c0-.31.17-.6.46-.74zm-.46 11.06V4.68L3.33 6.35v8.97zM15 4.17a.83.83 0 1 1-.83.84V5c0-.46.37-.83.83-.83" fill="#000" fill-opacity=".2"/></svg>
                  <p>Location Configuration</p>
                  <span class="nav-label">Location Configuration</span>
                </a>
              </li> 
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      
      


    