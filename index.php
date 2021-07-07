<!DOCTYPE html>
<html>
<head>
	<title>Postest 4 dan 5</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="atas">
		<div class="logo">
			<img src="tif.png" width="30" height="30">
			<a href="">TIFUAD</a></div>
		<div class="kanan"><ul>
			<li><a href="">Sign Up</a></li>
			<li><a href="">Login</a></li>
		</ul></div>
	</div>
	<div class="konten">
		<div class="text">
			<h1>Formulir Data Diri</h1>
			<p>Isikan data diri anda dengan lengkap pada form berikut, Data yang sudah di isi akan disimpan dalam sistem kami.</p>
			<img src="kartun.png" width="500px" height="400px">
		</div>
		<div class="form">
			<form>
				<input class="inp" type="text" name="text" placeholder="Masukkan nama anda...">
				<input class="inp" type="text" name="text" placeholder="Masukkan alamat anda...">
				<input class="inp" type="text" name="text" placeholder="Masukkan no.hp anda...">
				<label class="label">Jenis Kelamin</label><br>
					<div class="radio">
					<input type="radio" name="gender" value="Laki Laki" id="male">
					<label for="male">Laki Laki</label>
					<input type="radio" name="gender" id="female">
					<label for="female">Perempuan</label>
				</div>
			</form>
			<select>
				<option>--Pilih Agama--</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Buddha</option>
			</select>
			<label class="ket">Keterangan</label><br>
			<textarea cols="66" rows="7" >Tuliskan Keterangan...
			</textarea>
			<div class="tombol">
				<input class="btn" type="submit" name="submit" value="Submit">
				<input class="batal" type="submit" name="Close" value="Close">	
			</div>
		</div>
	</div>
	<div class="foot">
		<small class="cop">Aldinnawulan &copy; CopyRight2021</small>
	</div>
</body>
</html>