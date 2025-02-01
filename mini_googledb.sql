-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2025 at 09:31 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_googledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `gambar`, `deskripsi1`) VALUES
(1, 'Artikel Sumedang', 'Sumedang merupakan salah satu kabupaten tertua di Jawa Barat karena sudah memiliki pusat pemerintahan sejak dahulu kala. Wilayah tersebut mulanya merupakan pusat pemerintahan Kerajaan Sumedang Larang yang merupakan penerus dari Kerajaan Sunda Pajajaran.Berdasarka catatan sejarah, di wilayah Sumedang dahulu berdiri sebuah kerajaan bernama Kerajaan Tembong Agung. Kerajaan Tembong Agung ini dipimpin oleh Prabu Galuh Hadji Adji Putih atau yang juga dikenal dengan nama Adji Purwa Sumedang.Nama Kerajaan Tembong Agung kemudian diubah menjadi Kerajaan Sumedang Larang pada masa pemerintahan Prabu Tadjimalela. Kerajaan Sumedang Larang ini mencapai puncak kejayaan saat dipimpin oleh Pangeran Angka Widjaya atau Prabu Geusan Ulun. Secara sistem pemerintahan, Prabu Geusan Ulun mulai menerapkan sistem pemerintahan kabupaten di Sumedang Larang. Penobatan Prabu Geusan Ulun sebagai pemimpin Sumedang Larang dilakukan oleh Prabu Siliwangi pada tanggal 22 April 1578.', 'sumedang.jpg', ''),
(2, 'Artikel Libur Satu Bulan', 'KOMPAS.com - Pemerintah melalui Kementerian Agama (Kemenag) sedang mempertimbangkan rencana meliburkan sekolah selama satu bulan di Ramadhan 2025. Wacana selama puasa sekolah libur satu bulan ini menjadi topik hangat yang diperbincangkan masyarakat Indonesia mendekati Ramadhan 2025. Berdasarkan kalender Hijriyah yang disusun Kemenag, awal Ramadhan tahun ini akan jatuh pada 1 Maret 2025 atau kurang dari dua bulan lagi. Lantas, apakah benar selama Ramadhan 2025 sekolah libur satu bulan?\r\nPenjelasan Kemenag soal Libur Ramadhan Wakil Menteri Agama, Romo HR Muhammad Syafi’i, mengonfirmasi bahwa memang ada wacana meliburkan sekolah selama satu bulan pada Ramadhan 2025.\r\nDia mengakui, ada pembicaraan mengenai kebijakan libur sekolah satu bulan selama Ramadhan. Namun, menurut Syafi\'i, belum ada pembahasan lebih lanjut di Kementerian Agama terkait rencana meliburkan sekolah satu bulan selama Ramadhan 2025.\r\n“Heeh (iya) sudah ada wacana (libur selama puasa). Oh kami belum bahas, tapi bacaannya kayaknya ada, tapi saya belum bahas itu,” ujar Syafi’i pada Senin, 30 Desember 2024. Madrasah dan Pondok Pesantren Libur Satu Bulan Menteri Agama Nasaruddin Umar juga memberikan penjelasan terkait kebijakan libur sekolah Ramadhan ini. Ia menyatakan bahwa pihaknya masih mempertimbangkan kemungkinan untuk meliburkan sekolah-sekolah di bawah naungan Kementerian Agama, seperti madrasah dan pondok pesantren.\r\n“Ya, sebetulnya sudah warga Kementerian Agama, khususnya di pondok pesantren, itu libur,” kata Nasaruddin pada hari yang sama. Sementara itu, untuk sekolah umum, Nasaruddin menyampaikan bahwa kebijakan serupa sedang dipikirkan. Ia meminta masyarakat untuk bersabar menunggu keputusan mengenai wacana libur selama bulan Ramadhan tersebut.\r\n', 'libur.jpg', 'Kapan Keputusan Final Akan Diumumkan? Kementerian Agama saat ini masih merumuskan kebijakan terkait libur sekolah selama Ramadhan 2025. Keputusan final terkait rencana meliburkan sekolah selama puasa diperkirakan akan segera diumumkan.\r\nMenanggapi wacana ini, pengamat sosial dan keagamaan, Anwar Abbas, mengungkapkan komentar positif. Menurutnya, libur sekolah selama Ramadhan dapat memberikan kesempatan bagi siswa untuk lebih memahami esensi bulan suci. “Adanya rencana dari Kemenag untuk meliburkan anak-anak selama bulan puasa patut disambut gembira agar anak-anak tahu bulan puasa itu adalah bulan suci yang harus dihormati,” ungkapnya pada Kamis, 2 Januari 2025. Meskipun demikian, Anwar menegaskan bahwa pendidikan tetap bisa dilakukan secara daring, sehingga siswa tetap dapat belajar meskipun tidak berada di sekolah. Libur Satu Bulan Selama Puasa Pernah Diterapkan Menengok ke masa lalu, libur sekolah satu bulan penuh selama puasa pernah dialami para pelajar di Indonesia pada masa pemerintahan Presiden Abdurrahman Wahid alis Gus Dur. Kebijakan libur selama Ramadhan sangat diingat banyak orang, terutama anak-anak sekolah di era 1990-an hingga awal 2000-an.\r\n\r\nSaat menjabat sebagai presiden Republik Indonesi menggantikan BJ Habibie pada 1999, Gus Dur membuat kebijakan meliburkan anak sekolah selama satu bulan kala Ramadhan.\r\n\r\nBukan hanya itu, Gus Dur juga mengimbau sekolah-sekolah untuk membuat pesantren kilat selama masa libur Ramadhan. Dilansir dari laman Museum Kepresidenan, keputusan libur satu bulan kala itu diambil Gus Dur demi memberikan kesempatan bagi anak-anak agar lebih fokus dalam belajar agama Islam.  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `gambar`, `deskripsi2`) VALUES
(1, 'Sejarah Sumedang', 'Sumedang merupakan salah satu kabupaten tertua di Jawa Barat karena sudah memiliki pusat pemerintahan sejak dahulu kala. Wilayah tersebut mulanya merupakan pusat pemerintahan Kerajaan Sumedang Larang yang merupakan penerus dari Kerajaan Sunda Pajajaran.Berdasarka catatan sejarah, di wilayah Sumedang dahulu berdiri sebuah kerajaan bernama Kerajaan Tembong Agung. Kerajaan Tembong Agung ini dipimpin oleh Prabu Galuh Hadji Adji Putih atau yang juga dikenal dengan nama Adji Purwa Sumedang.Nama Kerajaan Tembong Agung kemudian diubah menjadi Kerajaan Sumedang Larang pada masa pemerintahan Prabu Tadjimalela. Kerajaan Sumedang Larang ini mencapai puncak kejayaan saat dipimpin oleh Pangeran Angka Widjaya atau Prabu Geusan Ulun. Secara sistem pemerintahan, Prabu Geusan Ulun mulai menerapkan sistem pemerintahan kabupaten di Sumedang Larang. Penobatan Prabu Geusan Ulun sebagai pemimpin Sumedang Larang dilakukan oleh Prabu Siliwangi pada tanggal 22 April 1578. ', 'sumedang.JPG', ''),
(2, 'Sejarah Ganeas', 'Pada zaman dahulu ada seorang wanita yang bernama nyai pamanan yang sedang bertapa didalam hutan kemudian ia mencarinya dan menemukan bayi tersebut didalam belahan batu.lalu ia membawanya pulang dan merawat bayi tersebut dan menamakannya GANEA, kemudian berita bahwa bayi keluar dari batu pun menyebar ke desa.orang orang disekitar desa ingin tahu tentang bayi yang keluar dari batu.bayi yang diasuhnya itu kemudian dikenal dengan nama GANEA.hari ini.orang orang disekitar tempat itu selalu bersemangat untuk mengenal GENEA.karena itu menjadi sulit jika ingin mencoba mengunjungi tempat itu.karena dia ingin didengar untuk waktu lama itu dikenal sebagai \"GANEAS\"', 'Ganeas.JPG', ''),
(3, 'Sejarah Dayeuh Luhur', 'Dayeuh Luhur atau objek wisata, yang terletak di daerah yang cukup tinggi, adalah rumah bagi Desa Dayeuh Luhur yang berada di puncak Gunung Rengganis. Pada masa pemerintahan Prabu Geusan Ulun, pusat pemerintahan Kerajaan Sumedang larang dipindahkan dari Kutamaya ke Dayeuh Luhur. Ketika Prabu Geusan Ulun meninggal pada tahun 1601, beliau dimakamkan di Dayeuh Luhur. Namun, penerusnya, Pangeran Suriadiwangsa, putranya, memindahkan pusat pemerintahan ke Tegal Kalong.\r\n\r\nMakam Prabu Geusan Ulun terletak di bagian utara desa, di sisi barat jalan desa Dayeuh Luhur. Kompleks makam ini terbagi menjadi tiga bagian. Bagian pertama di dekat pintu gerbang berisi makam para juru kunci, sementara bagian kedua lebih tinggi dan berisi makam istri Prabu Geusan Ulun, Ratu Harisbaya. Bagian ketiga, yang merupakan bagian paling belakang dan tertinggi, adalah makam Prabu Geusan Ulun sendiri.\r\n\r\nPada tahun 2012, kompleks Makam Prabu Geusan Ulun mengalami perubahan. Dulu dikelilingi oleh tembok, kini berbentuk bangunan bertiang kayu dengan atap genting dan pintu utama terbuat dari kayu dengan pagar di sekelilingnya. Selain makam Prabu Geusan Ulun, kompleks ini juga berisi beberapa makam lainnya, termasuk makam Pageran Soeriadiwangsa (Pangeran Gempol I) dan Kiai Demang Cipaku.\r\n\r\nPerjalanan menuju makam ini tidak terlalu sulit. Jalan menuju Dayeuh Luhur sudah beraspal dan bisa dilalui kendaraan roda dua dan roda empat. Jaraknya sekitar 7 km dari Ganeas, yang menjadi titik akses ke Dayeuh Luhur. Meskipun lumayan menanjak, perjalanan memberikan pemandangan indah alam Sumedang, termasuk kota Sumedang dan Gunung Tampomas.\r\n', 'Dayeuh Luhur.JPG', 'Kisah Dayeuh Luhur sebagai makam dan petilasan kedua tokoh penting dimulai dengan kedatangan Prabu Geusan Ulun ke daerah tersebut, yang terjadi karena adanya peperangan dengan Cirebon dan tempat ini menjadi tempat singgah kedua setelah keraton utama Kerajaan Sumedang Larang.\r\n\r\nKedatangannya dikabarkan karena kabar mengenai wasiat tokoh kandaga lante, Embah Jaya Perkasa, untuk mengunjunginya di Gunung Rengganis, yaitu gunung yang berada di Dayeuh Luhur dan memiliki daya tarik yang tinggi.\r\n\r\nPetilasan di sana, seperti moksa atau tilem dari Embah Jaya Perkasa yang dipercaya sebagai tongkatnya, berlokasi di tempat yang tinggi. Namun, yang menjadi penting di petilasan ini tidak harus dimaknai sebagai objek makam.\r\n\r\nObjek wisata religi Dayeuh Luhur menentukan makam-makamnya melalui berita dari Kuncen, dimana penemuan dan penetapan makam berawal dari Pangeran Suriyadiwangsa untuk menemukan tempat peristirahatan terakhir Prabu Geusan Ulun.\r\n\r\nMasyarakat Desa Dayeuh Luhur sejak kehadiran Prabu Geusan Ulun tidak banyak diketahui, namun kemungkinan sebelum kedatangannya, tidak ada tatanan masyarakat di daerah ini. Namun, setelah kedatangan Prabu Geusan Ulun, mungkin mulai ada kehidupan manusia yang kemungkinan adalah pendatang atau berasal dari pusat keraton Sumedang Larang.\r\n\r\nObjek wisata lain yang dapat dikunjungi adalah tempat-tempat keramat, seperti tempat tujuh air keramat, yang dipercaya memiliki keutamaan masing-masing. Ada juga hal-hal mitos, seperti larangan memakai batik, yang bertujuan untuk mengingatkan para pengunjung untuk selalu memiliki hati yang bersih dan tidak terpengaruh ketika melakukan ziarah dan berdoa.'),
(4, 'Sejarah Cigentur', 'Desa Cigentur terletak di bagian selatan Kecamatan Tanjungkerta. Wilayah ini memiliki posisi strategis karena dilewati jalan penghubung utama antar daerah. Desa Cigentur dikenal sebagai salah satu desa yang mempertahankan nilai-nilai tradisional dan kearifan lokalnya. Masyarakat desa ini masih menjalankan tradisi adat seperti upacara panen padi dan gotong royong dalam kegiatan sehari-hari. Secara administratif, desa ini juga mengalami beberapa perubahan batas wilayah untuk menyesuaikan dengan kebutuhan modernisasi dan pertumbuhan penduduk.', 'Cigentur.JPG', ''),
(5, 'Sejarah Awilega', 'Desa Awilega merupakan desa hasil pemekaran dari Desa Tanjungmulya. Pada awal pembentukannya, desa ini sempat diberi nama Desa Cibodas. Namun, setelah melalui berbagai pertimbangan, nama tersebut diubah menjadi Desa Awilega. Nama \"Awilega\" sendiri dipilih karena mencerminkan karakteristik alam desa yang asri dan penuh pepohonan hijau. Sejak pemekarannya, Desa Awilega terus berkembang dengan pembangunan infrastruktur dan peningkatan kesejahteraan masyarakat. Pemekaran ini bertujuan untuk meningkatkan pelayanan publik dan mempercepat pembangunan di daerah pedesaan.', 'awilega.JPG', ''),
(6, 'Sejarah Tutug Oncom', 'Oncom termasuk makanan khas Indonesia yang populer, khususnya di masyarakat Jawa Barat. Makanan fermentasi ini mengandung zat gizi yang cukup lengkap, baik zat gizi makro seperti protein atau zat gizi mikro berupa mineral.\r\n\r\n\r\n\r\nOncom adalah bahan makanan yang terbuat dari bahan-bahan sisa yang difermentasi. Bahan baku oncom dapat berasal dari bungkil (ampas) kedelai sisa pembuatan tahu, bungkil kacang tanah, pati singkong, dan bungkil kelapa.\r\n\r\n\r\n\r\nTentunya jika mendengar kata oncom, di Sumedang sendiri sudah ada nih oncom yang terkenal, yakni oncom Pasireungit dari Kecamatan Paseh.\r\n\r\n\r\nSedangkan pembuatan oncom untuk skala usaha, umumnya dimulai tahun 1965, walau penjualan kebanyakan ala kadarnya namun mampu menembus pasar Bandung dan sekitarnya. \r\n\r\n\r\nPenjualan oncom Desa Pasireungit mulai \"dikembangkan\" akhir tahun 1980-an, di mana beberapa pemilik usaha menggunakan berbagai agen sampai ke Bandung. Namun kebanyakan, pemilik usaha produksi oncom masih senang menjual sendiri secara berkeliling, walaupun risikonya capek dua kali dan tak jarang membawa sisa oncom dibawa pulang.', 'tutug oncom.jpg', ''),
(7, 'Sejarah Paseh', 'Desa Paseh termasuk dalam wilayah Kecamatan Banjarmangu Kabupaten Banjarnegara, Keberadaanya terletak di 5 km kota Kecamatan dan 12 km barat laut Ibukota Kabupaten Banjarnegara dg luas wilayah 314 Hektar yang meliputi 4 dusun (kebaon).\r\n\r\nDesa Paseh berasal dari penyingkatan bahasa jawa yaitu Patilasaan Syeh (Tanda /rute perjalanan syeh) yang kemudian orang menyebutnya sebagai PASEH.\r\n\r\nMenurut cerita, dahulu pada masa penyebaran agama islam di Banjarnegara, datanglah dua orang ulama besar (syeh) yang berasal dari Gresik Jawa Timur singgah di wilayah Kecamatan Banjarmangu. Dalam rangka dakwahnya, dua orang ulama itu mengambil rute perjalanannya ke arah barat dan salah satu kegiatannya mengadakan survey di suatu kampung di sebelah barat Banjarmangu untuk didirikan pondok pesantren. Di kampung itu tempat dimana ulama itu melaksanakan survey dan tempat ia berdiri/singgah di beri batu sebagai tanda (patilasan). Seiring berjalannya waktu, oleh warga setempat kampung itu diberi nama Paseh yang sampai sekarang di gunakan sebagai nama Desa Paseh.', 'paseh.jpg', 'Setelah mengadakan survey, kedua syeh tersebut masing-masing menuju ke arah barat dan utara. Menurut cerita warga, syeh yang melanjutkan perjalanan ke arah utara adalah syeh Giri Pitoyo yang sering disebut sebagai Kanjeng Sunan Giripit, sementara syeh yang melanjutkan perjalanan ke arah barat adalah syeh Giri Wasiat atau orang menyebutnya Kanjeng Sunan Giri Wasiat.\r\n\r\nDesa Paseh pada awal mulanya adalah gabungan dari 2 desa yaitu Desa Paseh dan Desa Karangasem yang di batasi oleh jalan yang membentang diantara keduanya, adapun sebelah timur jalan adalah Desa Paseh dan sebelah barat Desa Karangasem.'),
(8, 'Sejarah Museum Sumedang', 'Museum Prabu Geusan Ulun adalah salah satu ikon sejarah dan budaya paling penting di Kabupaten Sumedang, Jawa Barat. Museum ini didirikan pada tahun 1973 di bawah pengelolaan Yayasan Pangeran Sumedang, dengan tujuan utama melestarikan dan memamerkan peninggalan sejarah Kerajaan Sumedang Larang serta budaya Sunda secara umum. Museum ini berlokasi strategis di pusat kota Sumedang, tepatnya di Jalan Prabu Geusan Ulun, menjadikannya mudah diakses oleh masyarakat lokal maupun wisatawan. Nama museum ini diambil dari nama Prabu Geusan Ulun, raja terakhir Kerajaan Sumedang Larang, yang dikenal karena peran besarnya dalam mempertahankan eksistensi kerajaan Sunda pasca runtuhnya Kerajaan Pajajaran.\r\n\r\nMuseum ini berdiri di atas kompleks yang terdiri dari beberapa bangunan utama, masing-masing memiliki fungsi dan karakteristik yang unik. Bangunan-bangunan tersebut adalah Gedung Gendeng, Gedung Srimanganti, Gedung Bumi Kaler, dan Gedung Pusaka. Setiap gedung menyimpan koleksi berharga yang menceritakan perjalanan sejarah Sumedang dan budaya Sunda. Salah satu artefak paling terkenal yang dipamerkan adalah Mahkota Binokasih, sebuah mahkota emas yang diyakini berasal dari Kerajaan Pajajaran. Mahkota ini diserahkan kepada Sumedang Larang sebagai simbol pewarisan kekuasaan Sunda setelah runtuhnya Pajajaran akibat serangan Kesultanan Banten pada abad ke-16. Nilai sejarah dan spiritual mahkota ini membuatnya menjadi koleksi yang paling ikonik di museum.\r\n\r\nSelain mahkota, koleksi museum ini mencakup berbagai artefak bersejarah lainnya seperti keris, tombak, pedang, serta senjata tradisional lainnya yang menggambarkan kekuatan militer Kerajaan Sumedang Larang pada masa lalu. Koleksi alat musik tradisional, seperti gamelan, angklung, dan tarawangsa, menunjukkan keindahan dan kekayaan seni budaya Sunda yang masih dilestarikan hingga hari ini. Ada juga berbagai pakaian adat yang dikenakan oleh raja dan keluarganya, termasuk pakaian yang digunakan dalam upacara adat dan pernikahan kerajaan. Salah satu koleksi yang menarik perhatian pengunjung adalah singgasana Prabu Geusan Ulun, yang dihiasi dengan ukiran indah khas Sunda dan melambangkan kejayaan masa lalu kerajaan.', 'Museum.jpg', 'Selain mahkota, koleksi museum ini mencakup berbagai artefak bersejarah lainnya seperti keris, tombak, pedang, serta senjata tradisional lainnya yang menggambarkan kekuatan militer Kerajaan Sumedang Larang pada masa lalu. Koleksi alat musik tradisional, seperti gamelan, angklung, dan tarawangsa, menunjukkan keindahan dan kekayaan seni budaya Sunda yang masih dilestarikan hingga hari ini. Ada juga berbagai pakaian adat yang dikenakan oleh raja dan keluarganya, termasuk pakaian yang digunakan dalam upacara adat dan pernikahan kerajaan. Salah satu koleksi yang menarik perhatian pengunjung adalah singgasana Prabu Geusan Ulun, yang dihiasi dengan ukiran indah khas Sunda dan melambangkan kejayaan masa lalu kerajaan.\r\n\r\nTidak hanya itu, museum ini juga menyimpan dokumen-dokumen bersejarah dan naskah kuno yang menjadi sumber informasi berharga tentang kehidupan masyarakat Sunda di masa lalu. Naskah-naskah tersebut mencakup berbagai topik, seperti tata kelola pemerintahan, tradisi, agama, dan kepercayaan masyarakat Sunda. Koleksi ini memberikan wawasan mendalam bagi peneliti, sejarawan, dan siapa pun yang ingin memahami lebih jauh tentang kebudayaan dan sejarah Sumedang. Selain itu, peninggalan dari masa kolonial Belanda, seperti foto-foto lama, perabotan, dan dokumen administratif, juga menjadi bagian penting dari koleksi museum. Peninggalan ini menunjukkan bagaimana Sumedang memainkan peran strategis sebagai salah satu pusat pemerintahan kolonial di wilayah Priangan.\r\n\r\nMuseum Prabu Geusan Ulun juga memiliki keunikan dalam hal arsitektur dan suasana. Kompleks museum ini dikelilingi oleh taman yang hijau dan asri, menciptakan suasana yang tenang dan nyaman bagi para pengunjung. Bangunan-bangunannya mencerminkan gaya arsitektur tradisional Sunda yang berpadu dengan pengaruh kolonial, memberikan pengalaman estetika yang menarik bagi pengunjung. Lokasinya yang berada di pusat kota memudahkan akses bagi wisatawan, menjadikan museum ini salah satu tujuan utama bagi mereka yang ingin mengeksplorasi warisan budaya Sumedang.\r\n\r\nSelain sebagai tempat penyimpanan artefak, Museum Prabu Geusan Ulun juga berfungsi sebagai pusat edukasi dan pelestarian budaya. Museum ini sering menjadi tujuan wisata edukasi bagi pelajar, mahasiswa, dan peneliti dari berbagai daerah. Acara budaya lokal, seperti perayaan Hari Jadi Sumedang, sering diadakan di museum ini, menghadirkan pertunjukan seni tradisional dan kegiatan yang bertujuan untuk memperkenalkan warisan budaya kepada generasi muda. Dengan berbagai kegiatan ini, museum tidak hanya menjadi tempat untuk melihat masa lalu, tetapi juga pusat untuk merayakan dan mempelajari budaya Sunda yang kaya.\r\n\r\nKeberadaan Museum Prabu Geusan Ulun memiliki arti penting, tidak hanya bagi masyarakat Sumedang, tetapi juga bagi seluruh Indonesia. Museum ini mengingatkan kita akan pentingnya melestarikan warisan leluhur dan menghargai sejarah yang membentuk identitas budaya kita saat ini. Dengan koleksi yang kaya dan beragam, museum ini menjadi simbol kebanggaan masyarakat Sumedang, sekaligus inspirasi bagi generasi muda untuk terus mencintai dan melestarikan budaya serta sejarah mereka.'),
(9, 'Sejarah Kerajaan Sumedang Larang', 'Kerajaan Sumedang Larang berasal dari pecahan Kerajaan Sunda-Galuh yang bercorak Hindu. Kerajaan ini awalnya bernama Tembong Agung, yang didirikan oleh Prabu Aji Putih pada abad ke-8 atas perintah Prabu Suryadewata. Pusat pemerintahannya berada di Citembong Karang, yang saat ini termasuk wilayah Kabupaten Sumedang.\r\nKemudian saat Prabu Tajimalela, putra Prabu Aji Putih, mewarisi takhta, nama kerajaan diubah menjadi Himbar Buana, yang berarti menerangi alam. Prabu Tajimalela pernah berkata \"Insun medal, insun madangan\", yang artinya \"Aku dilahirkan, aku menerangi\". Sementara kata Sumedang berasal dari kata Insun madangan, yang berubah pengucapannya menjadi sun madang, dan selanjutnya berubah menjadi Sumedang. Prabu Tajimalela kemudian digantikan oleh putranya yang bergelar Prabu Gajah Agung. Dari Kerajaan Tembong Agung hingga akhirnya menjadi Kerajaan Sumedang Larang, status kerajaan ini adalah menjadi bawahan Kerajaan Sunda-Galuh, yang nantinya bergabung menjadi Kerajaan Pajajaran.\r\nPada pertengahan abad ke-16, mulailah corak agama Islam mewarnai pemerintahan Kerajaan Sumedang Larang. Ratu Pucuk Umun, yang memerintah kala itu, telah memeluk Islam dan memerintah bersama suaminya, Pangeran Santri, yang bergelar Ki Gedeng Sumedang. Ketika kepemimpinan Ratu Pucuk Umun baru saja digantikan oleh putranya yang bernama Pangeran Angkawijaya, Kerajaan Pajajaran runtuh akibat serangan Kesultanan Banten. Setelah itu, Kerajaan Sumedang Larang mendeklarasikan diri sebagai penerus Kerajaan Pajajaran yang berdaulat penuh.\r\n\r\n', 'Kerajaan Sumedang Larang.jpg', ''),
(10, 'Sejarah Taman Ndog', 'Taman Sumedang Tandang atau lebih dikenal dengan sebutan taman endog (dalam bahasa Indonesia : Taman Telur) menjadi salah satu ikon yang dimiliki Kabupaten Sumedang.\r\nDisebut taman endog lantaran merunut pada monumen raksasa berbentuk telur yang ditopang oleh kedua telapak tangan. Pada monumen itu terdapat sejumlah simbol yang menjadi ciri khas dari Kabupaten Sumedang, termasuk disana terdapat simbol berbentuk piala.\r\n\r\nMungkin banyak dari detikers yang penasaran dengan taman endog itu lantaran selama ini Kabupaten Sumedang dikenal dengan julukan sebagai kota tahu.\r\nTaman endog sendiri berdiri di pusat kota Sumedang atau tepatnya di Jalan Mayor Abdurahman. Di dekat sana terdapat pasar tradisional dan pusat perbelanjaan modern.\r\n\r\nTaman itu juga sebagai penanda sebuah pertigaan untuk akses menuju Majalengka - Cirebon dan Kabuyutan Cipaku, Darmaraja Sumedang atau menuju akses jalan alternatif ke Kabupaten Garut.\r\nTaman dan monumen Sumedang Tandang dibangun pada tahun 1991 saat Bupati Sumedang dijabat oleh Drs. Sutardja.\r\n\r\nPembangunannya sendiri berkat kerjasama antara Pemerintah Daerah Tingkat II Sumedang dengan PT. Djarum. Demikian sebagaimana yang tertulis dalam prasasti di salah satu sisi monumen tersebut.\r\n\r\nDisisi lainnya terdapat sebuah pesan bertuliskan :\r\n\r\nSumedang Tandang Nyandang Kahayang\r\n\r\nPembangunan berbagai sendi kehidupan adalah milik kita. Roda kehidupan terus berputar, yang terlahir demi pembangunan, menempuh perjalanan panjang, pembangunan takkan pernah berhenti, kehati-hatian itu adalah kata hati kita, langkah kitalah yang menopang gerak pembangunan, keberhasilan pun sempat kita jelang, tapi perlu kita jaga lir ibarat nanggeuy endog beubeureumna. (Sumedang, 28 Oktober 1991, Bupati Kepala Daerah Tingkat II Drs. H. Sutardja.)\r\n', 'Taman Ndog.jpg', 'Sekretaris Daerah Sumedang, Herman Suryatman mengatakan, Taman Sumedang Tandang atau lebih dikenal warga dengan sebutan taman endog merupakan sebuah monumen yang mengandung makna filosofi.\r\n\r\n\"Monumen itu mengingatkan kita dalam bermasyarakat, berbangsa dan bernegara harus seperti nanggeuy endog beubeureumna artinya pembangunan yang telah tercapai harus dijaga secara hati-hati,\" ungkap Herman kepada detikjabar, Rabu (29/6/2022).\r\n\r\nHerman menyebut, taman endog sendiri statusnya saat ini sebagai salah satu taman kota atau ruang terbuka hijau (RTH) yang kini pengelolaannya di bawah Badan Lingkungan Hidup Daerah (BLHD) Kabupaten Sumedang.\r\n\r\n\"Status taman edog itu dari dulu sebagai taman kota sejak dibangun oleh pak Sutardja, makanya harus kita jaga sama-sama,\" terangnya.\r\n\r\nSimbol piala yang terdapat di monumen, menurut Herman, sebagai perlambang sejumlah prestasi yang dicapai pada saat itu.\r\n\r\n\"Pada saat kepemimpinan pak Sutardja kan banyak juga prestasi yang diraih, makanya itu menyimbolkan prestasi yang dicapai saat itu,\" paparnya.\r\n\r\nHerman menambahkan, monumen taman endog menjadi pengingat bahwa pemerintahan yang dikelola dengan baik dan pembangunan yang dikelola dengan baik maka akan menghasilkan sejumlah prestasi. Dimana prestasi tersebut harus dijaga dan dipertahankan.\r\n\r\n\"Pada saat kepemimpinan pak Sutardja banyak prestasi, jadi kepemimpinan sekarang pun harus lebih baik lagi dari kepemimpinan sebelumnya,\" ucapnya.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `alamat`, `username`, `password`) VALUES
(1, 'syahrul akbar', 'sukamantri', 'rulls', '123'),
(2, 'reksya muhamad ramli', 'dubai', 'rexi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
