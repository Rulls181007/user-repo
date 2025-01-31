<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>About Us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .about-container {
            padding: 50px 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .about-container h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .about-container p {
            font-size: 1.6rem;
            color: #555;
            line-height: 1.6;
            margin: 20px auto;
            max-width: 800px;
        }

        .team-section {
            margin: 50px auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .team-member {
            text-align: center;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 250px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-icons a {
            font-size: 1.5rem;
            color: #007bff;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#">WebMiniArsip</a></span>

            <div class="menu">
                <ul class="nav-links">
                    <li><a href="dashboard.php">Beranda</a></li>
                    <li><a href="About.php" class="active">About</a></li>
                    <li><a href="Data_Arsip.php">Data Arsip</a></li>
                    <li><a href="Galeri.php">Galeri</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="about-container">
        <br>
        <br>
        <h1>Tentang Kami</h1>
        <p>
            WebMiniArsip adalah platform yang bertujuan untuk menyediakan informasi dan arsip bersejarah
            yang mudah diakses oleh masyarakat. Dengan berfokus pada kelengkapan data dan kemudahan navigasi,
            kami berupaya mendukung pelestarian sejarah dan budaya lokal.
        </p>
        <br>
        <br>
        <p>
            Kami percaya bahwa dengan memberikan akses yang mudah ke informasi yang akurat, kami dapat
            meningkatkan kesadaran akan pentingnya warisan sejarah dan budaya.
        </p>
    </div>

    <!-- Team Section -->
    <div class="team-section">
        <div class="team-member">
            <h3>WhatsApp</h3>
            <p>+62 821-203-205-39</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </div>
        </div>

        <div class="team-member">
            <h3>Instagram</h3>
            <p>Rulls18</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>

        <div class="team-member">
            <h3>Email</h3>
            <p>Akbar.2002.sy@gmail.com</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class='bx bx-envelope'></i></a>
            </div>
        </div>
    </div>
</body>
</html>