@extends('layouts.template')
@section('content')
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <center>
                        <h4>
                            <i class="icon-wrench"></i>
                            Setting Menu Akses
                        </h4>
                    </center>

                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">

                    <li>
                        <a class="nav-link" onclick="javascript:confirm_del()" id="v-pills-sellers-tab" data-toggle="pill"
                            href="#v-pills-sellers" role="tab" aria-controls="v-pills-sellers"><i
                                class="icon  icon-delete"></i> Delete</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link" id="add_data" href="#"><i class="icon icon-plus-circle"></i> Add
                            New User</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="card my-3 no-b">
            {{-- <div class="card-header">
                <div class="d-flex align-items-right">
                    <button class="btn btn-primary btn-sm" id="add_data">
                        <i class="fa fa-plus"></i>
                        Add Row
                    </button>
                    <button class="btn btn-primary btn-sm" id="add_data" onclick="javascript:confirm_del()">
                        <i class="fa fa-minus"></i>
                        Delete selected
                    </button>
                </div>\
            </div> --}}


            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="formmodal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document" style=" min-width: 65%;">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="title">
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="form_content">
                            </div>
                            <div class="modal-footer border-0">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ROUTE</th>
                                <th>ICON</th>
                                <th>USER ROLE</th>
                                <th>PARENT</th>
                                <th>CHILD</th>
                                <th>ACTION</th>
                                <th>USER CEATED</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets') }}/js/plugin/datatables/datatables.min.js"></script>
    <script>
        // table data
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [1, 'asc'],
            pageLength: 10,
            ajax: {

                url: "{{ route('api.menu') }}",
                method: 'POST',
                _token: "{{ csrf_token() }}",
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false,
                    searchable: false,
                    align: 'center',
                    className: 'text-center'
                },
                {
                    data: 'route',
                    name: 'route'
                }, {

                    data: 'icon',
                    name: 'icon',
                },
                {
                    data: 'user_role',
                    name: 'user_role',
                },
                {
                    data: 'parent,',
                    name: 'parent',
                },
                {
                    data: 'child',
                    name: 'child',
                },
                {
                    data: 'usercreate',
                    name: 'usercreate',
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });
        @include('layouts.tablechecked');

        function del() {
            var c = new Array();
            $("input:checked").each(function() {
                c.push($(this).val());
            });
            if (c.length == 0) {
                $.alert("Silahkan memilih data yang akan dihapus.");
            } else {
                $.post("{{ route('setting.menu.destroy', ':id') }}", {
                    '_method': 'DELETE',
                    'id': c
                }, function(data) {
                    $('#datatable').DataTable().ajax.reload();
                }, "JSON").fail(function() {
                    $('#datatable').DataTable().ajax.reload();
                });
            }
        }

        // addd
        $(function() {
            $('#add_data').on('click', function() {
                $('#formmodal').modal('show');
                addUrl = '{{ route('setting.menu.create') }}';
                $('#form_content').html('<center><h3>Loading ...</h3></center>').load(addUrl);
            });

            // edit
            $('#datatable').on('click', '#edit', function(e) {
                e.preventDefault();
                $('#formmodal').modal('show');
                id = $(this).data('id');
                addUrl = '{{ route('setting.menu.edit', ':id') }}'.replace(':id', id);
                $('#form_content').html('<center><h3>Loading Edit Data ...</h3></center>').load(addUrl);

            })
        });

    </script>
@endsection
