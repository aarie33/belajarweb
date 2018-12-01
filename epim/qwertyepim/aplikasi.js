(function($) {
	$(document).ready(function(e){
		//deklarasi variabel
		var kd_berita = 0;
		var	main = "berita.data.php";
		var page_jaringan = "data.jaringan.php";
		var page_animasi = "data.animasi.php";
		// tampilkan data mahasiswa dari berkas mahasiswa.data.php 
		// ke dalam <div id="data-mahasiswa"></div>
		$("#data-konten").load(main);
		//tombol tambah

		$('.data-animasi').bind("click", function(){
			$("#data-konten").load("data.animasi.php");
		});
		$('.data-jaringan').bind("click", function(){
			$("#data-konten").load(page_jaringan);
		});
		
		$('.ubah, .tambah').live("click", function(){
			
			var url = "berita.form.php";
			kd_berita = this.id;

			if(kd_berita != 0) {
				// ubah judul modal dialog
				$("#myModalLabel").html("Ubah Berita");
			} else {
				// saran dari mas hangs 
				$("#myModalLabel").html("Tambah Berita");
			}
			$.post(url, {id: kd_berita} ,function(data){
				$(".modal-body").html(data).show();
			});
		});//akhir fungsi tambah dan ubah
		$('.approve-jaringan').live("click", function(){
			var url = page_jaringan;
			var id_daftar = this.id;
			var answer = confirm("Pastikan Data Peserta Telah Benar !");
			if(answer){
				$.post(url, {approve: id_daftar} ,function(){
					$("#data-konten").load(page_jaringan);
				});
			}
		});
		$('.approve-animasi').live("click", function(){
			var url = page_animasi;
			var id_daftar = this.id;
			var answer = confirm("Pastikan Data Peserta Telah Benar !");
			if(answer){
				$.post(url, {approve: id_daftar} ,function(){
					$("#data-konten").load(page_animasi);
				});
			}
		});
		
		$('.hapus').live("click", function(){
			var url = "berita.proses.php";
			kd_berita = this.id;
			var answer = confirm("Apakah anda yakin ?");
			if(answer){
				$.post(url, {hapus: kd_berita} ,function(){
					
					$("#data-konten").load(main);
				});
			}
		});
		$("#simpan-berita").bind("click", function(event){
			var url = "berita.proses.php";
			var v_id = $('input:text[name=id]').val();
			var v_judul = $('input:text[name=judul]').val();
			var v_isi = $('textarea[name=isi]').val();
			var v_status = $('select[name=status]').val();
			var v_tanggal = $('input:text[name=tanggal]').val();
			//confirm("tanggal :"+v_tanggal);
			$.post(url, {id: v_id, judul: v_judul, isi: v_isi, status: v_status, tanggal:v_tanggal} ,function(){
				$("#data-konten").load("berita.data.php");
				$('#dialog-berita').modal('hide');
				$("#myModalLabel").html("Tambah Berita");
			});
		});//akhir fungsi simpan



	});
}) (jQuery);
