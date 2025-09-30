<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        $dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'];
    ?>
    <h2>Data dosen </h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td><?= $dosen['nama']; ?> </td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?= $dosen ['domisili']?></td>
        </tr>
        <tr>
            <td>Jenis_kelamin</td>
            <td><?= $dosen['jenis_kelamin']?></td>
        </tr>
    </table>
</body>
</html>