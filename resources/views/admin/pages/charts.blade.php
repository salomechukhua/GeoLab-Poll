@extends('admin.pages.layout')     
@section('content')
<section id="main-content" style="padding-left:30px;">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="icon_piechart"></i> სტატისტიკა</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">მთავარი</a></li>
          <li><i class="icon_piechart"></i>სტატისტიკა</li>

        </ol>
      </div>
    </div>
    <div class="row">
      <!-- chart morris start -->
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <h3>დიაგრამები</h3>
          </header>
        </section>
      </div>
    </div>



    <div class="app">
      <center>
        {!! $chart1->html() !!}
      </center>
    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $chart1->script() !!}

    <br>
    <br>
    <br>

    <div class="app">
      <center>
        {!! $chart2->html() !!}
      </center>
    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $chart2->script() !!}

    <br>







    
  </section>
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="{{ url('js/jquery.js')}}"></script>
<script src="{{ url('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{ url('js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{ url('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ url('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- chartjs -->
<script src="{{ url('assets/chart-master/Chart.js')}}"></script>
<!-- custom chart script for this page only-->
<script src="{{ url('js/chartjs-custom.js')}}"></script>

@endsection