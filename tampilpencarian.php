<?php
// Koneksi ke database
$host = 'localhost'; // Host database
$user = 'root';      // Username database
$password = '';      // Password database
$dbname = 'mini_googledb'; // Nama database

$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jumlahkan data dari tabel
$totalDataProduk = 0;
$totalDataKategori = 0;

// Query untuk menghitung jumlah data produk
$sqlProduk = "SELECT COUNT(*) AS total FROM produk";
$resultProduk = $conn->query($sqlProduk);
if ($resultProduk->num_rows > 0) {
    $rowProduk = $resultProduk->fetch_assoc();
    $totalDataProduk = $rowProduk['total'];
}

// Query untuk menghitung jumlah data kategori
$sqlKategori = "SELECT COUNT(*) AS total FROM artikel";
$resultKategori = $conn->query($sqlKategori);
if ($resultKategori->num_rows > 0) {
    $rowKategori = $resultKategori->fetch_assoc();
    $totalDataKategori = $rowKategori['total'];
}

$conn->close();
?>
<?php include('koneksi.php'); ?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css"

    <title>Responsive Navigation Menu Bar</title>

    <style>
        /* Navbar Styles */
        .nav-bar {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 15px;
            background-color: #1e1e1e;
            position: fixed;
            width: 100%;
            z-index: 100;
            right: 80px;
        }

        .logo a {
            color: white;
            text-decoration: none;
            font-size: 24px;
        }

        .menu {
            display: flex;
            gap: 20px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        .nav-links li a:hover {
            background-color: #555;
            border-radius: 5px;
        }

        .dark-light {
            display: flex;
            gap: 10px;
            position: center;
        }

        .search-form {
            display: flex;
            align-items: flex-end;
            background-color: #333;
            border-radius: 10px;
            padding: 5px;
            width: 400px;
            position: absolute;
            left: 950px;
        }

        .search-form input {
            background-color: #333;
            border: none;
            color: white;
            padding: 5px 15px;
            font-size: 16px;
            border-radius: 10px;
            width: 100%;
        }

        .search-form button {
            background-color: #555;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .search-form button:hover {
            background-color: #888;
        }

        /* Slider Styles */
        .slider-container {
            margin-top: 30px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 30%;
            transition: transform 0.5s ease-in-out, width 0.5s ease-in-out;
            padding: 10px;
        }

        .slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .dot-container {
            z-index: 5;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 1.5em;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 5px;
            border-radius: 20px;
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
            cursor: pointer;
        }

        .active-dot {
            background-color: white;
        }
        body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 20px;
        }   
        .container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        }
        .form-card {
        max-width: 600px; /* Memperbesar lebar maksimal form */
        padding: 30px; /* Menambah ruang di dalam form */
        border: 15px solid #ccc;
        border-radius: 12px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.15); /* Menambah efek bayangan */
        text-align: center;
        }

        .form-card h1 {
        font-size: 2rem; /* Memperbesar ukuran font judul */
        margin-bottom: 25px;
        }

        .result {
        font-size: 4rem; /* Memperbesar ukuran angka */
        font-weight: bold;
        margin-top: 30px;
        color: #333;
        }
        
        .form-container {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }

        .form-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .form-content {
            padding: 16px;
            text-align: center;
        }

        .form-content h3 {
            margin: 0 0 8px;
            font-size: 1.2rem;
            color: #333;
        }

        .form-content p {
            margin: 0 0 16px;
            font-size: 0.9rem;
            color: #666;
        }

        .form-content button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 16px;
            font-size: 0.9rem;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-content button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#">CodingLab</a></span>

            <div class="menu">
                <ul class="nav-links">
                    <li><a href="Index.php">Beranda</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Data_Arsip.php">Data Arsip</a></li>
                    <li><a href="Propil.php">Propil</a></li>
                    <li><a href="Galeri.php">Galeri</a></li>
                </ul>
            </div>

            <!-- Dark/Light Mode Toggle -->
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>
            
            
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>

            <!-- Search Form -->
            <div class="search-form">
                <form action="tampilpencarian.php" method="GET">
                    <input type="text" name="search" id="search" placeholder="Cari Informasi" required>
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Slider -->
    <div class="slider-container">
        <div class="slider">
            <div class="slide"><img src="images/sumedang.jpg" alt="gambar"></div>
            <div class="slide"><img src="images/Cigentur.jpg" alt="gambar"></div>
            <div class="slide"><img src="images/Ganeas.jpg" alt="gambar"></div>
            <div class="slide"><img src="images/awilega.jpg" alt="gambar"></div>
            <div class="slide"><img src="images/Dayeuh Luhur.jpg" alt="gambar"></div>
        </div>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
    </div>


    <h1>Jumlah Data Arsip</h1>
    <div class="container">
        <div class="form-card">
            <h1>Jumlah Sejarah</h1>
            <div class="result">
                <strong><?php echo $totalDataProduk; ?></strong>
            </div>
        </div>

        <div class="form-card">
            <h1>Jumlah Artikel</h1>
            <div class="result">
                <strong><?php echo $totalDataKategori; ?></strong>
            </div>
        </div>
    </div>
        <br>
        <br>
    
    <!-- Search Results -->
    

    <?php
    // Jika ada query pencarian
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $search = $conn->real_escape_string($search); // Untuk menghindari SQL Injection

        // Query pencarian di database
        $query = "SELECT * FROM produk WHERE nama LIKE '%$search%' OR deskripsi LIKE '%$search%'";
        $result = $conn->query($query);

        // Menampilkan hasil pencarian
        if ($result->num_rows > 0) {
            echo "<h2>Hasil Pencarian:</h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                $gambar = $row['gambar'];  
                echo "<li>";
                echo "<strong>" . $row['nama'] . "</strong><br>" . $row['deskripsi'] . "<br>";

                echo "<div class='product-image'>";
                if ($gambar && file_exists('images/' . $gambar)) {
                    echo "<img src='images/" . $gambar . "' alt='" . $row['nama'] . "' style='width: 550px; height: auto;'>";
                } else {
                    echo "<img src='images/no-image.png' alt='No Image' style='width: 150px; height: auto;'>";
                }
                echo "</div>";
                echo "<strong>" . "</strong><br>" . $row['deskripsi2'] . "<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Informasi tidak ditemukan.</p>";
        }
    }
    ?>

    <!-- Script -->
    <script>
        // Dark/Light mode toggle
        const body = document.querySelector("body"),
            modeToggle = document.querySelector(".dark-light");

        let getMode = localStorage.getItem("mode");
        if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
        }

        modeToggle.addEventListener("click", () => {
            modeToggle.classList.toggle("active");
            body.classList.toggle("dark");

            if(!body.classList.contains("dark")){
                localStorage.setItem("mode", "light-mode");
            } else {
                localStorage.setItem("mode", "dark-mode");
            }
        });

        // Slider functionality
        let currentIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function showSlide(index) {
            if (index < 0) {
                currentIndex = totalSlides - 1;
            } else if (index >= totalSlides) {
                currentIndex = 0;
            } else {
                currentIndex = index;
            }

            slides.forEach((slide, i) => {
                const isCurrent = i === currentIndex;
                const transformValue = isCurrent ? 'scale(1)' : 'scale(1)';
                const widthValue = '100%';

                slide.style.transform = transformValue;
                slide.style.width = widthValue;
                dots[i].classList.toggle('active-dot', isCurrent);
            });

            const translateValue = -currentIndex * 100 + '%';
            document.querySelector('.slider').style.transform = 'translateX(' + translateValue + ')';
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function currentSlide(index) {
            showSlide(index);
        }

        setInterval(nextSlide, 10000);  // Auto slide every 10 seconds
    </script>

</body>
</html>