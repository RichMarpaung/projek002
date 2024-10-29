<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.hostlin.com/Golfer/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 13:44:49 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>GolFer - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/odometer.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/color.css" id="jssDefault" rel="stylesheet">
<link href="assets/css/rtl.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/module-css/header.css" rel="stylesheet">
<link href="assets/css/module-css/page-title.css" rel="stylesheet">
<link href="assets/css/module-css/login.css" rel="stylesheet">
<link href="assets/css/module-css/cta.css" rel="stylesheet">
<link href="assets/css/module-css/footer.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>


        <!-- sign-section -->
        <section class="sign-section pt_40 pb_40">
            <div class="large-container">
                <div class="sec-title centred mb_20">
                    <h2>Log in</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label>Email <span>*</span></label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password <span>*</span></label>
                            <input type="password" name="password" required>
                        </div>
                        @if (Session::has('status'))
                        <div class="alert {{ Session::get('status') == 'success' ? 'alert-success' : 'alert-danger' }} mt-2" role="alert">
                         {{Session::get('massage')}}
                          </div>
                        @endif
                        <div class="form-group message-btn">
                            <button type="submit" class="theme-btn btn-one">Log In</button>
                        </div>

                    </form>
                    <div class="lower-text centred"><p>Not registered yet? <a href="{{ route('register') }}">Create an Account</a></p></div>
                </div>
            </div>
        </section>
        <!-- sign-section end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/scrolltop.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/odometer.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.hostlin.com/Golfer/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 13:44:52 GMT -->
</html>
