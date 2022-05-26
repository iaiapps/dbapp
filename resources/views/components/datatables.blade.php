@push('datatables')
    <link rel="stylesheet" href="{{ url('new_theme') }}/assets/datatables/datatables.min.css" />

    <script src="{{ url('new_theme') }}/assets/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "lengthChange": false,
                "pageLength": 100,
            });
        });
    </script>
@endpush
