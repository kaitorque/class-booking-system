<div class="header-menu-wrapper header-menu-wrapper-left py-lg-2" id="kt_header_menu_wrapper">
  <!--begin::Menu-->
  <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
    <!--begin::Nav-->
    <ul class="menu-nav ">
      @if(Session::get('loginas') == 'stud')
      <li class="menu-item   @if(Session::get('pagetitle') == 'dashboard')
      menu-item-active
      @endif"  aria-haspopup="true">
        <a  href="{{route('stud_dashboard')}}" class="menu-link ">
          <span class="menu-text">Dashboard</span>
        </a>
      </li>
      <li class="menu-item  @if(Session::get('pagetitle') == 'classfind')
      menu-item-active
      @endif menu-item-submenu menu-item-rel" aria-haspopup="true">
        <a  href="{{route('stud_class_find')}}" class="menu-link">
          <span class="menu-text">Find Classes</span>
        </a>
      </li>
      @endif
      @if(Session::get('loginas') == 'edu')
      <li class="menu-item  @if(Session::get('pagetitle') == 'dashboard')
      menu-item-active
      @endif "  aria-haspopup="true">
      <li class="menu-item @if(Session::get('pagetitle') == 'dashboard') menu-item-active @endif "  aria-haspopup="true">
        <a href="{{route('edu_dashboard')}}" class="menu-link ">
          <span class="menu-text">Dashboard</span>
        </a>
      </li>
      <li class="menu-item  @if(Session::get('pagetitle') == 'classfind')
      menu-item-active
      @endif menu-item-submenu menu-item-rel" aria-haspopup="true">
      <li class="menu-item @if(Session::get('pagetitle') == 'findclass') menu-item-active   @endif" aria-haspopup="true">
        <a href="{{route('edu_class_find')}}" class="menu-link">
          <span class="menu-text">Find Classes</span>
        </a>
      </li>
      @endif
      <span class="menu-desc">
      </span>
      <i class="menu-arrow"></i></a>


</li>

<li class="menu-item  menu-item-submenu"  data-menu-toggle="click" aria-haspopup="true">

<a  href="javascript:;" class="menu-link menu-toggle">
<!--end::Nav-->
  </div>
  <!--end::Menu-->
</div>
