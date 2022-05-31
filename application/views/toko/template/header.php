<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link href="<?= base_url('/bootstrap/dist/css/styles.css') ?>" rel="stylesheet" />
	<style>
		* {
			font-family: 'Poppins', sans-serif;
		}
	</style>
</head>

<body>
	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="border-end bg-white" id="sidebar-wrapper">
			<div class="sidebar-heading fw-normal">Toko <span class="text-primary fw-bolder">Keranjang</span></div>
			<div class="list-group list-group-flush">
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('toko/dashboard') ?>">Dashboard</a>
			</div>
			<div class="list-group list-group-flush">
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('toko/cart') ?>">Keranjang</a>
			</div>
			<div class="list-group list-group-flush">
				<a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= base_url('toko/barang') ?>">Data Barang</a>
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper" class="bg-light">
			<!-- Top navigation-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-list"></i></button>

				</div>
			</nav>
			<!-- Page content-->
			<div class="container-fluid mt-4">
