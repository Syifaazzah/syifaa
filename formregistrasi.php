<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form registrasi</title>
</head>
<body>
<h1> Form registrasi <h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> 
<pre>
Isi Data Dibawah ini: 
Nama                :<input type="text" name="Nama">
Alamat              :<textarea name="Alamat" rows="5" cols="40"></textarea>
Tempat Lahir        :<input type="text" name="Tempat Lahir"> 
Tanggal Lahir       :<input type="text" name="Tanggal Lahir">
Jenis Kelamin       :<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki <input type="radio" name="jeniskel" value="Perempuan">Perempuan 
Pendidikan          :<select name="pendidikan"><option value="S1">S1 <option value="S2">S2</select>
<input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Cancel">
</form>
</body>
</html>