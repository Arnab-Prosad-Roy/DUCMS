<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{asset('public/backends/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">RockerAdmin</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li class="active">
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul>
      </li>
      <li class="">
        <a href="{{route('sliderList')}}" class="waves-effect">
          <i class="icon-home"></i> <span>Slider</span> <i class="pull-right"></i>
        </a>
      </li>      
      <li class="">
        <a href="{{route('memberList')}}" class="waves-effect">
          <i class="icon-home"></i> <span>Faculty Members</span> <i class="pull-right"></i>
        </a>
      </li>
    </ul>
	 
   </div>