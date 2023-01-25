<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route("pegawai.doScan-absensi")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kodeAbsensi">Silakan Input Kode yang sudah di share oleh Dosen Pengampu di
                                    bawah ini.</label>
                                <input type="kodeAbsensi" name="kodeAbsensi" class="form-control" id="kodeAbsensi"
                                       placeholder="Kode Absensi">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
