<?php
$Nama = "M Rizky Fadilah";
$Umur = "17";
$Tinggi = "170";
$Sekolah = "SMK Negeri 2 Bandung";
$Cita_cita = "Masuk Surga";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: gray;
        }

        .info-card {
            background: #fff;
            padding: 40px;
            border: 1px solid gray;
            box-shadow: 15px 15px 0 black;
            transition: box-shadow 0.6s ease-in-out, transform 0.6s ease-in-out;
        }

        .info-card:hover {
            box-shadow: 20px 20px 0 black;
            transform: translateY(-5px);
        }

        .info-card-content {
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 1;
        }

        .info-card-content i {
            font-size: 150px;
            color: black;

        }

        .info-card h2 {
            margin-bottom: 15px;
            font-size: 30px;
            letter-spacing: 1.5px;
            color: black;
        }

        .info-card p {
            font-size: 14px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <div class="info-card">
        <div class="info-card-content">
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="deskripsi">
                <h2>Profil Siswa</h2>
                <?php
                echo "<p>Nama: $Nama</p>";
                echo "<p>Umur: $Umur tahun</p>";
                echo "<p>Tinggi: $Tinggi</p>";
                echo "<p>Asal Sekolah: $Sekolah</p>";
                echo "<p>Cita-cita: $Cita_cita</p>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>