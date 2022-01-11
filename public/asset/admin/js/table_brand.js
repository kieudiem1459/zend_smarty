$(document).ready(function () {
    $("#table_brand").DataTable({
        className:'display',
        "paging": true,
        "pagingType": "full_numbers",
        "processing": true,
        "order": ([ 0, "desc" ])
    });
});

