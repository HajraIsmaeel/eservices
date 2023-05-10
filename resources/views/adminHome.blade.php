<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CareerFair | AdminDashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
  <!-- google fonts  end-->

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
        body {
      font-family: 'Manrope', sans-serif;
      background-image: url(../images/Hexagon.svg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: transparent;
      color: white;
      height: 70px;
    }

    ul {
      display: flex;
      align-items: center;
      justify-content: space-around;
      margin: 10px 8px;

    }

    ul>li {
      list-style-type: none;
      margin: 0 8px;
    }

    ul>li>a {
      text-decoration: none;
      color: white;
    }

    ul>li>a:hover {
      color: goldenrod;
    }

    form {
      /* border: 2px solid gray; */
      background-color: white;
      border-radius: 2px;
      box-shadow: -1px 5px 10px gray;
      margin-top: 100px;
      width: 40%;
    }

    form>input {
      background-color: burlywood;

    }

    form>h1::selection {
      background-color: burlywood;
      color: black;
      text-shadow: none;
    }

    form::selection {
      background-color: burlywood;
    }

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img src="../images/SiteBlack.png" alt="CareerFair" height="250px" width="250px">
      <span class="brand-text font-weight-light">CareerFair</span>
    </div>

    <!-- Navbar -->
    <nav class="contanier-fluid">
      <a href="/" class="brand-link">
        <img src="../images/SiteBlack.png" alt="CareerFair" height="60px" width="100px">
      </a>

      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/company_profile">Company Profile</a></li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->

    <!-- add company form -->
    <form action="{{ URL::to('admin_home')}}" method="POST" class="form-group p-3 mx-auto mt-4" enctype="multipart/form-data">
      @csrf
      <h1 style="color:black;text-shadow:-2px 2px 2px darkgray;padding:10px;font-family: 'Manrope', sans-serif;">ADD COMPANY</h1>
      Name:<input class="form-control bg-dark " type="text" name="name" id="name" placeholder="Enter  Name" required>
      Email:<input class="form-control bg-dark " type="email" name="email" id="email" placeholder="Enter email" required>
      Contact:<input class="form-control bg-dark " type="number" name="contact" id="contact" placeholder="Enter contact" required>
      Discription:<textarea name="discription" id="disp" class="form-control bg-dark" placeholder="Discription"></textarea>
      Salary:<input class="form-control bg-dark " type="number" name="salary" id="salary" placeholder="Salary" required>
      Location:<input class="form-control bg-dark " type="text" name="address" id="address" placeholder="Enter location" required>
      Website:<input class="form-control bg-dark " type="url" name="website" id="website" placeholder="Enter website link" required>
      Logo: <br>
      <input type="file" name="image" id="logo" class="bg-dark">
      <button type="submit" class="btn btn-dark d-block mt-2 px-5">Submit</button>
    </form>
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