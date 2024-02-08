<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("main/static/head") ?>
</head>

<body>
    <main>
        <!-- Container START -->
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100 py-5">
                <!-- Main content START -->
                <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                    <!-- Sign up START -->
                    <div class="card card-body rounded-3 p-4 p-sm-5">
                        <div class="text-center">
                            <!-- Title -->
                            <h1 class="mb-2">Sign up</h1>
                            <span class="d-block">Already have an account? <a href="<?= site_url('sign-in') ?>">Sign in
                                    here</a></span>
                        </div>
                        <!-- Form START -->
                        <form class="mt-4" action="<?= site_url('sign-up') ?>" method="post">

                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- First name -->
                                    <div class="mb-3 input-group-lg">
                                        <input required name="firstname" type="text" class="form-control" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Surname -->
                                    <div class="mb-3 input-group-lg">
                                        <input required name="surname" type="text" class="form-control" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                          <!-- Email -->
                            <div class="mb-3 input-group-lg">
                                <input required name="email" type="email" class="form-control" placeholder="Enter email">
                            </div>
                        
                            <!-- New password -->
                            <div class="mb-3 position-relative">
                                <!-- Input group -->
                                <div class="input-group input-group-lg">
                                    <input class="form-control fakepassword" type="password" name="password" id="psw-input"
                                        placeholder="Enter new password" required>
                                    <span class="input-group-text p-0">
                                        <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                                    </span>
                                </div>
                                <!-- Pswmeter -->
                                <div id="pswmeter" class="mt-2"></div>
                            </div>
                            <!-- Date of birth -->
                            <label for="">Date Of Birth</label>
                            <div class="row" >
                                <div class="col-sm-4">
                                    <select required name="date" class="form-control  custom-select">
                                        <option selected>Date</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select required name="month" class="form-control  custom-select">
                                        <option selected>Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select required name="year" class="form-control  custom-select">
                                        <option selected>Year</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Gender -->
                            <label class="mt-3" for="">Gender</label>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Female</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input required type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Other</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Sign me up</button></div>
                            <?php if (isset($error)): ?>
                                <p style="color: red;display: flex;justify-content: center;" class="mt-4">
                                    <?= $error ?>
                                </p>
                            <?php endif; ?>
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Sign up END -->
                </div>
            </div> <!-- Row END -->
        </div>
        <!-- Container END -->

    </main>

    <script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/pswmeter/pswmeter.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/functions.js') ?>"></script>

</body>

</html>
