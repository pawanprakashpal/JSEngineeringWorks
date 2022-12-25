<!DOCTYPE html>
<!-- BLOCK1 Starts-->
<?php
$check = "";
if (!empty($_POST) && isset($_POST["submit"]) && $_POST["submit"] == "Submit") {

    require('class.php');

    $contact = new contactForm($_POST);

    // Function definition - 
    // sendEmail(SMTP,From,To,Cc,BCc,Subject);
    $check = $contact->sendEmail("mail.jsengineeringworks.com", "info@jsengineeringworks.com", "info@jsengineeringworks.com", "", "", "Contact Form");
}
?>
<html lang="zxx">

<!-- BLOCK1 Ends-->

<head>
    <title>JS Engineering Works | Contact</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Shaft Locking Housing,Gears, Power Transmission, Bushes, pinion, JS Engineering Works" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- BLOCK2 Starts -->
    <style>
        table {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 13px;
        }

        .mandatory {
            color: #FF0000;
        }

        #msg {
            color: #FF0000;
        }
    </style>

    <script language="javascript" type="text/javascript">
        function frmcheck(frm) {

            var textBoxes = frm.getElementsByTagName('input');

            for (var i = 0; i <= textBoxes.length - 1; i++) {
                if (textBoxes[i].name != "phone" && textBoxes[i].value == "") {
                    alert("Please complete the Form");
                    return false;
                    break;
                }
            }

            var textarea = frm.getElementsByTagName('textarea');

            if (textarea[0].value == "") {
                alert("Please complete the Form");
                return false;
            }
        }
    </script>
    <!-- BLOCK2 Ends -->

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="form.js"></script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>

    <!-- mian-content -->
    <div class="main-banner inner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <img src="images/jse.jpg" alt="JSE" />
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Products <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Products <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>

                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="services.html">Services</a></li>
                            </ul>
                        </li>

                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

    </div>
    <!--//main-content-->
    <!---->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!---->
    <!--// mian-content -->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3"> Contact Us</h3>
            <div class="row contact-main-info mt-5">
                <div class="col-md-7 contact-right">
                    <form name="frm" action="" method="post" onSubmit="return frmcheck(this)">                       
                       <div class="container py-md-5 py-4"<?php if(empty($check)) echo ' style="display:none;"'; ?>>
                            <h3 class="tittle text-center mb-lg-5 mb-3">
                                <?php echo $check; ?>
                            </h3>
                        </div>
                        <div>
                            <input id="name" type="text" name="name" placeholder="Name" required="">
                        </div>
                        <div>
                            <input id="email" type="email" class="email" name="email" placeholder="Email" required="">
                        </div>
                        <div>
                            <input id="phone" type="text" name="phone" placeholder="Phone" required="">
                        </div>
                        <div>
                            <textarea id="message" name="message" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="read mt-3">
                            <button type="submit" name="submit" class="btn" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 contact-left">
                    <div class="address">
                        <h5>Address:</h5>
                        <p><span class="fa fa-home"></span>Plot No. 9A, Street No.14, Railway Road, Samaipur,New Delhi - 110042,
                            <br> India.</p>
                    </div>
                    <div class="address address-mdl">
                        <h5>Phones:</h5>
                        <p><span class="fa fa-phone"></span> +91 (989) 907 5182</p>
                        <p><span class="fa fa-mobile"></span> +1 (516) 737 88189</p>
                    </div>
                    <div class="address">
                        <h5>Email:</h5>
                        <p><span class="fa fa-envelope"></span> <a href="mailto:info@jsengineeringworks.com">info@jsengineeringworks.com</a></p>
                        <p><span class="fa fa-globe"></span> <a href="www.jsengineeringworks.com">www.jsengineeringworks.com</a></p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.9607610120006!2d77.13780641546865!3d28.75058848547786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0103008fc361%3A0xda5516c0919f8830!2s9%2C%20Street%20Number%2014%2C%20Yadav%20Nagar%2C%20Samaypur%2C%20Delhi%2C%20110042%2C%20India!5e0!3m2!1sen!2sus!4v1582783881702!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>

    <!-- //contact -->

    <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">
                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : Plot No. 9A, Street No.14, Railway Road, Samaipur,New Delhi - 110042, India</p>
                            <p>Phone : +91 9899075182</p>
                            <p>Email : <a href="mailto:jpal1960@gmail.com">info@jsengineeringworks.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Catch On</h3>
                        </div>
                        <p>Follow us on Social Media to Keep up with our current news and events!</p>
                        <ul class="social_section_1info">
                            <li class="mb-2 facebook"><a href="https://www.facebook.com/JSEngineeringWorks" target="_blank"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                            <!-- <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li> -->
                            <li class="google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
                            <!-- <li class="linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li> -->
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="footer-text">
                            <p>By subscribing to our mailing list you will always get latest news and updates from us.
                            </p>
                            <form action="#" method="post">
                                <input type="email" name="Email1" placeholder="Enter your email..." required="">
                                <button class="btn1 btn"><span class="fa fa-paper-plane-o" aria-hidden="true"></span></button>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="#home" class="move-top"> <span class="fa fa-angle-up mb-3" aria-hidden="true"></span></a>
                </div>

            </div>
        </section>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p class="">© 2020 JS Engineering Works. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
    <!-- //copyright -->

</body>

</html>