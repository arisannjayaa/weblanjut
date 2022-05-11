create database db_toko;

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
