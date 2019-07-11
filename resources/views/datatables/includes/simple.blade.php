<table id="simple-datatable-example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary, $</th>
            <th>Employment date</th>

        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#simple-datatable-example').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('simple_datatables_users_data') }}",
                columns: [
                    { name: 'name' },
                    { name: 'position' },
                    { name: 'salary' },
                    { name: 'employment_date' },


                ],
            });
        });
    </script>
@endpush