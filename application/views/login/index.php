<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div id="layoutAuth">
        <div id="layoutAuthContent">
            <main>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="container rounded bg-dark p-5 mt-5">
                            <div class="mb-3 fs-3 fw-bold text-light">Login</div>
                            <hr class="text-light">
                            <div class="divider"></div>
                            <form action="<?= base_url('login/doLogin') ?>" method="POST" class="text-light">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="" aria-describedby="emailHelp">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label ">Password</label>
                                    <input type="password" class="form-control" id="">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="">
                                            <label class="form-check-label " for="">Remmember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <a href="">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="row">

                                    <button type="submit" class="btn btn-primary fw-bold">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>