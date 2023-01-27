<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <title>Signup</title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Sign Up</h4>
                <form action="<?= base_url('/auth/register') ?>" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter comfirm password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Bootstrap 5-->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>