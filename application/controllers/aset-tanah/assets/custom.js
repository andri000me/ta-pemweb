$(function () {
	
	if($("#message_header").length)
	{
		setTimeout(function(){
			$("#message_header").hide("fade");
		},3000);
	}
	
	if($(".data-render").length > 0)
	{
		$('.data-render').dataTable().fnDestroy();
		var oTable = $('.data-render').dataTable({
            "bProcessing": true,
            "bServerSide": false,
            "responsive": true,
            "dom": 'Bfrtip',
            "sPaginationType": "full_numbers",        
	        "iDisplayStart ": 5,
	        "buttons": [
		        'excel', 'pdf', 'print'
		    ],
		    "language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Maaf, hasil pencarian tidak ada",
            "info": "Halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(Filter dari _MAX_ jumlah data)",
            "search": "Cari ",
        	}
        });
	}

	
});
