$(document).ready(function() {
    var table = $('#example').DataTable( {
        scrollY:        "400px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            heightMatch: 'none'
        }
    } );
} );