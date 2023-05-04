<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CareerFair | AdminDashboard</title>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
  <!-- google fonts  end-->

  <!-- Google Font: Source Sans Pro -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

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
    </div>

    <!-- Navbar -->

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <nav class="container-fluid">
    <a href="/" class="brand-link">
        <img src="../images/SiteBlack.png" alt="CareerFair" height="60px" width="100px">
      </a>

      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/admin_home">Add Company</a></li>
      </ul>
    </nav>

    <!-- job details form -->
    <form action="{{ URL::to('/companyprofile')}}" method="POST" class="form-group  p-3 mx-auto mt-2 mb-0" enctype="multipart/form-data">
      @csrf
      <h1 style="color:black;text-shadow:-2px 2px 2px darkgray;padding:10px;font-family: 'Manrope', sans-serif;">COMPANY PROFILE</h1>
      <select name="name" id="name" class="form-control bg-dark">
        @foreach($fm as $f)
        <option value="">{{$f->name}}</option>
        @endforeach
      </select><br>
      
      <!-- <input class="form-control mt-2 " type="text" name="name" id="name" placeholder="Enter company" required> -->
      <select name="jobdesc" id="jobdesc" class="form-control bg-dark">
        @foreach($fm as $f)
        <option value="">{{ $f->discription }}</option>
        @endforeach
      </select><br>
<select id="result" name="result" class="form-control bg-dark">
  <option value="job">Job</option>
  <option value="intern">Intern</option>
</select>
<div id="job" style="display:none">
  <div>
  <label>
    <input type="checkbox" value="Paid" name="postiveDrug" />Paid</label>
  <label>
    <input type="checkbox" value="Unpaid" name="postiveDrug" />Unpaid</label>
</div>
</div><br>
<select name="salary" id="salary" class="form-control bg-dark">
        @foreach($fm as $f)
        <option value="">{{ $f->salary }}</option>
        @endforeach
      </select><br>
      <select name="address" id="address" class="form-control bg-dark">
        @foreach($fm as $f)
        <option value="">{{ $f->address }}</option>
        @endforeach
      </select><br>
      <select name="shift" id="shift" class="form-control bg-dark">
        <option value="day">day</option>
        <option value="night">night</option>
      </select>
      <br>
      <div class="d-flex">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logo</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach($fm as $f)
          <a href="#"><img src="./img/{{$f->image}}" alt="" height="50px" width="50px"></a>
          @endforeach
        </div>
      </div>

      <button type="submit" class="btn btn-dark  mx-auto d-block px-5">Submit</button>
    </form>
    <!-- end form -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script>

$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});


    $('#result').on('change', function() {
  $('#job').css('display', 'none');
  if ( $(this).val() === 'intern' ) {
    $('#job').css('display', 'block');
    $('#salary').css('display', 'none');
  }
  if ( $(this).val() === 'job' ) {
    $('#job').css('display', 'none');
    $('#salary').css('display', 'block');
  }
});
 </script>
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
  <!-- <script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script> -->

  <!-- <script>
      $(document).ready(function(){
        $("#name").on('keyup',function(){
          var value = $(this).val();
          $.ajax({
            url:"{{ route('companyprofile') }}",
            type:"GET",
            data:{'name':value},
            success:function(data){
              $("#company_list").html(data);
            }
          });
        });

        $(document).on('click','li',function(){
          var value = $(this).text();
          $("#name").val(value);
          $("#company_list").html("");
        });

      });
    </script> -->

  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../dist/js/demo.js"></script>  -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!-- <script src="../dist/js/pages/dashboard.js"></script> -->
</body>


</html>