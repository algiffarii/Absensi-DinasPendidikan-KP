<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset('assets/gg.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-md">GeekGarden Attendance</span>
    </a>

    <!-- Sidebar -->
    @if(!Session::get("isAdmin"))
        @include("layouts.backend-dashboard.adminSideBarItem")
    @else
        @include("layouts.backend-dashboard.pegawaiSideBarItem")
    @endif
    <!-- /.sidebar -->
</aside>
