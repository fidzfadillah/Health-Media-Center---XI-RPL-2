<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form-add" action="{{ url('berita', @$berita->id) }}" method="POST">
		@csrf
		<h1>Form Berita</h1>	
		<table cellpadding="6" cellspacing="6">
		@if(!empty($berita))
			@method('PATCH')
		@endif
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" value="{{ old('id', @$berita->id) }}" placeholder="ID"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="{{ old('judul', @$berita->judul) }}" placeholder="Judul"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="{{ old('tanggal', @$berita->tanggal) }}" placeholder="tanggal"></td>
			</tr>
			<tr>
				<td>Berita</td>
				<td><input type="text" name="isi" value="{{ old('isi', @$berita->isi) }}" placeholder="Berita"></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" value="Simpan"></td>
				<td></td>
			</tr>
		</table>
	</form>	
</body>
</html>