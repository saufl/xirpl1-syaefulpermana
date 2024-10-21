<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Home Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            background-color: #ffffff;
            width: 250px;
            padding: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 0 20px 20px 0;
            position: fixed;
            height: calc(100% - 60px);
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .sidebar ul li a {
            color: black;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: gray;
        }

        /* Main Content */
        .content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
        }

        .content h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: black;
        }

        .content p {
            font-size: 18px;
            line-height: 1.6;
            color: gray;
        }
        
        .content p span{
            color: black;
        }

        /* Footer */
        .footer {
            background-color: black;
            color: white;
            padding: 15px 20px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 0;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><i class="fa-solid fa-user"></i><a href="profile.php">My Profile</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Welcome to My Website</h2>
        <p>Hallo! Nama saya <span>M Rizky Fadilah</span>, seorang siswa
            sekolah menengah kejuruan yang sedang memperdalam ilmu di
            bidang pengembangan frontend dan desain web.</p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>XI RPL 1 - SYAEFUL PERMANA</p>
    </div>

</body>

</html>