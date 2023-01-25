<section class="content">
    @if(Session::get("isAdmin"))
        @include("Dashboard.adminContent")
    @else
        @include("Dashboard.pegawaiContent")
    @endif
</section>
