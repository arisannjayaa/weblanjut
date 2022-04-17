create database db_toko;

create table tb_barang(
    id_brg int primary key auto_increment,
    nama_brg varchar(50),
    jenis_brg varchar(50),
    deskripsi_brg text,
    qty_brg int,
    harga_brg float
);

