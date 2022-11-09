 <?php

session_start();

if(isset($_SESSION['is_adminlogin'])){
  $email = $_SESSION['email'];
}
else{
  echo "<script>location.href='index.html'</script>";
}

?> 



<!DOCTYPE html>
<html lang="en">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TL8CPW3');</script>
<!-- End Google Tag Manager -->

  <script type="text/javascript">

    if (screen.width <= 699) {

      window.location = "http://m.hospitalityminds.com/";

    }

  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78744332-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-78744332-1');
  </script>
  <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospitality Minds | Hotel Audit | Improve Hotel’s Sales</title>
  <meta name="description"
    content="We at Hospitality Minds conduct an Audit for your hotel where we look for point to enhance your hotel ambience which create a positive impression on the guests">
  <meta name="keywords"
    content="top revenue management companies in world for hotels, Revenue management company in World, Top Revenue Management Company for Hotels, business potential, Hotel Advisory, understanding the market trends, investments at right place, Quality staff, Source of business, Setting up online reputation, pre-opening services, Hotel Saviour, hotel going through tough times, expertise to protect hotel, sales, marketing, guest relationship, hotel consultants in mumbai, hotel consultants in india, hotel advisory, hotel advisory in mumbai, hotel advisory in india, ota consultants in mumbai, ota consultants in india, guest relationship management company">
  <script src="https://kit.fontawesome.com/470d8ad497.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TL8CPW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 <!-- NAVBAR -->
 <nav class="nav1 navbar navbar-expand-lg sticky-top navbar-light">
  <a class="navbar-brand" href="index.html"><img src="img/Hospitality.png" class="img-fluid"
      style="width:180px; height:60px;margin:0px 30px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active ">
        <a class="nav-link a2" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
          <a class="nav-link a2" href="pricing_packages.html">Pricing & Offers</a>
      </li>

      <li class="nav-item">
        <a class="nav-link a2" href="covid-19.html">Post Covid 19</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  a2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="revenuemanagement.html">Revenue Management</a>
          <a class="dropdown-item" href="digital-marketing.html">Digital Marketing</a>
          <a class="dropdown-item " href="website.html">Website Design</a>
          <a class="dropdown-item " href="salessupport.html">Sales support</a>
          <a class="dropdown-item " href="onlinereputationmanagement.html">Online Reputation
            Management</a>
          <a class="dropdown-item " href="hotelaudit.html">Hotel Audit</a>
          <a class="dropdown-item " href="graphicdesign.html">Graphic Design</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="expertise.html">Expertise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="our-clients.html">Portfolio</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link a2" href="international-hotel.html">International Hotel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="hotel-lease-sell.html">Hotel Lease/Sell</a>
      </li>
      <li class="nav-item">
        <a class="nav-link a2" href="contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<!-- END NAVBAR -->
  <div class="blog-banner pp-banner">
       <h2 class="title">Pricing & Packages</h2>
  </div>


  <div class="pp-container">
      <a href="packages.php">
        <div class="pp-block ppb1">
            <div class="pp-container-content">
              <!-- <h1>Packages</h1> -->
              <a href="packages.php" class="pp-content-a">View Details</a>
            </div>
        </div>
      </a>

      <a href="samples.php">
         <div class="pp-block ppb2">
            <div class="pp-container-content">
              <h1>Stand Alone</h1>
              <a href="samples.php" class="pp-content-a">View Details</a>
            </div>
         </div>
      </a>
      
      <a href="#">
        <div class="pp-block ppb3">
          <div class="pp-container-content">
            <h1>Offers</h1>
            <a href="#" class="pp-content-a">View Details</a>
          </div>
        </div>
      </a>  
  </div>



    
   <!-- **************************   Footer start   ******************************* -->

  <section>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="img/HM.png" class="img-fluid" alt="revenue management company in india" /> <br /><br />

            <div class="social-media-links">
                <p class="social-link">
                  <a href="https://www.facebook.com/hospitalitymindsindia/"><i class="fab fa-facebook"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://www.instagram.com/hospitalityminds/"><i class="fab fa-instagram"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://wa.me/91+91 9967333442"><i class="fab fa-whatsapp"></i></a>
                </p>
                <p class="social-link">
                  <a href="https://www.linkedin.com/company/hospitality-minds-india/"><i
                      class="fab fa-linkedin-in"></i></a>
                </p>
            </div>
          </div>


          <div class="col-md-3">
            <h3>Hospitality Minds</h3>
            <!-- <p> <img src="img/Hospitality.png" alt=""></p><br> -->
            <!-- <p><b>Born for Hotels</b></p> -->
            <p>
              <b style="color: white;">ADDRESS :</b> 116, Hari Om Plaza, <br />
              MG road, before Omkareshwar temple, Borivali(East). <br />
              Mumbai-400066.
            </p>
          </div>
          <div class="col-md-3 website-links">
            <h3>Quick Links</h3>
            <div class="row">
              <div class="col-md-6">
                <p><a href="index.html">Home</a></p>
                <!-- <p><a href="#">Services</a></p> -->
                <p><a href="casestudies.html">Case Studies</a></p>
                <p><a href="our-clients.html">Our Clients</a></p>
              </div>
              <div class="col-md-6">
                <p><a href="career.html">Career</a></p>
                <p>
                  <a target="_blank" href="blog.html">Blog</a>
                </p>
                <p><a href="contact.html">Contact Us</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h3>Contact Us</h3>
            <p>
              
              <a href="tel: +91 9967333442" style="text-decoration: none; color: aliceblue;">
                +91 +91 9967333442</a>  
            </p>
            <p>
            <b>Email :</b>
              <a href="mailto: hospitalityminds.bd@gmail.com" style="text-decoration: none; color: aliceblue;">
                hospitalityminds.bd@gmail.com</a>
            </p>
          </div>
        </div>

      </div>

        <p class="footer-bottom">
            &copy; <script>  document.write(new Date().getFullYear()); </script> . All Rights Reserved. Made with ❤️ by <a href="index.html" style="color: #ffffff; text-decoration: none;">Hospitality Minds</a>
        </p>
    </div>
  </section>

  <a href="logout.php">logout</a>



  <!-- ************************   Social float start  ************************* -->


    <div class="social-float">
        <div class="social-float-flex">
            <a href="https://wa.me/91+91 9967333442" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/hospitalityminds/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="tel: +91 9967333442"><i class="fas fa-phone-alt"></i></a>
        </div>
    </div>

    
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./js/parallax.min.js"></script>
  <script src="./js/app.js"></script>
  <script src="./js/scroll-out.js"></script>

  <script>
    ScrollOut({
      targets: '.pp-block'
    })
  </script>

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba9c352b156da713cb3c5f5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba9c352b156da713cb3c5f5/1fd980ev0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>