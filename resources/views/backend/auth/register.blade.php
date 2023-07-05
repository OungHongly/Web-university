<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="backend/img/favicon.png" rel="icon">
    <link href="backend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="backend/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="backend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="" class="logo d-flex align-items-center w-auto">
                                    <img src="backend/img/logos.png" alt="">
                                    <span class="d-none d-lg-block"><span>UNIS.<span></span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif


                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Register Your Account</h5>
                                            <p class="text-center small">Enter Account Information</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('customRegister') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="firstname" class="form-label">Firstname</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="firstname" class="form-control"
                                                    id="firstname" required>
                                                <div class="invalid-feedback">Please enter your firstname.</div>
                                                @if ($errors->has('firstname'))
                                                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="lastname" class="form-label">Lastname</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="lastname" class="form-control"
                                                    id="lastname" required>
                                                <div class="invalid-feedback">Please enter your lastname.</div>
                                                @if ($errors->has('lastname'))
                                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="password" class="form-control"
                                                    id="password" required>
                                                <div class="invalid-feedback">Please enter your password.</div>
                                                @if ($errors->has('password'))
                                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-3 pt-0">Gender</legend>
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="rFemale" value="female" checked>
                                                    <label class="form-check-label" for="rFemale">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gender"id="rMale" value="male">
                                                    <label class="form-check-label" for="rMale">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="col-12">
                                            <label for="phonenumber" class="form-label">Phone Number</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="phonenumber" class="form-control"
                                                    id="phonenumber" required>
                                                <div class="invalid-feedback">Please enter your phone number.</div>
                                                @if ($errors->has('phonenumber'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('phonenumber') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control"
                                                    id="email" required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col mb-12">
                                            <label for="role_id" class="col-sm-5 col-form-label">Role Name</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" aria-label="Default select example" name="role_id" id="role_id">
                                                    <!--<option selected>Open this select menu</option>-->
                                                    <option selected value="5">Admin</option>
                                                    <option value="6">Student</option>
                                                    <option value="7">Teacher</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="backend/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="backend/vendor/chart.js/chart.umd.js"></script>
    <script src="backend/vendor/echarts/echarts.min.js"></script>
    <script src="backend/vendor/quill/quill.min.js"></script>
    <script src="backend/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="backend/vendor/tinymce/tinymce.min.js"></script>
    <script src="backend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="backend/js/main.js"></script>

</body>

</html>
