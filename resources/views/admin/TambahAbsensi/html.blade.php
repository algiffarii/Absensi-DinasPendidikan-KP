<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Buat Absensi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <p class="login-box-msg">Silahkan Memasukkan Rentang Absensi</p>
            <form action="{{route("admin.tambah-absensi")}}" method="post">
                @csrf
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        Berhasil Menambahkan Absensi
                    </div>
                @endif

                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                @csrf

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="date_range">Rentang Waktu:</label>
                                <div id="date_range" class="row">
                                    <div class="col-6">
                                        <input type="datetime-local" class="form-control" name="start_date"
                                               value="{{\Carbon\Carbon::now()->toDateTimeString()}}">
                                    </div>
                                    <div class="col-6">
                                        <input type="datetime-local" class="form-control" name="end_date"
                                               value="{{\Carbon\Carbon::now()->endOfDay()->toDateTimeString()}}">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Jenis Absensi</label>
                                <select class="custom-select form-control-border" id="Jenis_Absensi" name="jenis_absensi">
                                    <option value="datang">Datang</option>
                                    <option value="pulang">Pulang</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Buat Absensi Baru</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
