<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar form Hnadling</title>
</head>
<body>
    <h1>Form pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe teks -->
        <label for="">Nama</label><br>
        <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"><label for="">Laki-laki</label>
            <label for="">Laki-laki</label><br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"><label for="">Perempuan</label>
            <label for="">Perempuan</label><br><br>
        <!-- tipe checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="matkul" value="Matematika Komputer">
            <label for="">Matematika Komputer</label><br>
        <input type="checkbox" name="matkul" value="Pemograman Web 2">
            <label for="">Pemograman Web 2</label><br><br>
        <!-- tipe number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br><br>
        <!-- button -->
        <button type="submit">Kirim !</button>
        <button type="reset">Reset Data</button>
    </form>
</body>
</html>