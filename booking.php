
<!--  insert booking----->
<?php
require_once 'config.php';
require __DIR__ . '/mpesalipa/vendor/autoload.php';
include_once('token.php');
    use Carbon\Carbon;
                      if (isset($_POST['ok'])){

                      $email = $_POST['email'];
                      $name=$_POST['name'];
                      $phone=$_POST['phone'];
                      $service=$_POST['service'];
                      $time=$_POST['time'];
                      $date=$_POST['date'];
                      $description=$_POST['description'];
                      $mop=$_POST['mop'];
                      $amount=$_POST['amount'];
                      $mop1='Payment After Service';
                      $amount1='Not Paid';

                      if($mop=='Mpesa'){

                      $query = "INSERT INTO bookings(name,email,phone,service,payment_mode,amount_paid,date,time,description) VALUES('$name','$email','$phone','$service','$mop','$amount','$date','$time','$description')";
                      $run = mysqli_query($conn,$query);
                      
                      $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $curl_post_data = [
            'BusinessShortCode' =>174379,
            //'BusinessShortCode' =>7360076,
            'Password' => lipaNaMpesaPassword(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' =>'254'.(int)($_POST['phone']),
            'PartyB' => 174379,
            //'PartyB' => 7360076,
            'PhoneNumber' => '254'.(int)($_POST['phone']),
            'CallBackURL' => 'https://nexpay.co.ke/mpesalipa/confirmation_url.php',
           
            'AccountReference' => 'M_C_Spa',
            
            'TransactionDesc' => 'M_C_Spa',
        ];

   
       $data_string = json_encode($curl_post_data);


       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.newAccessToken()));
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
       $curl_response = curl_exec($curl);


	
				
		//print_r($curl_response);
                      if($run){
                        //echo "<script> window.location='booking.php' </script>";<script>
                        ?>
                          
                        <script> alert ("We will reach you in a few to confirm your booking");</script>
                          <?php
                          echo "<script> window.location='index.php' </script>";
                        
                      }
                      else{
                          echo "error".mysqli_error($conn);
                      }   
                    }else{
                      $query = "INSERT INTO bookings(name,email,phone,service,payment_mode,amount_paid,date,time,description) VALUES('$name','$email','$phone','$service','$mop1','$amount1','$date','$time','$description')";
                      $run = mysqli_query($conn,$query);
                      
                      if($run){
                        //echo "<script> window.location='booking.php' </script>";<script>
                        ?>
                          
                          <script> alert ("We will reach you in a few to confirm your booking");</script><?php
                          echo "<script> window.location='index.php' </script>";
                        
                      }
                      else{
                          echo "error".mysqli_error($conn);
                      }   
                      
                    }
              
      
                      }
                                    ?>
 <!--  //insert booking----->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php include('title.php');?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v4.7.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><?php include('title.php');?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
          <li><a class="getstarted scrollto active" href="#">Book</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="heros" class="mt-2">
  </section><!-- End Hero -->

  <main id="main">

    

<!-- ======= book now Section ======= -->
<section id="conta" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Book for Appointment</h2>
          <p><i>booking for a single service</i></p>
          <p>We will reach you with thw price and notify you if there is a free slot(confirm)</p>
        </div>

        <div class="form">
          <form enctype="multipart/form-data" action="booking.php" method="POST" class="phpf">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="phone number 254" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                
                <select class="form-control" name="service">
                <option>Choose the service you need.</option>
                <option value="Pedicure">Pedicure</option>
                <option value="Moneycure">Moneycure</option>
                <option value="Foot Massage">Foot Massage</option>
                <option value="Full body massage">Full body massage</option>
                <option value="Hair styling">Hair styling(specify)</option>
                <option value="Facials">Facials</option>
                </select>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-6 form-group">
                <input type="date" name="date" class="form-control" id="date" placeholder="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                
                <select class="form-control" name="time">
                <option>Choose the time</option>
                <option value="0900 - 1100">0900 - 1100</option>
                <option value="1100 - 1300">1100 - 1300</option>
                <option value="1400 - 1600">1400 - 1600</option>
                <option value="1600 - 1800">1600 - 1800</option>
                <option value="1800 - 2000">1800 - 2000</option>
                <option value="2000 - 2200">2000 - 2200</option>
                </select>
              </div>
            </div>
           
            <input type="hidden" name="amount" class="form-control" id="amount" value="1">
            <input type="hidden" name="mop" class="form-control" id="amount" value="pas">
                
              
            <div class="form-group mt-2 mb-2">
              <textarea class="form-control" name="description" rows="5" placeholder="Description" required></textarea>
            </div>
          
            <div class="text-center"><button type="submit"  name="ok" class="btn text-white" style=" background-color: #5c9f24;">Book now</button></div>
          </form>
        </div>

      </div>
    </section><!-- End book now Section -->
    <!-- ======= Clients Section ======= ->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>
 hair cutting, hair coloring, hair styling, hair treatment, facials, skincare treatment, nail treatment and massages
      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Book For Packages</h2>
          <p>Giving affordable packages to our customers</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Lite</h3>
              <h4><sup>Ksh</sup>1200<span> for:</span></h4>
              <ul>
                <li>Pedicure</li>
                <li>Moneycure</li>
                <li>Foot massage</li>
                <li class="na">Facials</li>
                <li class="na">Full body massage</li>
              </ul>
              <div class="btn-wrap">
              <a href="#conta" class="btn-buy">Book Now </a>
                <!-- <a href="booking-l.php" class="btn-buy">Book Now</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <h3>Standard</h3>
              <h4><sup>Ksh</sup>1700<span> for:</span></h4>
              <ul>
                <li>Pedicure</li>
                <li>Moneycure</li>
                <li>Foot massage</li>
                <li>Facials</li>
                <li class="na">Full body massage</li>
              </ul>
              <div class="btn-wrap">
              <a href="#conta" class="btn-buy">Book Now </a>
                <!-- <a href="booking-s.php" class="btn-buy">Book Now</a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Premium</h3>
              <h4><sup>Ksh</sup>2300<span> for:</span></h4>
              <ul>
                <li>Pedicure</li>
                <li>Moneycure</li>
                <li>Foot massage</li>
                <li>Facials</li>
                <li>Full body massage</li>
              </ul>
              <div class="btn-wrap">
                <a href="#conta" class="btn-buy">Book Now </a>
                <!-- <a href="booking-p.php" class="btn-buy">Book Now</a> -->
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>This are some few reasons you need to choose us</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>01</span>
              <h4>Quality</h4>
              <p>Each M$C product features exceptional quality. Whether it’s a hot tub or a swim spa, each model offers a premium experience.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>02</span>
              <h4>Time efficient</h4>
              <p>Each M$C employee provides quality. At a minimum time or period thus helping you save on time.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>03</span>
              <h4> Comfort</h4>
              <p>We have the best products the best funitures and entertaining team that makes sure you are served and sattisfied</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3><?php include('title.php');?></h3>
              <p>
                Thika town <br>
                Kiambu 532, KE<br><br>
                <strong>Phone:</strong> +254 789 5588 55<br>
                <strong>Email:</strong> mc@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> Terms of service</li>
              <li><i class="bx bx-chevron-right"></i> Privacy policy</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>hair cutting</li>
              <li><i class="bx bx-chevron-right"></i> skincare treatment</li>
              <li><i class="bx bx-chevron-right"></i> Massage</li>
              <li><i class="bx bx-chevron-right"></i> Marketing</li>
              <li><i class="bx bx-chevron-right"></i> Graphic Design</li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to get to know about our offers</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php include('title.php');?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        Designed by <a href="#">Me</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>