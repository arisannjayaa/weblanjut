<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Gaji</title>
</head>

<body>
    <h1>Hitung Gaji</h1>
    <form action="<?=base_url('karyawan/hasil')?>" method="post">
        <table>
            <tr>
                <td>Nama Jabatan</td>
                <td>:</td>
                <td>
                    <select name="jabatan" id="jabatan">
                        <option value="1">Cleaning Service</option>
                        <option value="2">Staff</option>
                        <option value="3">Manager</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jumlah Hari</td>
                <td>:</td>
                <td><input type="text" name="hari"></td>
            </tr>
            <tr>
                <td><button type="submit">Hitung</button></td>
            </tr>
        </table>
    </form>
</body>

</html>