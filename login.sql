CREATE DATABASE login;

USE login;

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama_lengkap VARCHAR(255) NOT NULL,
  jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
  tanggal_lahir DATE NOT NULL,
  email VARCHAR(255) NOT NULL,
  nomor_telepon VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL
);