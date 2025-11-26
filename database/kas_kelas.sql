-- SQL Setup for kas_kelas Project
-- Create database
CREATE DATABASE IF NOT EXISTS kas_kelas;
USE kas_kelas;

-- =====================================================================
-- TABLE: anggota
-- =====================================================================
CREATE TABLE anggota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('L','P') NOT NULL,
    no_hp VARCHAR(20) DEFAULT NULL
);

-- Insert sample anggota
INSERT INTO anggota (nama, jenis_kelamin, no_hp) VALUES
('Aulia Rahman', 'L', '081234567890'),
('Nisa Putri', 'P', '085267889900'),
('Rizki Pratama', 'L', '082312567890'),
('Salsa Amelia', 'P', '081355667788');

-- =====================================================================
-- TABLE: kas (pemasukan & pengeluaran)
-- =====================================================================
CREATE TABLE kas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATE NOT NULL,
    jenis ENUM('pemasukan', 'pengeluaran') NOT NULL,
    keterangan VARCHAR(255) NOT NULL,
    jumlah INT NOT NULL
);

-- Insert sample kas data
INSERT INTO kas (tanggal, jenis, keterangan, jumlah) VALUES
('2025-01-05', 'pemasukan', 'Iuran bulan Januari', 40000),
('2025-01-10', 'pengeluaran', 'Beli Spidol Kelas', 15000),
('2025-02-01', 'pemasukan', 'Iuran Februari', 60000),
('2025-02-15', 'pengeluaran', 'Beli Kertas HVS', 20000);

-- =====================================================================
-- TABLE: iuran (per siswa per bulan)
-- =====================================================================
CREATE TABLE iuran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    anggota_id INT NOT NULL,
    bulan VARCHAR(20) NOT NULL,
    status ENUM('sudah', 'belum') DEFAULT 'belum',
    jumlah INT DEFAULT 20000,
    FOREIGN KEY (anggota_id) REFERENCES anggota(id) ON DELETE CASCADE
);

-- Insert sample iuran records
INSERT INTO iuran (anggota_id, bulan, status, jumlah) VALUES
(1, 'Januari', 'sudah', 20000),
(2, 'Januari', 'belum', 20000),
(3, 'Januari', 'sudah', 20000),
(4, 'Januari', 'sudah', 20000),
(1, 'Februari', 'belum', 20000),
(2, 'Februari', 'belum', 20000);

-- =====================================================================
-- TABLE: users
-- =====================================================================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert default user (password: 12345)
INSERT INTO users (username, password) VALUES
('admin', '$2y$10$k1XhxN5oQ8M7GgB8qO8SeOy1ybE6xLhGhrCLrVwN7NZ2qFyS2rZKu');

-- =====================================================================
-- END OF DATABASE SETUP
