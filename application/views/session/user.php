<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helo, <?=$sesi['user']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <h4>Selamat Datang, <span class="text-primary"><?=$sesi['user']?></span></h4>
                        </div>
                        <div class="mb-3">
                            <a href="<?=base_url('session/destroy')?>"><button
                                    class="btn btn-outline-primary w-100">Logout</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <s src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </s cript>

</body>




</html>
