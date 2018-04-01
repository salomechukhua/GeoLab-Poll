
<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="{!!url('/admin/dashboard')!!}" class="logo">Geolab<span class="lite"> polls</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form" action="{{ url('/admin/search') }}" method="GET">
          <input name="search" class="form-control" placeholder="ძიება" type="text">
        </form>
      </li>
    </ul>
    <!--  search form end -->
  </div>

  <div class="top-nav notification-row">
    <!-- notificatoin dropdown start-->
    <ul class="nav pull-right top-menu">



      <!-- user login dropdown start-->
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="profile-ava">
            <img style="width:20px; height:20px;" alt="" src="https://cdn4.iconfinder.com/data/icons/bussines-people/572/woman-glasses-computer-512.png">
          </span>
          <span class="username">{!!Auth::user()->name!!}</span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li class="eborder-top">
            <a href="{!!url('/admin/pages/profile')!!}"><i class="icon_profile"></i> პროფილი</a>
          </li>

          <li>
            <a href="{!!url('/admin/logout')!!}"><i class="icon_key_alt"></i> გამოსვლა</a>
          </li>

        </ul>
      </li>
      <!-- user login dropdown end -->
    </ul>
    <!-- notificatoin dropdown end-->
  </div>
</header>

<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse " style="width: 200px;">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="idforactive">
      <li class="activeitem">
        <a class="" href="{!!url('/admin/dashboard')!!}">
          <i class="icon_house_alt"></i>
          <span>მთავარი</span>
        </a>
      </li>
      

      <li class="activeitem">
        <a class="" href="{{url('/admin/pages/charts')}}">
          <i class="icon_piechart"></i>
          <span>სტატისტიკა</span>

        </a>

      </li>

      <li class="activeitem">
        <a class="" href="{{url('/admin/questions')}}">
          <i class="icon_table"></i>
          <span>ცხრილი</span>

        </a>

      </li>
      
      <li class="activeitem">
        <a class="" href="{{url('/admin/questions/create')}}">
          <i class="icon_document"></i>
          <span>კითხვის დამატება</span>

        </a>

      </li>
      
            

      <li class="sub-menu activeitem">
        <a href="javascript:;" class="">
          <i class="icon_documents_alt"></i>
          <span>გვერდები</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{url('/admin/pages/profile')}}">პროფილი</a></li>
          <!-- <li><a class="" href="{{url('/admin/questions/programming')}}"><span>კონტაქტი</span></a></li> -->
        </ul>
      </li>

      <li class="activeitem">
        <a class="" href="chart-chartjs.html">
          <i class="icon_trash"></i>
          <span>ნაგვის ყუთი</span>

        </a>

      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
    <!--sidebar end-->
