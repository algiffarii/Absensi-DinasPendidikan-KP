<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Hasil Absensi</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Cetak Laporan</a>
    </li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a class="dropdown-item">
                <form action=""  class="dropitem" method="get">
                    @csrf
                    <button class="btn btn-flat"><i class="fas fa-user-cog"></i></button>
                    Edit Profile
                </form>
            </a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item">
                <form action=""  class="dropitem" method="POST">
                    @csrf
                    <button class="btn btn-flat"><i class="fas fa-sign-out-alt"></i></button>
                    Logout
                </form>
            </a>
        </div>
    </li>
</ul>
