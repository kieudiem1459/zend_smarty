$(document).ready(function () {
    $('#table_product').DataTable({
        className:'display',
        "paging": true,
        "pagingType": "full_numbers",
        "order": ([ 0, "desc" ]),
        
    });
});

