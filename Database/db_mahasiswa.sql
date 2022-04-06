#drop database db_mahasiswa;

CREATE DATABASE db_mahasiswa;

CREATE TABLE tb_jurusan(
    id_jurusan INT PRIMARY KEY AUTO_INCREMENT,
    nama_jurusan VARCHAR(50)
);

CREATE TABLE tb_mahasiswa(
    id_mhs INT PRIMARY KEY AUTO_INCREMENT,
    nim_mhs VARCHAR(15),
    nama_mhs VARCHAR(50),
    id_jurusan INT,
    tlp_mhs VARCHAR(15),
    alamat_mhs VARCHAR(60),
    FOREIGN KEY (id_jurusan) REFERENCES tb_jurusan(id_jurusan)
);

INSERT INTO tb_jurusan(nama_jurusan) VALUES
('Teknik Elektro'),
('Teknik Sipil'),
('Pariwisata'),
('Administrasi Niaga'),
('Akuntansi');