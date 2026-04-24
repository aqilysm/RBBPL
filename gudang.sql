-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2026 pada 07.20
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
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id` int(11) NOT NULL,
  `kode_bahan` varchar(20) NOT NULL,
  `nama_bahan` varchar(100) NOT NULL,
  `satuan` varchar(10) DEFAULT 'kg',
  `stok` decimal(10,2) DEFAULT 0.00,
  `stok_minimum` decimal(10,2) DEFAULT 10.00,
  `harga_per_kg` decimal(15,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id`, `kode_bahan`, `nama_bahan`, `satuan`, `stok`, `stok_minimum`, `harga_per_kg`, `created_at`, `updated_at`) VALUES
(1, 'DB-01', 'Dark Couverture Chocolate (70%)', 'kg', 250.00, 50.00, 120000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(2, 'SG-03', 'Granulated Sugar', 'kg', 300.00, 100.00, 18000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(3, 'SM-02', 'Unsalted Butter', 'kg', 12166.00, 50.00, 95000.00, '2026-02-27 11:25:56', '2026-03-02 16:20:15'),
(4, 'EG-04', 'Telur Ayam', 'kg', 120.00, 30.00, 40000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(5, 'FL-05', 'Tepung Terigu Protein Sedang', 'kg', 200.00, 100.00, 14000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(6, 'CP-06', 'Cocoa Powder Murni', 'kg', 35.00, 40.00, 75000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(7, 'MI-01', 'Minyak Nabati', 'kg', 150.00, 50.00, 25000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(8, 'GR-01', 'Garam', 'kg', 50.00, 10.00, 5000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(9, 'VN-01', 'Vanilla Extract', 'liter', 8.00, 5.00, 150000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(10, 'TR-02', 'Tepung Beras', 'kg', 80.00, 30.00, 25000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(11, 'KT-01', 'Kantong Teh Celup', 'pcs', 5000.00, 1000.00, 500.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(12, 'PL-01', 'Plastik Kemasan', 'pcs', 10000.00, 2000.00, 200.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(13, 'BK-01', 'Baking Powder', 'kg', 15.00, 10.00, 30000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(14, 'SC-01', 'Susu Cair', 'liter', 60.00, 40.00, 35000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(15, 'RM-01', 'Ragi', 'kg', 5.00, 3.00, 80000.00, '2026-02-27 11:25:56', '2026-02-27 11:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_komposisi`
--

CREATE TABLE `detail_komposisi` (
  `id` int(11) NOT NULL,
  `komposisi_id` int(11) NOT NULL,
  `bahan_id` int(11) NOT NULL,
  `persentase` decimal(5,2) NOT NULL,
  `berat_gram` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_komposisi`
--

INSERT INTO `detail_komposisi` (`id`, `komposisi_id`, `bahan_id`, `persentase`, `berat_gram`, `created_at`) VALUES
(1, 1, 1, 25.00, 250.00, '2026-02-27 11:25:56'),
(2, 1, 2, 30.00, 300.00, '2026-02-27 11:25:56'),
(3, 1, 3, 15.00, 150.00, '2026-02-27 11:25:56'),
(4, 1, 4, 12.00, 120.00, '2026-02-27 11:25:56'),
(5, 1, 5, 10.00, 100.00, '2026-02-27 11:25:56'),
(6, 1, 6, 6.00, 60.00, '2026-02-27 11:25:56'),
(7, 1, 8, 1.00, 10.00, '2026-02-27 11:25:56'),
(8, 1, 9, 1.00, 10.00, '2026-02-27 11:25:56'),
(9, 2, 5, 80.00, 4000.00, '2026-02-27 11:25:56'),
(10, 2, 7, 10.00, 500.00, '2026-02-27 11:25:56'),
(11, 2, 8, 2.00, 100.00, '2026-02-27 11:25:56'),
(12, 2, 10, 5.00, 250.00, '2026-02-27 11:25:56'),
(13, 2, 13, 2.00, 100.00, '2026-02-27 11:25:56'),
(14, 2, 14, 1.00, 50.00, '2026-02-27 11:25:56'),
(15, 3, 5, 40.00, 800.00, '2026-02-27 11:25:56'),
(16, 3, 7, 25.00, 500.00, '2026-02-27 11:25:56'),
(17, 3, 2, 20.00, 400.00, '2026-02-27 11:25:56'),
(18, 3, 1, 10.00, 200.00, '2026-02-27 11:25:56'),
(19, 3, 14, 3.00, 60.00, '2026-02-27 11:25:56'),
(20, 3, 8, 2.00, 40.00, '2026-02-27 11:25:56'),
(28, 8, 6, 10.00, 100.00, '2026-04-06 15:03:38'),
(29, 8, 11, 68.00, 680.00, '2026-04-06 15:03:38'),
(30, 8, 11, 22.00, 220.00, '2026-04-06 15:03:38'),
(31, 9, 15, 87.00, 870.00, '2026-04-06 15:06:42'),
(32, 9, 12, 13.00, 130.00, '2026-04-06 15:06:42'),
(33, 10, 1, 100.00, 0.00, '2026-04-06 15:30:28'),
(34, 11, 3, 99.00, 0.00, '2026-04-06 15:31:02'),
(35, 11, 12, 1.00, 0.00, '2026-04-06 15:31:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komposisi`
--

CREATE TABLE `komposisi` (
  `id` int(11) NOT NULL,
  `kode_formula` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `batch_size` int(11) DEFAULT 1000 COMMENT 'dalam gram',
  `status` enum('active','draft','outdated') DEFAULT 'draft',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komposisi`
--

INSERT INTO `komposisi` (`id`, `kode_formula`, `nama_produk`, `deskripsi`, `batch_size`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'BRN-124', 'Brownies Fudgy Intense Dark Chocolate', 'Brownies fudgy dengan dark chocolate 70%, tekstur moist dan shiny crust', 1000, 'active', 4, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(2, 'MIE-001', 'Mie Lemonilo Aceh 45gr', 'Mie instan sehat dengan bumbu khas Aceh, tanpa MSG', 5000, 'active', 4, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(3, 'WAF-001', 'Waffer Coklat Renyah', 'Waffer dengan isian coklat, renyah dan crispy', 2000, 'active', 4, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(4, 'TEH-001', 'Teh Celup Melati', 'Teh celup dengan aroma melati, kemasan 25pcs/box', 1000, 'draft', 4, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(5, 'MIE-OLD', 'Mie Instan Original (Old Formula)', 'Formula lama yang sudah tidak digunakan dalam produksi aktif', 5000, 'outdated', 4, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(8, 'FML-2026-ED58', 'kerat', '', 1000, 'draft', 4, '2026-04-06 15:03:38', '2026-04-06 15:03:38'),
(9, 'FML-2026-8194', 'sasa', 'sasa', 1000, 'active', 4, '2026-04-06 15:06:42', '2026-04-06 15:06:42'),
(10, 'FML-2026-C3C4', 'sgasedgs', '', 1000, 'active', 4, '2026-04-06 15:30:28', '2026-04-06 15:30:28'),
(11, 'FML-2026-964D', 'waw', '', 1000, 'active', 4, '2026-04-06 15:31:02', '2026-04-06 15:31:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_distribusi`
--

CREATE TABLE `laporan_distribusi` (
  `id` int(11) NOT NULL,
  `no_do` varchar(30) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `supir` varchar(100) NOT NULL,
  `armada` varchar(50) NOT NULL,
  `estimasi_tiba` datetime DEFAULT NULL,
  `status` enum('pending','on_the_way','delivered','cancelled') DEFAULT 'pending',
  `catatan` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_distribusi`
--

INSERT INTO `laporan_distribusi` (`id`, `no_do`, `wo_id`, `customer`, `alamat`, `supir`, `armada`, `estimasi_tiba`, `status`, `catatan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'DO-2023-001', 1, 'Toko Maju Jaya', 'Jl. Sudirman No. 45, Jakarta', 'Budi Santoso', 'Truck Box B-9201', '2026-02-27 20:25:56', 'on_the_way', 'Pengiriman 300 pcs Brownies', 7, '2026-02-27 08:25:56', '2026-02-27 11:25:56'),
(2, 'DO-2023-002', 1, 'Indomaret Pusat', 'Jl. Thamrin No. 10, Jakarta', 'Ahmad Fauzi', 'Truck Box B-7820', '2026-02-27 22:25:56', 'on_the_way', 'Pengiriman 250 pcs Brownies', 7, '2026-02-27 09:25:56', '2026-02-27 11:25:56'),
(3, 'DO-2023-003', 1, 'Alfamart Jakarta', 'Jl. Gatot Subroto No. 88, Jakarta', 'Reza Pratama', 'Pick-up B-1234', '2026-02-28 18:25:56', 'pending', 'Pengiriman 200 pcs Brownies', 7, '2026-02-27 10:55:56', '2026-02-27 11:25:56'),
(4, 'DO-2023-004', 3, 'Giant Hypermarket', 'Jl. Asia Afrika No. 12, Bandung', 'Budi Santoso', 'Truck Box B-9201', '2026-02-25 18:25:56', 'delivered', 'Pengiriman 500 pcs Waffer', 7, '2026-02-24 11:25:56', '2026-02-27 11:25:56'),
(5, 'DO-2023-005', 3, 'Superindo Selatan', 'Jl. Pahlawan No. 56, Surabaya', 'Ahmad Fauzi', 'Truck Box B-7820', '2026-02-26 18:25:56', 'delivered', 'Pengiriman 450 pcs Waffer', 7, '2026-02-25 11:25:56', '2026-02-27 11:25:56'),
(6, 'DO-202604-0001', 3, 'asasas', 'saaaaaaa', 'sasa', 'sasasa', '2026-04-14 17:57:00', 'pending', 'qasasa', 7, '2026-04-05 10:57:51', '2026-04-05 10:57:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_packaging`
--

CREATE TABLE `laporan_packaging` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `shift` enum('1','2','3') NOT NULL,
  `operator_leader` varchar(100) DEFAULT NULL,
  `good_qty` int(11) DEFAULT 0,
  `reject_qty` int(11) DEFAULT 0,
  `catatan` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_packaging`
--

INSERT INTO `laporan_packaging` (`id`, `wo_id`, `shift`, `operator_leader`, `good_qty`, `reject_qty`, `catatan`, `created_by`, `created_at`) VALUES
(1, 1, '1', 'Rini Wijaya', 300, 5, 'Packaging shift 1 lancar', 6, '2026-02-25 11:25:56'),
(2, 1, '2', 'Dewi Sartika', 310, 8, 'Packaging shift 2 mesin sealer bermasalah', 6, '2026-02-26 11:25:56'),
(3, 1, '1', 'Rini Wijaya', 325, 4, 'Packaging shift 3 lancar', 6, '2026-02-26 23:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_produksi`
--

CREATE TABLE `laporan_produksi` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `shift` enum('1','2','3') NOT NULL,
  `operator_leader` varchar(100) DEFAULT NULL,
  `good_qty` int(11) DEFAULT 0,
  `reject_qty` int(11) DEFAULT 0,
  `catatan` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_produksi`
--

INSERT INTO `laporan_produksi` (`id`, `wo_id`, `shift`, `operator_leader`, `good_qty`, `reject_qty`, `catatan`, `created_by`, `created_at`) VALUES
(1, 1, '1', 'Joko Susilo', 320, 15, 'Produksi shift 1 lancar', 5, '2026-02-25 11:25:56'),
(2, 1, '2', 'Ahmad Subagio', 315, 18, 'Produksi shift 2 lancar', 5, '2026-02-26 11:25:56'),
(3, 1, '1', 'Joko Susilo', 330, 12, 'Produksi shift 3 lancar', 5, '2026-02-26 23:25:56'),
(4, 3, '1', 'Siti Nurjanah', 500, 25, 'Produksi waffer batch 1', 5, '2026-02-19 11:25:56'),
(5, 3, '2', 'Bambang Hermanto', 480, 30, 'Produksi waffer batch 2', 5, '2026-02-20 11:25:56'),
(6, 3, '1', 'Siti Nurjanah', 520, 20, 'Produksi waffer batch 3', 5, '2026-02-21 11:25:56'),
(7, 3, '2', 'Bambang Hermanto', 500, 25, 'Produksi waffer batch 4', 5, '2026-02-22 11:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_qc`
--

CREATE TABLE `laporan_qc` (
  `id` int(11) NOT NULL,
  `no_laporan` varchar(30) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `kategori` enum('bahan_baku','produksi','packaging') NOT NULL,
  `bahan_id` int(11) DEFAULT NULL,
  `wo_id` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_reject` int(11) DEFAULT 0,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_qc`
--

INSERT INTO `laporan_qc` (`id`, `no_laporan`, `judul`, `kategori`, `bahan_id`, `wo_id`, `deskripsi`, `jumlah_reject`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'LAP21001', 'Laporan QC Bahan Baku - Mentega', 'bahan_baku', 3, NULL, 'Kemasan rusak 5 pcs, aroma tengik 3 pcs, warna tidak seragam 2 pcs', 10, 'pending', 3, '2026-02-25 11:25:56', '2026-02-27 11:25:56'),
(2, 'LAP21002', 'Laporan QC Bahan Baku - Susu', 'bahan_baku', 14, NULL, 'Expired 5 liter, kemasan bocor 2 liter', 7, 'approved', 3, '2026-02-22 11:25:56', '2026-02-27 11:25:56'),
(3, 'LAP21003', 'Laporan QC Bahan Baku - Tepung', 'bahan_baku', 5, NULL, 'Menggumpal 3 karung, berkutu 1 karung', 200, 'pending', 3, '2026-02-26 11:25:56', '2026-02-27 11:25:56'),
(4, 'LAP21004', 'Laporan QC Produksi - Brownies', 'produksi', NULL, NULL, 'Tekstur kering 20 pcs, tidak mengembang 15 pcs, gosong 10 pcs', 45, 'rejected', 3, '2026-02-26 23:25:56', '2026-04-05 10:53:42'),
(5, 'LAP21005', 'Laporan QC Produksi - Mie Instan', 'produksi', NULL, NULL, 'Berat kurang 25 pcs, warna tidak merata 15 pcs, tekstur lembek 10 pcs', 50, 'approved', 3, '2026-02-24 11:25:56', '2026-02-27 11:25:56'),
(6, 'LAP202604001', 'sssssss', 'produksi', NULL, 1, 'sasas', 21, 'approved', 3, '2026-04-05 10:54:38', '2026-04-05 10:54:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_reject`
--

CREATE TABLE `laporan_reject` (
  `id` int(11) NOT NULL,
  `laporan_qc_id` int(11) NOT NULL,
  `bahan_id` int(11) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `alasan` text NOT NULL,
  `status` enum('pending','approved','processed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_reject`
--

INSERT INTO `laporan_reject` (`id`, `laporan_qc_id`, `bahan_id`, `jumlah`, `alasan`, `status`, `created_at`) VALUES
(1, 1, 3, 10.00, 'Kemasan rusak dan aroma tengik', 'pending', '2026-02-25 11:25:56'),
(2, 2, 14, 7.00, 'Expired dan kemasan bocor', 'approved', '2026-02-22 11:25:56'),
(3, 3, 5, 200.00, 'Menggumpal dan berkutu', 'pending', '2026-02-26 11:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_masuk`
--

CREATE TABLE `stok_masuk` (
  `id` int(11) NOT NULL,
  `bahan_id` int(11) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_expired` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stok_masuk`
--

INSERT INTO `stok_masuk` (`id`, `bahan_id`, `jumlah`, `tanggal_masuk`, `tanggal_expired`, `keterangan`, `user_id`, `created_at`) VALUES
(1, 1, 100.00, '2026-01-28', '2026-08-27', 'PO-001 dari PT Coklat Indo', 2, '2026-02-27 11:25:56'),
(2, 1, 150.00, '2026-02-12', '2026-08-27', 'PO-002 dari PT Coklat Indo', 2, '2026-02-27 11:25:56'),
(3, 2, 300.00, '2026-01-13', '2027-02-27', 'PO-003 dari Gula Tropicana', 2, '2026-02-27 11:25:56'),
(4, 3, 50.00, '2026-02-17', '2026-05-27', 'PO-004 dari Anchor Butter', 2, '2026-02-27 11:25:56'),
(5, 4, 120.00, '2026-02-22', '2026-03-13', 'PO-005 dari Peternakan Sumber Ayam', 2, '2026-02-27 11:25:56'),
(6, 5, 200.00, '2025-12-29', '2026-08-27', 'PO-006 dari Bogasari', 2, '2026-02-27 11:25:56'),
(7, 6, 40.00, '2026-02-07', '2027-02-27', 'PO-007 dari Van Houten', 2, '2026-02-27 11:25:56'),
(8, 3, 12121.00, '2026-03-02', '2026-09-02', 'saaaaaaaaaaaaaaaa', 2, '2026-03-02 16:20:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('manager','gudang','qc','rnd','produksi','packaging','distributor') NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `nama_lengkap`, `email`, `created_at`) VALUES
(1, 'manager_user', '482c811da5d5b4bc6d497ffa98491e38', 'manager', 'Budi Santoso', 'budi.santoso@sgudang.com', '2026-02-27 11:25:56'),
(2, 'gudang_user', '482c811da5d5b4bc6d497ffa98491e38', 'gudang', 'Ahmad Fauzi', 'ahmad.fauzi@sgudang.com', '2026-02-27 11:25:56'),
(3, 'qc_user', '482c811da5d5b4bc6d497ffa98491e38', 'qc', 'Siti Aminah', 'siti.aminah@sgudang.com', '2026-02-27 11:25:56'),
(4, 'rnd_user', '482c811da5d5b4bc6d497ffa98491e38', 'rnd', 'Dewi Lestari', 'dewi.lestari@sgudang.com', '2026-02-27 11:25:56'),
(5, 'produksi_user', '482c811da5d5b4bc6d497ffa98491e38', 'produksi', 'Joko Susilo', 'joko.susilo@sgudang.com', '2026-02-27 11:25:56'),
(6, 'packaging_user', '482c811da5d5b4bc6d497ffa98491e38', 'packaging', 'Rini Wijaya', 'rini.wijaya@sgudang.com', '2026-02-27 11:25:56'),
(7, 'distributor_user', '482c811da5d5b4bc6d497ffa98491e38', 'distributor', 'Reza Pratama', 'reza.pratama@sgudang.com', '2026-02-27 11:25:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_order`
--

CREATE TABLE `work_order` (
  `id` int(11) NOT NULL,
  `no_wo` varchar(30) NOT NULL,
  `komposisi_id` int(11) NOT NULL,
  `target_produksi` int(11) NOT NULL COMMENT 'dalam pcs',
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `deadline` date NOT NULL,
  `jumlah_sdm` int(11) DEFAULT 5,
  `status` enum('pending','on_progress','completed','cancelled') DEFAULT 'pending',
  `instruksi` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `work_order`
--

INSERT INTO `work_order` (`id`, `no_wo`, `komposisi_id`, `target_produksi`, `tanggal_mulai`, `tanggal_selesai`, `deadline`, `jumlah_sdm`, `status`, `instruksi`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'WO-BRN-FUD-DC-001', 1, 1000, '2026-02-25', NULL, '2026-03-02', 5, 'on_progress', '1. Lelehkan coklat + butter\n2. Masukkan gula, aduk rata\n3. Masukkan telur bertahap\n4. Tambahkan bahan kering\n5. Oven 165-170°C', 1, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(2, 'WO-MIE-001', 2, 5000, '2026-03-01', NULL, '2026-03-06', 8, 'pending', '1. Campur bahan kering\n2. Uleni hingga kalis\n3. Cetak mie\n4. Kukus\n5. Goreng', 1, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(3, 'WO-WAF-001', 3, 2000, '2026-02-17', '2026-02-24', '2026-02-25', 4, 'completed', '1. Campur bahan\n2. Panggang\n3. Beri isian\n4. Kemas', 1, '2026-02-27 11:25:56', '2026-02-27 11:25:56'),
(4, 'WO-69A18B3CDCE45', 2, 112122, '2026-02-27', NULL, '2026-03-06', 5, 'pending', 'sasasa', 1, '2026-02-27 12:17:00', '2026-02-27 12:17:00'),
(5, 'WO-69A18B5454F2F', 2, 1111, '2026-02-27', NULL, '2026-03-06', 52121, 'pending', 'mantab', 1, '2026-02-27 12:17:24', '2026-02-27 12:17:24'),
(6, 'WO-69D3C7ABDAECC', 3, 200, '2026-04-17', NULL, '2026-04-30', 11, 'pending', 'kerjakan dengan teliti', 1, '2026-04-06 14:48:11', '2026-04-06 14:48:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_bahan` (`kode_bahan`);

--
-- Indeks untuk tabel `detail_komposisi`
--
ALTER TABLE `detail_komposisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komposisi_id` (`komposisi_id`),
  ADD KEY `bahan_id` (`bahan_id`);

--
-- Indeks untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_formula` (`kode_formula`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `laporan_distribusi`
--
ALTER TABLE `laporan_distribusi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_do` (`no_do`),
  ADD KEY `wo_id` (`wo_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `laporan_packaging`
--
ALTER TABLE `laporan_packaging`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wo_id` (`wo_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wo_id` (`wo_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `laporan_qc`
--
ALTER TABLE `laporan_qc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_laporan` (`no_laporan`),
  ADD KEY `bahan_id` (`bahan_id`),
  ADD KEY `wo_id` (`wo_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indeks untuk tabel `laporan_reject`
--
ALTER TABLE `laporan_reject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_qc_id` (`laporan_qc_id`),
  ADD KEY `bahan_id` (`bahan_id`);

--
-- Indeks untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bahan_id` (`bahan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `work_order`
--
ALTER TABLE `work_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_wo` (`no_wo`),
  ADD KEY `komposisi_id` (`komposisi_id`),
  ADD KEY `created_by` (`created_by`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `detail_komposisi`
--
ALTER TABLE `detail_komposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laporan_distribusi`
--
ALTER TABLE `laporan_distribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laporan_packaging`
--
ALTER TABLE `laporan_packaging`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporan_qc`
--
ALTER TABLE `laporan_qc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `laporan_reject`
--
ALTER TABLE `laporan_reject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `work_order`
--
ALTER TABLE `work_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_komposisi`
--
ALTER TABLE `detail_komposisi`
  ADD CONSTRAINT `detail_komposisi_ibfk_1` FOREIGN KEY (`komposisi_id`) REFERENCES `komposisi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_komposisi_ibfk_2` FOREIGN KEY (`bahan_id`) REFERENCES `bahan_baku` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `komposisi`
--
ALTER TABLE `komposisi`
  ADD CONSTRAINT `komposisi_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `laporan_distribusi`
--
ALTER TABLE `laporan_distribusi`
  ADD CONSTRAINT `laporan_distribusi_ibfk_1` FOREIGN KEY (`wo_id`) REFERENCES `work_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_distribusi_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `laporan_packaging`
--
ALTER TABLE `laporan_packaging`
  ADD CONSTRAINT `laporan_packaging_ibfk_1` FOREIGN KEY (`wo_id`) REFERENCES `work_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_packaging_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  ADD CONSTRAINT `laporan_produksi_ibfk_1` FOREIGN KEY (`wo_id`) REFERENCES `work_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_produksi_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `laporan_qc`
--
ALTER TABLE `laporan_qc`
  ADD CONSTRAINT `laporan_qc_ibfk_1` FOREIGN KEY (`bahan_id`) REFERENCES `bahan_baku` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `laporan_qc_ibfk_2` FOREIGN KEY (`wo_id`) REFERENCES `work_order` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `laporan_qc_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `laporan_reject`
--
ALTER TABLE `laporan_reject`
  ADD CONSTRAINT `laporan_reject_ibfk_1` FOREIGN KEY (`laporan_qc_id`) REFERENCES `laporan_qc` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `laporan_reject_ibfk_2` FOREIGN KEY (`bahan_id`) REFERENCES `bahan_baku` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD CONSTRAINT `stok_masuk_ibfk_1` FOREIGN KEY (`bahan_id`) REFERENCES `bahan_baku` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stok_masuk_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `work_order`
--
ALTER TABLE `work_order`
  ADD CONSTRAINT `work_order_ibfk_1` FOREIGN KEY (`komposisi_id`) REFERENCES `komposisi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `work_order_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
