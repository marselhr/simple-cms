<script type="text/javascript">
    var table = $("#dataTablePosts");
    $(document).ready(function() {
        table.DataTable({

            processing: true,
            serverSide: true,
            language:{
                paginate:{
                    first: '<i class="mdi-chevron-double-left"></i>',
                    last: '<i class="mdi-chevron-double-right"></i>',
                    previous: '<i class="mdi mdi-chevron-left"></i>',
                    next : '<i class="mdi mdi-chevron-right"></i>'
                }
            },
            ajax: {
                url: "{{ route('admin.cms.posts.datatable') }}",
                'type': "POST",
                'data': (d) => {
                    d._token = '{{ csrf_token() }}'
                }
            },
            columns: [{
                    name: "title",
                    data: "title",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "category",
                    data: "category",
                    orderable: true,
                    searchable: true,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "date",
                    data: "date",
                    orderable: true,
                    searchable: true,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "author",
                    data: "author",
                    orderable: true,
                    searchable: true,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },

                },

                {
                    name: "status",
                    data: "status",
                    orderable: true,
                    searchable: true,
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
                {
                    name: "action",
                    data: "action",
                    render: function(d) {
                        return d == null ? "Tidak Ada" : d;
                    },
                },
            ],
            columnDefs: [],
        });
    });
</script>
