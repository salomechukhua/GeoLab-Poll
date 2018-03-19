
<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="{!!url('/admin/dashboard')!!}" class="logo">Geo<span class="lite">lab</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
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
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">
      <li class="active">
        <a class="" href="{!!url('/admin/dashboard')!!}">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_document_alt"></i>
          <span>Forms</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="form_component.html">Form Elements</a></li>
          <li><a class="" href="form_validation.html">Form Validation</a></li>
        </ul>
      </li> -->
      <!-- <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_desktop"></i>
          <span>UI Fitures</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="general.html">Elements</a></li>
          <li><a class="" href="buttons.html">Buttons</a></li>
          <li><a class="" href="grids.html">Grids</a></li>
        </ul>
      </li> -->
      <!-- <li>
        <a class="" href="widgets.html">
          <i class="icon_genius"></i>
          <span>Widgets</span>
        </a>
      </li> -->

      <li>
        <a class="" href="chart-chartjs.html">
          <i class="icon_piechart"></i>
          <span>სტატისტიკა</span>

        </a>

      </li>

      <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_table"></i>
          <span>ცხრილები</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="{{url('/admin/questions/programming')}}">პროგრამირება</a></li>
          <li><a class="" href="{{url('/admin/questions/pol-design')}}">პოლიგრ. დიზაინი</a></li>
          <li><a class="" href="basic_table.html">შრიფტის დიზაინი</a></li>
        </ul>
      </li>


      


      

      <li class="sub-menu">
        <a href="javascript:;" class="">
          <i class="icon_documents_alt"></i>
          <span>გვერდები</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="profile.html">პროფილი</a></li>
          <li><a class="" href="login.html"><span>ავტორიზება</span></a></li>
          <li><a class="" href="contact.html"><span>კონტაქტი</span></a></li>
        </ul>
      </li>

      <li>
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
