<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1> Data Mahasiswa <h1>
<?php
    $NIM=$_POST['NIM'];
    $Nama=$_POST['Nama'];
    $jeniskel=$_POST['jeniskel'];
    $TempatLahir=$_POST['TempatLahir'];
    $TanggaLahir=$_POST['TanggalLahir'];
    $Jurusan=$_POST['Jurusan'];
    $TahunMasuk=$_POST['TahunMasuk'];
?>
    <table border=1>
    <tr>
        <td>NIM</td><td><?php echo $NIM?></td>
    </tr>
    <tr> 
        <td>Nama</td><td><?php echo $Nama?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td><td><?php echo $jeniskel?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td><td><?php echo $TempatLahir?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td><td><?php echo $TanggaLahir?></td>
    </tr>
    <tr>
        <td>Jurusan</td><td><?php echo $Jurusan?></td>
    </tr>
    <tr>
        <td>Tahun Masuk</td><td><?php echo $TahunMasuk?></td>
    </tr>
    </table>
    <a href="datamahasiswa.php">BACK TO HOME</a>
</body>
</html>