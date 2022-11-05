<!DOCTYPE html>
<html>

<head>
	<title>Data Siswa</title>
</head>

<body>
	<form action="contact.php" method="POST">
		<thead class="text-center">
			<fieldset>
				<legend>Data Siswa</legend>
				<p>
					<label>Nama:</label>
					<input type="text" name="nama" placeholder="Nama lengkap..." />
				</p>
				<p>
					<label>NIS:</label>
					<input type="text" name="nis" placeholder="NIS..." />
				</p>
				<p>
					<label>Kelas</label>
					<input type="text" name="kelas" placeholder="Kelas..." />
				</p>
				<p>
					<label>Tanggal Lahir:</label>
					<input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir..." />
				</p>
				<p>
					<label>Tempat Lahir:</label>
					<input type="text" name="tempat_lahir" placeholder="Tempat Lahir..." />
				</p>
				<p>
					<label>Alamat:</label>
					<textarea name="alamat"></textarea>
				</p>
				<p>
					<label>Jenis kelamin:</label>
					<label><input type="radio" name="jenkel" value="laki-laki" /> Laki-laki</label>
					<label><input type="radio" name="jenkel" value="perempuan" /> Perempuan</label>
				</p>
				<p>
					<label>Agama:</label>
					<select name="agama">
						<option value="islam">Islam</option>
						<option value="kristen">Kristen</option>
						<option value="katholik">Katholik</option>
						<option value="hindu">Hindu</option>
						<option value="budha">Budha</option>
						<option value="khonghucu">Khonghucu</option>
					</select>
				</p>
				<p>
					<input type="submit" name="submit" value="Submit"> <input type="submit" name="submit" value="Cancel">
				</p>
		</thead>
		</fieldset>
	</form>
</body>

</html>