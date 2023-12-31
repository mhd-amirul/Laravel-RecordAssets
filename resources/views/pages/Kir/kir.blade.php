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

            <a href="" class="btn btn-sm btn-primary shadow-sm mr-2">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Kir
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
                            <th>Kode Ruang	Tahun</th>
                            <th>Kode Barang</th>
                            <th>No.Register</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('script')
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
                { data: 'tanggal', name: 'tanggal' },
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

