// Sweet Alert
const flashData = $('.flash-data').data('flashdata');
// console.log(flashData);
if (flashData) {
    Swal.fire({
        title: 'Success',
        text: '' + flashData,
        type: 'success'
    });
}

/* Login Gagal */
const flashLogin = $('.flash-data-login').data('flashdata');

if (flashLogin ) {
    Swal.fire({
        title:'Error',
        text: 'Gagal' +' '+ flashLogin,
		icon :'warning'
    });

}
/* Log Out */
const flashLogout = $('.flash-data-logout').data('flashdata');

if (flashLogout ) {
    Swal.fire({
        title:'Success',
        text: 'Success' +' '+ flashLogout,
		icon :'success'
    });
}
const flashDataSuccess = $('.flash-data-success').data('flashdata');
if (flashDataSuccess) {
    Swal.fire({
        title: 'Success',
        text: '' + flashDataSuccess,
        type: 'success'
    });
}
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin',
        text: "data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
});

$(document).ready(function () {
	// var base = $('#base_url').data('id')
    $('#table_').DataTable({
        pageLength: 10
    });

	$('#table_sub_defect').DataTable({
        pageLength: 10
    });
  
	const base = $('#base_url').data('id');
	let dataTable;
	let filteredData; // Variabel untuk menyimpan data yang telah difilter
  
	dataTable = $('#tbl_display').DataTable({
	  // ... konfigurasi DataTables
	  responsive: true
	});
  
	$('#filter_gedung').on('change', function() {
	  const factory = $(this).val();
	//   alert(factory);
	  const url = `${base}dashboard/DataFindingBd/${factory}`;
	  console.log("Mengirim permintaan AJAX ke:", url);

	  $('#tbl_display').addClass('loading');
	  if (factory) {
		$.ajax({
		  type: 'GET',
		  url: url,
		  dataType: 'json',
		  success: function(data) {
			console.log("Data JSON yang diterima:", data);
			if ($.isArray(data) && data.length > 0) {
			  dataTable.clear().draw();
			  filteredData = data; // Simpan data yang telah difilter
			  data.forEach(function(item) {
				const picture = item.picture ? `<img src="${base}assets/img/img-finding/${item.picture}" alt="Defect Photo" width="50">` : '<img src="' + base + 'assets/img/no-images.png" alt="No Image" width="50">';
				dataTable.row.add([
					item.id_finding || "", // Gunakan properti yang sesuai, berikan nilai default jika tidak ada
					item.date || "",
					item.gedung || "",
					item.cell || "",
					item.model || "",
					item.artikel || "",
					item.nama_defect_class || "",
					item.nama_defect_sub_class || "",
					item.picture ? '<img src="' + base + 'assets/img/img-finding/'+ item.picture + '" alt="Defect Photo" width="50">' : "", // Gambar dengan pengecekan
					item.defect_source || "",
					item.defect_area || "",	 
					// ... properti lainnya
					'<button class="btn btn-success detail-button" data-id="' + (item.id_finding || "") + '">Detail</button>'
				  ]).draw();
			  });
			} else {
			  console.log("Data tidak ditemukan atau formatnya salah.");
			  dataTable.clear().draw();
			  $('#tbl_display').append('<tr><td colspan="12">Data tidak ditemukan</td></tr>');
			}
		  },
		  error: function(error) {
			console.error("Error fetching data:", error);
			alert("Terjadi kesalahan saat memuat data.");
		  },
		  complete: function() {
			$('#tbl_display').removeClass('loading');
		  }
		});
	  } else {
		// Logika untuk menampilkan semua data
		
		
	  }
	});
  
	$('#tbl_display').on('click', '.detail-button', function() {
	  const id = $(this).data('id');
	  const data = filteredData.find(item => item.id_finding == id); // Cari data yang sesuai

	  console.log(data);
	  if (data) {
		$.ajax({
		  type: "GET",
		  url: `${base}dashboard/DataFindingId/${id}`,
		  dataType: "json",
		  success: function(data) {
			$('#date').val(data.date);
			$('#factory').val(data.gedung);
			$('#cell').val(data.cell);
			$('#artikel').val(data.artikel);
			$('#model').val(data.model);
			$('#defect_stage').val(data.defect_stage);
			$('#defectName2').val(data.nama_defect_sub_class);
			$('#pairs').val(data.pairs);
			$('#defect_source').val(data.defect_source);
			$('#self_inspect').val(data.self_inspect);
			$('#who_defect_go').val(data.who_defect_go);
			$('#count').val(data.count);
			$('#defect_area').val(data.defect_area);
			$('#who_stop_defect').val(data.who_stop_defect);
			$('#count2').val(data.count2);
			$('#remark').val(data.remark);
			$("#picture").attr("src", base + "assets/img/img-finding/" + data.picture);
		  },
		  error: function(error) {
			console.error("Error fetching detail data:", error);
			alert("Terjadi kesalahan saat memuat detail data.");
		  }
		});
	  } else {
		console.log("Data tidak ditemukan.");
		alert("Data tidak ditemukan.");
	  }
  
	  $('#modalDisplay').modal('show');
	});
  
	function trackingDrsi(ctx) {
	  const gedung = $('#filter_gedung').val();
	  window.open(base + 'Drsitrack/' + gedung);
	}




});









