@extends("layout.app")

@push('jquery')
    @include("includes.style_2")

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <a href="#" class="btn btn-sm btn-primary shadow-sm mr-2" class="btn btn-sm btn-primary shadow-sm mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Barang
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
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Asal Barang</th>
                            <th>Kondisi</th>
                            <th>Tahun</th>
                            <th>Harga</th>
                            <th>Kelompok Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <!-- add new item form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang</h1>
            </div>
            <div class="modal-body">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kd_brg" class="col-form-label">Kode Barang:</label>
                        <input type="text" class="form-control" id="kd_brg" value="{{ old("kd_brg") }}" name="kd_brg">
                    </div>
                    <div class="mb-3">
                        <label for="nm_brg" class="col-form-label">Nama Barang:</label>
                        <input type="text" class="form-control" id="nm_brg" value="{{ old("nm_brg") }}" name="nm_brg">
                    </div>
                    <div class="mb-3">
                        <label for="asal" class="col-form-label">Asal Barang:</label>
                        <input type="text" class="form-control" id="asal" value="{{ old("asal") }}" name="asal">
                    </div>
                    <div class="mb-3">
                    <label class="col-form-label">Status:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>select...</option>
                            <option value="1">Active</option>
                            <option value="0">Nonactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="col-form-label">Tahun Barang:</label>
                        <input type="text" class="form-control" id="tahun" value="{{ old("tahun") }}" name="tahun">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="col-form-label">Harga Barang:</label>
                        <input type="text" class="form-control" id="harga" value="{{ old("harga") }}" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="kelompok_brg" class="col-form-label">Kelompok Barang:</label>
                        <input type="text" class="form-control" id="kelompok_brg" value="{{ old("kelompok_brg") }}" name="kelompok_brg">
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
                    { data: 'gol', name: 'gol' },
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

