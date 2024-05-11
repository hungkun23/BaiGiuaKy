CREATE DATABASE QUANLYSACH;
USE QUANLYSACH;
CREATE TABLE Sach (
    MaSach INT AUTO_INCREMENT PRIMARY KEY,
    TenSach VARCHAR(255),
    SoLuong INT
);

CREATE TABLE User (
    MaUser INT AUTO_INCREMENT PRIMARY KEY,
    TenUser VARCHAR(255),
    MatKhau VARCHAR(255)
);

INSERT INTO Sach (TenSach, SoLuong) VALUES
('Sách 1', 10),
('Sách 2', 20),
('Sách 3', 30),
('Sách 4', 40),  
('Sách 5', 50);

INSERT INTO User (TenUser, MatKhau) VALUES
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3'),
('user4', 'password4'),
('user5', 'password5');
