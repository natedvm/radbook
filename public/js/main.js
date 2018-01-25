$(document).ready(function () {

    $('#studyTable').DataTable({
        "columnDefs": [
            {
                "targets": [0,1, 2],
                "visible": false
            },
            {
                "className": "dt-center",
                "targets": "_all"
            }
        ]
    });
});

