create database db_toko;

use db_toko;

create table tb_barang(
    id_brg int primary key auto_increment,
    nama_brg varchar(50),
    jenis_brg varchar(50),
    deskripsi_brg text,
    qty_brg int,
    harga_brg float
);

create table tb_pembeli(
	id_cart int primary key auto_increment,
	nama_cart varchar(50),
	alamat_cart varchar(40),
	telp_cart varchar(20),
	harga_cart float
);

insert into tb_barang(nama_brg, jenis_brg, deskripsi_brg, qty_brg, harga_brg) values
('Logitech Mx Master 3', 'Periferal', 'Mouse', 100, 80000),
('Fantech Maxfit61', 'Periferal', 'Keyboard', 100, 499000),
('Hardisk 1TB', 'Penyimpanan', 'Hardisk', 100, 800000),
('Asus RTX 3060', 'Periferal', 'Kartu Grafis', 100, 80000),
('Rexus Thundervox HX9', 'Periferal', 'Headset', 100, 80000);
