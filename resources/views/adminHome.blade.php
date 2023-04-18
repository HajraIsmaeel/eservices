<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CareerFair | AdminDashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- <link href="{{ asset('../css/app.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet"
    href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
  
        .dropdown {
            position: relative;
            display: inline-block;
        }
  
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 
                0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
  
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
  
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }
  
        .dropdown:hover .dropdown-content {
            display: block;
        }
  
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img src="../images/Site Black.png" alt="CareerFair" height="250px" width="250px">
    </div>

    <!-- Navbar -->
    <
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-secondary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="../images/Site Black.png" alt="CareerFair" height="60px" width="100px">
        <span class="brand-text font-weight-light">CareerFair</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                </p>
              </a>

            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Tables
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pages
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

 
    <!-- add company form -->
  <form action="{{ URL::to('admin_home')}}" method="POST" class="form-group bg-secondary p-3 w-50 mx-auto mt-4" enctype="multipart/form-data">
   @csrf
    <h1 style="color:burlywood;">ADD COMPANY</h1>
   
    <input class="form-control my-3 " type="text" name="name" id="name" placeholder="Enter  Name" required>
   
    <input class="form-control my-3 " type="email" name="email" id="email" placeholder="Enter email" required>
   
    <input class="form-control my-3 " type="text" name="contact" id="contact" placeholder="Enter contact" required>
    
    <input class="form-control my-3 " type="text" name="address" id="address" placeholder="Enter location" required>
    
    <input class="form-control my-3 " type="url" name="website" id="website" placeholder="Enter website link" required>

    LOGO: <br>
    <input  type="file" name="image" id="logo">
   <button type="submit" class="btn btn-success my-2 p-2">submit</button>
     </form>
<!-- end form -->

<!-- job details form -->
  <!-- <form action="{{ URL::to('admin/home')}}" method="POST" class="form-group bg-secondary p-3 w-50 mx-auto mt-2" enctype="multipart/form-data">
   @csrf
    <h1 style="color:burlywood;">COMPANY PROFILE</h1>
   Company Name:
    <input class="form-control mt-2 " type="text" name="name" id="name" placeholder="Enter  Name" required>
      <br>
   Description:
   <textarea name="jobdesc" id="jobdesc"  class="form-control mt-2">
   
    </textarea>
   Job Type: 
   <select name="jobtype" id="jobtype" class="form-control mt-2" >

     <option value="intern">
      Intern 
     </option>

     <option value="job">
      Job 
     </option>

   </select>
   Salary:
   <input class="form-control mt-2 " type="text" name="salary" id="salary" placeholder="Enter location" required>

    Location:
    <input class="form-control mt-2 " type="text" name="address" id="address" placeholder="Enter location" required>
    Shift:
    <select name="shift" id="shift" class="form-control mt-2 " >
      <option value="day">
        day
      </option>
      <option value="night">
night
    </option>
  </select>
  Logo: <br>


<div class="dropdown">
         <button class="dropbtn">
             company logo
         </button>
           
         <div class="dropdown-content">
            <a href="#"><img src="../images/efrotech.png"width="20" height="15"></a>
            <a href="#"><img src="../images/bootstrap-logo.png"width="20" height="15"></a>

         </div>
   </div> <br> 
    <button type="submit" class="btn btn-success my-2 mx-auto d-block p-2">submit</button>
     </form> -->
   <!-- end form -->
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="../plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <!-- <script src="../plugins/sparklines/sparkline.js"></script> -->
  <!-- JQVMap -->
  <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="../plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.js"></script>
  
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../dist/js/demo.js"></script>  -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="../dist/js/pages/dashboard.js"></script> -->
</body>

</html>