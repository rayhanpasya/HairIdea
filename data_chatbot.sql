-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2024 pada 09.57
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_chatbot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(100) NOT NULL,
  `replies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Oval Lurus', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Oval</b> dan tipe rambut <b>Lurus</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/comma-hair\">Comma Hair</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/undercut\">Undercut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/two-block\">Two Block</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.\r\n'),
(2, 'Oval Bergelombang', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Oval</b> dan tipe rambut <b>Bergelomabang</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/two-block\">Two Block</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br>Untuk gambarannya bisa di cek pada URL diatas.'),
(3, 'Oval Ikal', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Oval</b> dan tipe rambut <b>Ikal</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(4, 'Oval Keriting', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Oval</b> dan tipe rambut <b>Keriting</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(5, 'Segitiga Lurus', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Segitiga</b> dan tipe rambut <b>Lurus</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/comma-hair\">Comma Hair</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/undercut\">Undercut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/two-block\">Two Block</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(6, 'Segitiga Bergelombang', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Segitiga</b> dan tipe rambut <b>Bergelombang</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/comma-hair\">Comma Hair</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/two-block\">Two Block</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br>Untuk gambarannya bisa di cek pada URL diatas.'),
(7, 'Segitiga Ikal', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Segitiga</b> dan tipe rambut <b>Ikal</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(8, 'Segitiga Keriting', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Segitiga</b> dan tipe rambut <b>Keriting</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br>Untuk gambarannya bisa di cek pada URL diatas.'),
(9, 'Bulat Lurus', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Bulat</b> dan tipe rambut <b>Lurus</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(10, 'Bulat Bergelombang', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Bulat</b> dan tipe rambut <b>Bergelombang</b> ialah:  <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(11, 'Bulat Ikal', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Bulat</b> dan tipe rambut <b>Ikal</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br>Untuk gambarannya bisa di cek pada URL diatas.'),
(12, 'Bulat Keriting', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Bulat</b> dan tipe rambut <b>Keriting</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/curtain\">Curtain</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/mullet\">Mullet</a></span>\r\n<br>Untuk gambarannya bisa di cek pada URL diatas.'),
(13, 'Kotak Lurus', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Kotak</b> dan tipe rambut <b>Lurus</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(14, 'Kotak Bergelombang', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Kotak</b> dan tipe rambut <b>Bergelombang</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(15, 'Kotak Ikal', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Kotak</b> dan tipe rambut <b>Ikal</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/bowl-cut\">Bowl Cut</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.'),
(16, 'Kotak Keriting', 'Rekomendasi gaya rambut berdasarkan bentuk wajah <b>Kotak</b> dan tipe rambut <b>Keriting</b> ialah: <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/low-taper\">Low Taper</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/buzz-cut\">Buzz Cut</a></span> <br><span class=\"bg-light rounded rounded-3 px-2\"> <a href=\"http:/tren/bowl-cut\">Bowl Cut</a></span> <br>Untuk gambarannya bisa di cek pada URL diatas.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
