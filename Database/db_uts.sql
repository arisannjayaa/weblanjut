create database db_uts;

create table tb_user (
	id_user int primary key auto_increment,
	username varchar(50),
	password varchar(50)
);

create table tb_barang (
	id_barang int primary key auto_increment,
	nama_barang varchar(50),
	jenis_barang varchar(50),
	deskripsi_barang varchar(50),
	qty_barang tinyint,
	harga_barang float
);

insert into tb_user(username, password) values
('admin', 'admin'),
('pembeli', 'pembeli');
