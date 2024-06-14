<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1> Data Mahasiswa <h1>
<form action="outputmahasiswa.php" method="post"> 
<br>
<pre>
Form Input Data Mahasiswa 
NIM                 :<input type="text" name="NIM">
Nama                :<input type="text" name="Nama">
Jenis Kelamin       :<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki <input type="radio" name="jeniskel" value="Perempuan">Perempuan 
Tempat Lahir        :<input type="text" name="TempatLahir"> 
Tanggal Lahir       :<input type="date" name="TanggalLahir">
Jurusan             :<select name="Jurusan">
    <option value="Sistem Informasi">Sistem Informasi 
    <option value="Ilmu Komunikasi">Ilmu Komunikasi 
    <option value="Broadcasting">Broadcasting
</select>
Tahun Masuk         :<select name="TahunMasuk">
    <option value="2004">2004 
    <option value="2005">2005 
    <option value="2006">2006
</select>
<pre>
<input type="submit" name="submit">
</form>
</body>
</html>