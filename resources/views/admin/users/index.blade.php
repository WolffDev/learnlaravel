@extends('layouts.admin')

@section('css-content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.css"/>
@endsection

@section('page-title')
    <div class="page-title">
        <h1>Brugere
            <small></small>
        </h1>
    </div>
@endsection

@section('content')
    <table class="table table-bordered striped responsive display no-wrap" id="users-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Fornavn</th>
                <th>Efternavn</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Stemme</th>
                <th>Rolle</th>
                <th>Status</th>
                <th>Tilmeldt</th>
            </tr>
        </thead>
    </table>
@endsection

@section('js-content')
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.13/b-1.2.4/b-html5-1.2.4/b-print-1.2.4/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('page.datatables') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'firstname', name: 'firstname' },
                { data: 'lastname', name: 'lastname' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'voice', name: 'voice' },
                { data: 'role_id', name: 'role_id' },
                { data: 'user_status', name: 'user_status' },
                { data: 'created_at', name: 'created_at' }
            ],
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="' + row['id'] + '">' + data +' '+ row['lastname'] + '</a>';
                    },
                    "targets": 1
                },
                {
                    "visible": false,
                    "targets": [ 0, 2 ]
                }
            ],
            language: {
                search: "Indtast søgeord",
                zeroRecords: "Intet resultat - prøv ny søgning",
                info: "Viser _START_ til _END_ medlemmer af _TOTAL_\.",
                infoFiltered: "(filtreret fra _MAX_ medlemmer)"
            },
            scrollY: 500,
            deferRender: false,
            scroller: true,
            select: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    });
</script>
@endpush
