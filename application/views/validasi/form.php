<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="<?=base_url('form/input')?>" method="post">
        <table>
            <tr>
                <td colspan="3"><?=form_error('nama')?></td>
            </tr>
            <tr>
                <td><label for="">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Input Nama"></td>
            </tr>
            <tr>
                <td colspan="3"><?=form_error('email')?></td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td>:</td>
                <td><input type="text" name="email" placeholder="Input Email"></td>
            </tr>
            <tr>
                <td colspan="3"><?=form_error('alamat')?></td>
            </tr>
            <tr>
                <td><label for="">Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Input Alamat"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>