$(document).ready(function () {

    $('#studyTable').DataTable({
        "columnDefs": [
            {
                "targets": [
                    'id',
                    'created_at',
                    'updated_at',
                    'patient_id'
                ],
                "visible": false
            },
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