



<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("static/head") ?>

</head>
<body>

<main>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100 py-5">
            <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                <div class="card card-body text-center p-4 p-sm-5">
                    <h1 class="mb-2">Sign in</h1>
                    <form action="<?= site_url('login') ?>" method="post" class="mt-sm-4">
                        <div class="mb-3 input-group-lg">
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="mb-3 position-relative">
                            <div class="input-group input-group-lg">
                                <input class="form-control fakepassword" name="password" type="password" id="psw-input" placeholder="Enter new password">
                                <span class="input-group-text p-0">
                                    <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3 d-sm-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="rememberCheck">
                                <label class="form-check-label" for="rememberCheck">Remember me?</label>
                            </div>
                            <a href="<?= site_url('auth/forgot_password') ?>">Forgot password?</a>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="login" class="btn btn-lg btn-primary">Login</button>
                        </div>
                    </form>
                    <p class="mb-0 mt-3">©2023 <a target="_blank" href="https://www.webestica.com/">Webestica.</a> All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/pswmeter/pswmeter.min.js') ?>"></script>
<script src="<?= base_url('assets/js/functions.js') ?>"></script>

</body>
</html>
