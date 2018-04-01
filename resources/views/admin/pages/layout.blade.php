<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ url('img/favicon.png')}}">

  <title>ადმინისტრატორის პანელი</title>

  <!-- Bootstrap CSS -->
  <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ url('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ url('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ url('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{ url('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ url('css/owl.carousel.css')}}" type="text/css">
  <link href="{{ url('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ url('css/fullcalendar.css')}}">
  <link href="{{ url('css/widgets.css')}}" rel="stylesheet">
  <link href="{{ url('css/style.css')}}" rel="stylesheet">
  <link href="{{ url('css/mystyle.css')}}" rel="stylesheet">
  <link href="{{ url('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ url('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ url('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

</head>

<body>
  <section id="container" class="">
    @if(Auth::check())
    @include('admin.pages.header')
    @yield('content')
    @else
    @yield('login') 
    @endif
  </section>


  
  <!-- javascripts -->

  <script>

    var header = document.getElementById("idforactive");
    var btns = header.getElementsByClassName("activeitem");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
  <script src="{{ url('js/jquery.js')}}"></script>
  <script src="{{ url('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ url('js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ url('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ url('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ url('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ url('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ url('assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{ url('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{ url('js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{ url('js/fullcalendar.min.js')}}"></script>
  <!-- Full Google Calendar - Calendar -->
  <script src="{{ url('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
  <!--script for this page only-->
  <script src="{{ url('js/calendar-custom.js')}}"></script>
  <script src="{{ url('js/jquery.rateit.min.js')}}"></script>
  <!-- custom select -->
  <script src="{{ url('js/jquery.customSelect.min.js')}}"></script>
  <script src="{{ url('assets/chart-master/Chart.js')}}"></script>

  <!--custome script for all page-->
  <script src="{{ url('js/scripts.js')}}"></script>
  <!-- custom script for this page-->
  <script src="{{ url('js/sparkline-chart.js')}}"></script>
  <script src="{{ url('js/easy-pie-chart.js')}}"></script>
  <script src="{{ url('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{ url('js/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{ url('js/xcharts.min.js')}}"></script>
  <script src="{{ url('js/jquery.autosize.min.js')}}"></script>
  <script src="{{ url('js/jquery.placeholder.min.js')}}"></script>
  <script src="{{ url('js/gdp-data.js')}}"></script>
  <script src="{{ url('js/morris.min.js')}}"></script>
  <script src="{{ url('js/sparklines.js')}}"></script>
  <script src="{{ url('js/charts.js')}}"></script>
  <script src="{{ url('js/jquery.slimscroll.min.js')}}"></script>
</body>
</html>