-- Tabel Produk
CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kategori_produk VARCHAR(50) NOT NULL,
    nama_produk VARCHAR(100) NOT NULL,
    harga_produk DECIMAL(10, 2) NOT NULL,
    jumlah_stok INT NOT NULL
);

-- Tabel Riwayat Transaksi
CREATE TABLE riwayat_transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pembeli VARCHAR(100) NOT NULL,
    tanggal_pembelian DATE NOT NULL,
    waktu_pembelian TIME NOT NULL,
    nama_produk TEXT NOT NULL,
    jumlah_produk TEXT NOT NULL,
    total_harga DECIMAL(10, 2) NOT NULL
);

-- Tabel Akun User
CREATE TABLE akun_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    nomer_telepon VARCHAR(15),
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Tabel Akun Owner
CREATE TABLE akun_owner (
    username_admin VARCHAR(50) NOT NULL PRIMARY KEY,
    password_admin VARCHAR(255) NOT NULL
);

-- Insert Owner Default Data
INSERT INTO akun_owner (username_admin, password_admin)
VALUES ('ownerternakmart', MD5('ternakmartpalinglengkap'));