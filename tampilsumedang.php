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
            width: 400px;
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
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: ;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        .form-content h3 {
            margin: 8px 0;
        }
        .form-content p {
            font-size: 14px;
            margin: 8px 0 16px;
        }
        .form-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .form-row {
            display: flex;
            justify-content: ;
            gap: 6px; /* Jarak antar elemen */
            margin: 16px auto;
        }
        .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
        text-align: center;
    }
    .button:hover {
        background-color: #0056b3;
    }
    .form-row-scroll {
    display: flex;
    overflow-x: auto;
    padding: 10px;
    gap: 16px;
    margin-top: 16px;
    border-radius: 8px;
    box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.1);
}

.form-row-scroll::-webkit-scrollbar {
    height: 8px; /* Tinggi scrollbar */
}

.form-row-scroll::-webkit-scrollbar-thumb {
    background-color: #007bff;
    border-radius: 4px;
}

.form-row-scroll::-webkit-scrollbar-thumb:hover {
    background-color: #0056b3;
}

.form-row-scroll::-webkit-scrollbar-track {
    background-color: #f1f1f1;
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
                    <li><a href="Index.php">Beranda</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Data_Arsip.php">Data Arsip</a></li>
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
                <form action="index.php" method="GET">
                    <input type="text" name="search" id="search" placeholder="Cari Informasi" required>
                    <button type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
        <h2>Sejarah Sumedang</h2>
    <br>
    <!-- Slider -->
    <p>Asal-usul nama Sumedang memiliki beberapa versi dan cerita yang berkembang baik dari sisi etimologis, historis, maupun mitos yang kaya akan nilai budaya Sunda. Secara bahasa, nama Sumedang berasal dari dua kata dalam bahasa Sunda, yaitu “su” yang berarti baik, indah, atau utama, dan “medang” yang merupakan nama pohon dari keluarga Lauraceae. Pohon Medang pada masa lalu tumbuh subur di wilayah ini dan menjadi simbol keindahan alam serta sumber kehidupan bagi masyarakat setempat. Oleh karena itu, nama Sumedang dapat diartikan sebagai “tempat pohon Medang yang baik atau indah.” Interpretasi ini mencerminkan penghargaan masyarakat Sunda terhadap kekayaan alam yang melimpah di daerah ini.

Selain penafsiran bahasa, nama Sumedang juga dikaitkan dengan legenda Prabu Tajimalela, seorang tokoh yang diyakini sebagai pendiri wilayah ini. Dalam sebuah cerita rakyat, Prabu Tajimalela pernah mengucapkan sebuah kalimat terkenal, yaitu "Insun medal insun madangan," yang berarti "Aku lahir, aku bersinar." Kalimat ini mencerminkan kebanggaan sang raja terhadap wilayah yang dipimpinnya sebagai tempat yang bercahaya dan mulia. Dari frasa ini, lahirlah nama "Sumedang," yang kemudian menjadi identitas daerah tersebut. Tajimalela adalah sosok yang dihormati karena jasanya dalam membangun dan mempersatukan masyarakat setempat. Nama yang beliau berikan menjadi simbol keyakinan akan kemajuan, kemuliaan, dan keberkahan daerah ini.

Nama Sumedang juga tidak bisa dipisahkan dari sejarah Kerajaan Sumedang Larang, sebuah kerajaan Islam yang menjadi pusat kekuasaan penting di Tatar Sunda pada abad ke-16 hingga awal abad ke-17. Kata "larang" dalam nama kerajaan ini berarti "terlarang" atau "istimewa," yang menunjukkan bahwa wilayah Sumedang dianggap mulia dan tidak bisa disamakan dengan wilayah lainnya. Kerajaan Sumedang Larang didirikan oleh Prabu Geusan Ulun, yang membawa kerajaan ini mencapai masa kejayaannya. Kerajaan ini dikenal sebagai penerus Kerajaan Pajajaran setelah keruntuhannya pada tahun 1579 akibat serangan Kesultanan Banten. Sebagai pewaris budaya Sunda, Kerajaan Sumedang Larang memainkan peran penting dalam mempertahankan tradisi dan keislaman di Tatar Sunda.

Dari sisi mitos lokal, ada cerita yang mengatakan bahwa wilayah ini dulunya dikelilingi oleh hutan lebat yang dipenuhi pohon Medang. Pohon ini dianggap keramat karena dipercaya sebagai tempat tinggal roh-roh leluhur. Bahkan, dalam beberapa cerita, pohon Medang digunakan sebagai tanda batas wilayah atau tempat pemujaan. Karena itu, masyarakat setempat memberikan nama “Sumedang” untuk menghormati pohon-pohon tersebut.

Nama Sumedang juga sering dikaitkan dengan nilai-nilai filosofis yang mencerminkan sifat masyarakat Sunda yang menjunjung tinggi keindahan, keberkahan, dan kemuliaan. Penafsiran ini tidak hanya mencerminkan kebanggaan terhadap warisan alam dan budaya, tetapi juga menunjukkan bagaimana masyarakat Sunda memaknai kehidupan mereka melalui simbol-simbol alam.

Saat ini, nama Sumedang tetap melekat sebagai identitas daerah yang kaya akan sejarah, tradisi, dan budaya. Warisan nama ini dapat ditemukan dalam berbagai peninggalan seperti situs-situs kerajaan, makam-makam leluhur, serta adat istiadat yang masih dijaga hingga sekarang. Filosofi di balik nama Sumedang menggambarkan betapa pentingnya wilayah ini dalam membentuk sejarah dan budaya di Tatar Sunda.</p>
<br>
<img src="images/sumedang.jpg" >
<br>
<p>Pada era kolonial Belanda, Sumedang memainkan peranan penting sebagai bagian dari sistem pemerintahan kolonial yang diterapkan di Hindia Belanda, khususnya di wilayah Priangan (Preanger). Sejarah Sumedang pada masa ini mencerminkan berbagai dinamika sosial, politik, ekonomi, dan budaya, yang diwarnai oleh perlawanan masyarakat terhadap kolonialisme serta upaya penjajah dalam menguasai wilayah tersebut.


---

1. Perubahan Status Wilayah

Pada awal masa kolonial Belanda, Sumedang adalah bagian dari Kerajaan Sumedang Larang yang telah runtuh setelah menjadi bawahan Kesultanan Mataram di bawah Sultan Agung. Setelah Perjanjian Giyanti tahun 1755, sebagian besar wilayah di Jawa, termasuk Sumedang, berada di bawah kendali Belanda melalui pemerintahan Hindia Belanda. Pada akhir abad ke-18, sistem pemerintahan tradisional digantikan dengan struktur kolonial yang lebih terpusat. Sumedang dimasukkan ke dalam wilayah Karesidenan Priangan, yang menjadi salah satu daerah penghasil utama kopi di Hindia Belanda.


---

2. Sistem Preanger Stelsel

Pada era kolonial Belanda, Sumedang menjadi salah satu wilayah yang terdampak langsung oleh sistem Preanger Stelsel, yang diberlakukan pada abad ke-18 hingga awal abad ke-19. Sistem ini adalah bentuk kerja paksa di mana petani lokal diwajibkan menanam kopi untuk pemerintah kolonial Belanda. Kopi dari wilayah Priangan, termasuk Sumedang, diekspor ke pasar Eropa dan menjadi komoditas yang sangat menguntungkan bagi Belanda.

Di bawah sistem ini, para petani kehilangan kebebasan untuk menentukan jenis tanaman yang akan mereka tanam. Sebagian besar lahan pertanian dialihkan untuk perkebunan kopi, sementara hasil panennya harus diserahkan kepada pemerintah kolonial dengan harga yang sangat rendah. Dampak dari sistem ini sangat besar, termasuk kemiskinan, kelaparan, dan penderitaan rakyat karena mereka dipaksa bekerja keras tanpa mendapat imbalan yang layak.


---

3. Infrastruktur dan Transportasi

Pada masa kolonial, pemerintah Hindia Belanda membangun sejumlah infrastruktur di Sumedang untuk mendukung eksploitasi sumber daya alam. Salah satu proyek besar adalah pembangunan jalan Daendels (Jalan Raya Pos), yang membentang dari Anyer di Banten hingga Panarukan di Jawa Timur. Jalan ini melewati wilayah Sumedang, sehingga membuka akses transportasi yang lebih mudah untuk distribusi hasil bumi, terutama kopi.

Namun, pembangunan jalan ini juga membawa penderitaan besar bagi masyarakat setempat. Ribuan pekerja rodi dipaksa bekerja di bawah kondisi yang sangat buruk, dengan banyak dari mereka yang meninggal akibat kelelahan, penyakit, atau kekurangan makanan.


---

4. Perlawanan Rakyat Sumedang

Di tengah eksploitasi kolonial, masyarakat Sumedang tidak tinggal diam. Perlawanan terhadap kolonial Belanda tercatat dalam berbagai bentuk, baik yang bersifat terbuka maupun terselubung. Salah satu tokoh yang dikenal dalam perjuangan ini adalah Tumenggung Tanoemadja, seorang pemimpin lokal yang menentang kebijakan kolonial yang merugikan rakyat.

Selain perlawanan fisik, masyarakat Sumedang juga melawan dengan cara mempertahankan tradisi.</p>
</body>
</html>
