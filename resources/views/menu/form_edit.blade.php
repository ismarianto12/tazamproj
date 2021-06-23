<div class="card">
    <div class="card-header">
        <div class="card-title">Edit Data Nasabah</div>
    </div>
    <div class="ket"></div>

    <form id="exampleValidation" method="POST" class="simpan">

        <div class="card-body">
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Nik <span class="required-label">*</span></label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $no_ktp }}">
                </div>

                <label for="name" class="col-md-2 text-left">Nama <span class="required-label">*</span></label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Jenis Kelamin <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">

                    <select class="form-control" name="jk" id="jk">
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <label for="name" class="col-md-2 text-left">Tempat lahir <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                        value="{{ $tempat_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Tgl lahir <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $tgl_lahir }}">
                </div>

                <label for="name" class="col-md-2 text-left">Alamat <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $alamat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Kelurahan <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="{{ $kelurahan }}">
                </div>
                <label for="name" class="col-md-2 text-left">Propinsi <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="propinsi" name="propinsi" value="{{ $propinsi }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Kecamatan <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="nik" name="kecamatan" value="{{ $kecamatan }}">
                </div>
                <label for="name" class="col-md-2 text-left">Kodepos <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{ $kodepos }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Alamat domisili <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="alamat_domisili" name="alamat_domisili"
                        value="{{ $alamat_domisili }}">
                </div>
                <label for="name" class="col-md-2 text-left">Kelurahan domisili <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="kelurahan_domisili" name="kelurahan_domisili"
                        value="{{ $kelurahan_domisili }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Kecamatan Domisili <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="kecamatan_domisili" name="kecamatan_domisili"
                        value="{{ $kecamatan_domisili }}">
                </div>
                <label for="name" class="col-md-2 text-left">Status Pernikahan <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="status_pernikahan" name="status_pernikahan"
                        value="{{ $status_pernikahan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Kewarganegaraan <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <select class="form-control" name="kewarganegaraan" id="Kewarganegaraan">
                        <option value="WNA">WNA</option>
                        <option value="WNI">WNI</option>
                    </select>
                </div>
                <label for="name" class="col-md-2 text-left">Nama Ibu kandung <span
                        class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung"
                        value="{{ $nama_ibu_kandung }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Npwp <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="npwp" name="npwp" value="{{ $npwp }}">
                </div>
                <label for="name" class="col-md-2 text-left">Telp Rumah <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="tlp_rumah" name="tlp_rumah"
                        value="{{ $tlp_rumah }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Hanphone. <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="hp" name="hp" value="{{ $hp }}">
                </div>
                <label for="name" class="col-md-2 text-left">E -mail <span class="required-label">*</span></label>
                <div class="col-lg-4 col-md-9 col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" value="{{ $email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-2 text-left">Jenis Pekerjaan <span
                        class="required-label">*</span></label>
                <div class="col-lg-4">
                    <input type=" text" class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan"
                        value="{{ $jenis_pekerjaan }}">
                </div>
            </div>
        </div>


        <div class="card-action">
            <div class="row">
                <div class="col-md-12">
                    <input class="btn btn-success" type="submit" value="Simpan">
                    <button class="btn btn-danger">Batal</button>
                </div>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
    $(function() {
        $('.simpan').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('master.nasabah.update', $id) }}",
                method: "PATCH",
                data: $(this).serialize(),
                chace: false,
                async: false,
                success: function(data) {
                    $('#datatable').DataTable().ajax.reload();
                    $('#formmodal').modal('hide');
                    $.notify({
                        icon: 'flaticon-alarm-1',
                        title: 'Info',
                        message: 'Berhasil di edit',
                    }, {
                        type: 'secondary',
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        time: 1000,
                        z_index: 2000
                    });
                },
                error: function(data) {
                    var div = $('#container');
                    setInterval(function() {
                        var pos = div.scrollTop();
                        div.scrollTop(pos + 2);
                    }, 10)
                    err = '';
                    respon = data.responseJSON;
                    $.each(respon.errors, function(index, value) {
                        err += "<li>" + value + "</li>";
                    });
                    //  $('.ket').html(
                    //      "<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Perahtian donk!</strong> " +
                    //      respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                    $.notify({
                        icon: 'flaticon-alarm-1',
                        title: 'Error Silahkan Perbaiki form berikut :',
                        message: err,
                    }, {
                        type: 'secondary',
                        placement: {
                            from: "top",
                            align: "right"
                        },
                        time: 3000,
                        z_index: 2000
                    });

                }
            })
        });
    });

</script>
