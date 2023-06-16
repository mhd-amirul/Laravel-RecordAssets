@extends("layout.app")

@push('jquery')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <a href="" class="btn btn-sm btn-primary shadow-sm mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Lokasi
            </a>
            <a href="" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Download PDF
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <table class="table table-bordered" id="email-table"  width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Lokasi</th>
                            <th>Nama Lokasi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- add new location form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Lokasi</h1>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kd_lok" class="col-form-label">Kode Lokasi:</label>
                        <input type="text" class="form-control" id="kd_lok" value="{{ old("kd_lok") }}" name="kd_lok">
                    </div>
                    <div class="mb-3">
                        <label for="nm_lok" class="col-form-label">Nama Lokasi:</label>
                        <input type="text" class="form-control" id="nm_lok" value="{{ old("nm_lok") }}" name="nm_lok">
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="col-form-label">Latitude:</label>
                        <input type="text" class="form-control" id="latitude" value="{{ old("latitude") }}" name="latitude">
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="col-form-label">Longitude:</label>
                        <input type="text" class="form-control" id="longitude" value="{{ old("longitude") }}" name="longitude">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit form</button>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include("includes.script_2")
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
    {{-- <script>
        $(function() {
            let cols = [
                    { data: 'kd_dinas', name: 'kd_dinas' },
                    { data: 'tanggal', name: 'tanggal' },
                    { data: 'status', name: 'status' },
                ]

            $('#email-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'list',
                columns:cols
            });
        });
    </script> --}}
@endpush

