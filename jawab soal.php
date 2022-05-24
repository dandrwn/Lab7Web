<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Tugas 7";
    ?>
<h2>Pertanyaan dan Tugas</h2>
    <form method="post">
            <label>Nama Lengkap: </label>
            <input type="text" name="nama">
            <br>
            <label>Tempat Lahir: </label>
            <input type="text" name="tempat_lahir">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="date" name="tgl_lahir">
            <br>
            <label>Alamat: </label>
            <input type="text" name="alamat">
            <br>
            <label>Pekerjaan:
            <select name='pekerjaan'>
                <option value='Asisten Manajer'>Asisten Manajer</option>
                <option value='Manajer'>Manajer</option>
                <option value='General Manajer'>General Manajer</option>
                <option value='Direktur'>Direktur</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <h2>Output</h2>
    <?php
        echo '<br> Nama Lengkap : ' . $_POST['nama'];
        echo '<br> Tempat Lahir : ' . $_POST['tempat_lahir'];
        echo '<br> Alamat : ' . $_POST['alamat'];
            $tgl_lahir = @$_POST['tgl_lahir'];
            $lahir = new DateTime($tgl_lahir);
            $hari_ini = new DateTime();
            $diff = $hari_ini->diff($lahir);
        echo "<br> Usia : ". $diff->y ." Tahun";
        echo "<br> Pekerjaan : ". $_POST['pekerjaan'];
            $pekerjaan = @$_POST['pekerjaan'];
            if($pekerjaan == "Asisten Manajer"){
                echo '<br> Gaji : Rp. 8.000.000,-';
            }
            elseif($pekerjaan == "Manajer"){
                echo '<br> Gaji : Rp. .10.000.000,-';
            }
            elseif($pekerjaan == "General Manajer"){
                echo '<br> Gaji : Rp. 30.000.000,-';
            }
            elseif($pekerjaan == "Direktur"){
                echo '<br> Gaji : Rp. 100.000.000,-';
            }
    ?>
</body>
</html>