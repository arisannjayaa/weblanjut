<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="<?=base_url('session/login')?>" method="post">
                            <div class="mb-3">
                                <h4 class="text-center">Login</h4>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" name="user" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" name="pass" placeholder="Password">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>




</html>
