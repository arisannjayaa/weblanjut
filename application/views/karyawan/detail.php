<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <?php
	if ($karyawan['jabatan'] == 1) {
		$karyawan['jabatan'] = 'Cleaning Service';
		$total = (100000 * $karyawan['hari']) + 100000;
	}elseif ($karyawan['jabatan'] == 2) {
		$karyawan['jabatan'] = 'Staff';
		$total = (200000 * $karyawan['hari']) + (50000 * $karyawan['hari']);
	}else {
		$karyawan['jabatan'] = 'Manager';
		$total = (300000 * $karyawan['hari']) + (50000 * $karyawan['hari']) + 1000000;
	}
	?>
    <h1>Hasil</h1>
    <table>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?=$karyawan['jabatan']?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?=$total?></td>
        </tr>
    </table>
</body>

</html>