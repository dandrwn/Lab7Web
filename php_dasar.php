<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP DASAR </title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php 
        echo "Hello World";
    ?>
    <h2> Menggunakan VARIABLE</h2>
    <?php
        $nim = "312010154";
        $nama = "Dani";
        echo "NIM : " . $nim . "<br>";
        echo "NAMA : $nama";
    ?>
     <h1>Predefine Variable</h1>
    <?php
        echo "Selamat Datang " . $_GET['nama'];
    ?>
      <h2>Form Input</h2>
        <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <input type="submit" value="kirim">
        </form>
        <?php
            echo 'selamat Datang <br> ' . $_POST['nama'];
        ?>
        <?php
            $gaji = 1000000;
            $pajak = 0.1;
            $thp = $gaji - ($gaji*$pajak);
            echo "Gajia sebelum pajak = Rp. $gaji <br>";
            echo "Gaji yang dibawa pulang = Rp. $thp <br>";
        ?>
         <?php
            $nama_hari = date("1");
            if ($nama_hari == "sunday"){
                echo "Minggu <br>";
            } elseif ($nama_hari == "Monday"){
                echo "Senin <br>";
            } else {
                echo "selasa <br>";
            }
         ?>
        <?php
            $nama_hari = date("l");
            switch ($nama_hari) {
            case "Sunday":
            echo "Minggu <br>";
            break;
            case "Monday":
            echo "Senin <br>";
            break;
            case "Tuesday":
                echo "Selasa <br>";
                break;
                default:
                echo "Sabtu <br>"; }
        ?>
        <?php
            echo "Perulangan 1 sampai 10 <br />";
            for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
            }
            echo "Perulangan Menurun dari 10 ke 1 <br />";
            for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
            }
        ?>
    
        <?php
            echo "Perulangan 1 sampai 10 <br />";
            $i=1;
            while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
            }
        ?>

    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
        } while ($i<=10);
    ?>

    </body>
    
</body>