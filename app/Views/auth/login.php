<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Signin</title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Sign In</h4>
                <form action="<?= base_url('/auth/login') ?>" method="post">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger mb-4 d-flex align-items-center">
                            <i class="bx bx-error fs-3 me-2"></i>
                            <div><?= session()->getFlashdata('error') ?></div>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-primary" type="submit">Signin</button>
                    </div>
                </form>
            </div>
            <div>Belum terdaftar, daftar sekarang <a href="/auth/signup">Daftar</a></div>
        </div>
    </div>
    <!--Bootstrap 5-->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>