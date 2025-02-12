
$(document).ready(function () {
	var base = $('#base_url').data('id')
    $('#table_').DataTable({
        pageLength: 10
    });

    $('#tbl_display').DataTable({
		searching: true,
		pageLength: 10,
		lengthMenu: [10, 20, 50, 100, 200, 500],
		paging:   true,
        ordering: false,
        info:     false
		
    });

	$('#gedung').on('change', () => {
		let factory = $('#gedung').val();
		if (factory) {
			$('#tbl_display').DataTable().destroy();
			$('#tbl_display').DataTable({
				processing: true,
				serverSide: true,
				pageLength: 10,
				order: [],
				
				"ajax": {
					"url": base + `dashboard/DataFindingBd/` + factory, 
					"type": "POST"
				},
					
			});
		}
	});
});
