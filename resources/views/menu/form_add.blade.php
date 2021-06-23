 <div class="card mb-3 shadow no-b r-0">
     <div class="card-header white">
         <div class="card-title">Tambah Data Nasabah</div>
     </div>
     <div class="ket"></div>


     <div class="card-body">
         <form id="exampleValidation" method="POST" class="form-material">
             <div class="form-group row">

                 <label for="name" class="col-md-2 text-left">Nama Menu <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="name" name="name">
                     </div>
                 </div>

                 <label for="name" class="col-md-2 text-left">Route / Url <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="route" name="route">
                     </div>
                 </div>
             </div>

             <div class="form-group row">

                 <label for="name" class="col-md-2 text-left">Icon <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="icon" name="icon">
                     </div>
                 </div>

                 <label for="name" class="col-md-2 text-left">Induk Menu <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="parent" name="parent">
                     </div>
                 </div>
             </div>

             <div class="form-group row">

                 <label for="name" class="col-md-2 text-left">User Akses <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="user_role" name="user_role">
                     </div>
                 </div>

                 <label for="name" class="col-md-2 text-left">Anak Menu <span class="required-label">*</span></label>
                 <div class="col-md-4">
                     <div class="form-inline">
                         <input type="text" class="form-control" id="child" name="child">
                     </div>
                 </div>

             </div>
             <div class="card-action">
                 <div class="row">
                     <div class="col-md-12">
                         <button class="btn btn-primary btn-md" type="submit">Simpan</button>
                         <button class="btn btn-danger">Batal</button>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>


 <script type="text/javascript">
     $(function() {
         $('.simpan').on('submit', function(e) {
             e.preventDefault();
             $.ajax({
                 url: "{{ route('master.nasabah.store') }}",
                 method: "POST",
                 data: $(this).serialize(),
                 chace: false,
                 async: false,
                 success: function(data) {
                     $('#datatable').DataTable().ajax.reload();
                     $('#formmodal').modal('hide');
                     $.notify({
                         icon: 'flaticon-alarm-1',
                         title: 'Info',
                         message: 'Berhasil di tambahkan',
                     }, {
                         type: 'secondary',
                         placement: {
                             from: "center",
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
