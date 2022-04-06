create database db_mahasiswa;

create table tb_jurusan(
	id_jurusan int primary key auto_increment,
    nama_jurusan varchar(50)
);

CREATE TABLE tb_mahasiswa(
	id_mhs int primary key auto_increment,
    nim_mhs varchar(15),
    nama_mhs varchar(50),
    id_jurusan int,
    tlp_mhs varchar(15),
    alamat_mhs varchar(60),
    foreign key (jurusan) REFERENCES tb_jurusan(id)
);

insert into tb_jurusan(nama) values
('Teknik Elektro'),
('Teknik Sipil'),
('Pariwisata'),
('Administrasi Niaga'),
('Akuntansi');