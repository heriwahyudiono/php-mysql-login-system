CREATE DATABASE login;

USE login;

CREATE TABLE users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama_lengkap VARCHAR(255) NOT NULL,
  jenis_kelamin ENUM('Laki-laki', 'Perempuan') NOT NULL,
  tanggal_lahir DATE NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  nomor_telepon VARCHAR(20) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  token VARCHAR(255)
);

