<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Taufik Sinaw</title>
</head>
<body>
	<form>
		<div class="form-control">
			<label>No</label>
			<input type="number" name="nomor">
		</div>
		<div class="form-control">
			<label>Soal</label>
			<input type="text" name="soal">
		</div>
		<div class="form-control">
			<label>Jawaban A</label>
			<input type="text" name="a">
		</div>
		<div class="form-control">
			<label>Jawaban B</label>
			<input type="text" name="b">
		</div>
		<div class="form-control">
			<label>Jawaban C</label>
			<input type="text" name="c">
		</div>
		<div class="form-control">
			<label>Jawaban D</label>
			<input type="text" name="d">
		</div>
		<div class="form-control">
			<label>Kunci</label>
			<select name="kunci">
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
			</select>
		</div>
		<div class="form-control">
			<input type="button" name="submit" onclick="tambahData()" value="Kirim">
		</div>
	</form>
	<div id="hasil"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		function tambahData() {
			var params = 'aksi=tambah&nomor=' + $('[name=nomor]').val() + '&soal=' + $('[name=soal]').val() + '&a=' + $('[name=a]').val() + '&b=' + $('[name=b]').val() + '&c=' + $('[name=c]').val() + '&d=' + $('[name=d]').val() + '&kunci=' + $('[name=kunci]').val();
			$.ajax({
				type: 'post',
				data: params,
				url: 'table.php',
				success: function(i) {
					$('#hasil').html(i);
					$('form').reset();
				}
			});
		}

		function ubahData(nomor, soal, a, b, c, d, kunci) {
			$('[name=nomor]').val(nomor);
			$('[name=soal]').val(soal);
			$('[name=a]').val(a);
			$('[name=b]').val(b);
			$('[name=c]').val(c);
			$('[name=d]').val(d);
			$('[name=kunci]').val(kunci).change();
		}
		
		function hapusData(nomor) {
			if (confirm('Yakin ingin menghapus?')) {
				$.ajax({
					type: 'post',
					data: 'aksi=hapus&nomor=' + nomor,
					url: 'table.php',
					success: function(i) {
						$('#hasil').html(i);
					}
				});
			}
		}

		$(document).ready(function(){
			$('#hasil').load('table.php');
		});
	</script>
</body>
</html>