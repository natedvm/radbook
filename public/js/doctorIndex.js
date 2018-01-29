$(document).ready(function () {

    $('#studyTable').DataTable({
        "columnDefs": [
            {
                "className": "dt-center",
                "targets": "_all"
            },
            {
                "width": 100,
                "targets": 'dvmax_id'
            }
        ]
    });
});

