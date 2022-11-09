<?php

session_start();

if (isset($_SESSION['is_adminlogin'])) {
  $email = $_SESSION['email'];
} else {
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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-78744332-1");
  </script>
  <link rel="icon" href="img/favicon.ico" type="image/gif" sizes="16x16">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Hospitality Minds – Revenue Management company – Digital Marketing company in India. </title>
  <meta name="description" content="Hospitality Minds offers a complete range of hospitality IT solutions, Online Reputation Management, Revenue Management, Social Media Marketing, Sales Support and OTA Management services for hotels and resorts in India .We promote Hotel business, Advertising Hotel , Online Branding of the hotels , we are one of the top revenue management company for Hotels">
  
  <meta name="keywords" content="Top Hotel revenue management companies in india,
top hotel marketing company in india,
SEO Marketing Agency for Hotel,
best revenue management company in india,
hotel marketing agency,
hotel marketing agency india
luxury hotel marketing agency,
best hotel marketing company in india
hospitality branding agency,
hotel marketing services,
hospitality digital marketing agency,
hotel marketing company in delhi,
Hospitality digital marketing agency near mumbai, maharashtra,
Hospitality digital marketing agency near bandra west, mumbai,
Hotel Creative agency,
social media marketing in delhi,
social media marketing services in delhi,
branding hotels,
marketing hotels,
hotel marketing in mumbai,
Hospitality marketing in mumbai,
online hotel marketing,
Digital marketing hotel,
Promote Hotel Business,
Hotel advertising,
Best revenue managment company in India,
Best revenue Managmen company in world,
Hotel Revenue Managment company,
Best Hotel Marketing company in Mumbai,
Best Hotel Marketing company in India,
Digital Marketing company for Hotels,
Best Hospitality Consultants,
Luxury Hotel Social Media Marketing company in India,
Sales and marketing company for Hotels,
Hotel Marketing Companies in India,
Top Hotel Revenue Managment companies,
Resort Sales and Digital marketing companies in India,
Website Development companies for Hotels and resorts,
Hotels Sales Support.">
  <script src="https://kit.fontawesome.com/470d8ad497.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css" />
  <!-- <link rel="stylesheet" href="assets/css/customnew.css"> -->
  <link rel="stylesheet" href="assets/css/customnew.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    #popUpMain {
      position: fixed;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.2);
      z-index: 10001;
      padding: 20px;
      display: none;
    }

    #cancel {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 20px;
      cursor: pointer;
    }

    .active {
      display: block !important;
    }

    .disable {
      display: none !important;
    }

    #popup {
      width: 100%;
      max-width: 40%;
      height: 500px;
      padding: 1% 1%;
      /* background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), transparent center center no-repeat; */
      background-color: var(--title-color);
      background-size: cover;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }

    #popup {
      display: flex;
      flex-direction: column;
      justify-content: center;
      border-radius: 20px;
    }

    #popup h2 {
      font-size: 30px;
      font-family: 'Merriweather', serif;
      font-weight: 700;
      padding: 20px 0 30px;
    }

    #popup form {
      margin: 0 auto;
      width: 95%;
    }

    #popup form input {
      width: 100%;
      padding: 15px 15px;
      margin-bottom: 20px;
      border: none;
      background: #f0f0f0;
      outline: none;
      font-size: 14px;
      font-weight: 600;
    }

    #popup form input::placeholder {
      font-size: 15px;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      color: var(--bold-color);
    }


    #popup form .submit {
      margin-top: 10px;
      width: auto;
      padding: 10px 40px;
      border: none;
      background: var(--main-color);
      color: var(--title-color);
      font-weight: 700;
      text-transform: uppercase;
      border-radius: 50px;
      border: 2px solid var(--main-color);
      transition: .3s ease-in;
    }

    #popup form .submit:hover {
      background: transparent;
      color: var(--main-color);
    }





    @media (max-width: 550px) {
      #popup {
        max-width: 95%;
        height: 450px;
      }

      .button-container .submitId {
        padding: 6px 18px;
        font-size: 14px;
      }
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Hospitality Minds",
  "image" : "https://hospitalityminds.com/img/who-we-are-slider-10.jpeg",
  "email" : "hospitalityminds.bd@gmail.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "201, Thawar Apartments, Carter Road, Above Canara Bank, Borivali East,"
  }
}
</script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TL8CPW3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




  <div id="popUpMain">
    <div id="popup">
      <i class="fas fa-times" id="cancel"></i>
      <h2>Please Enter Details to view <br> the Offers.</h2>
      <form action="business-detail.php" method="POST">
        <input type="text" name="name" required placeholder="Full Name">
        <input type="email" name="email" required placeholder="Email">
        <input type="text" name="mobile" required placeholder="Mobile no">
        <input type="text" name="bname" required placeholder="Business name">

        <input type="submit" name="submit" value="submit" class="submit">
      </form>
    </div>
  </div>



  <!-- NAVBAR -->
  <nav class="nav1 navbar navbar-expand-lg sticky-top navbar-light">
    <a class="navbar-brand" href="index.html"><img src="img/Hospitality.png" class="img-fluid" style="width: 180px; height: 60px; margin: 0px 30px;" alt="" /></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link a2" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <h6 class="nav-link a2" id="offers">Pricing & Offers</h6>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link a2" href="career.html">Career</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link a2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="revenuemanagement.html">Revenue Management</a>
            <a class="dropdown-item" href="digital-marketing.html">Digital Marketing</a>
            <a class="dropdown-item" href="website.html">Website Development</a>
            <a class="dropdown-item" href="salessupport.html">Sales support</a>
            <a class="dropdown-item" href="onlinereputationmanagement.html">Online Reputation Management</a>
            <a class="dropdown-item" href="hotelaudit.html">Hotel Audit</a>
            <a class="dropdown-item" href="graphicdesign.html">Graphic Design</a>
          </div>
        </li>
        <li class="nav-item">
                    <a class="nav-link a2" href="expertise.html">Expertise</a>
                </li>
        <!-- <li class="nav-item">
          <a class="nav-link a2" href="expertise.html">Expertise</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link a2" href="our-clients.html">Portfolio</a>
        </li>
        
                <li class="nav-item">
                    <a class="nav-link a2" href="testimonial.html">Testimonials</a>
                </li>
        <!-- <li class="nav-item">
          <a class="nav-link a2" href="career.html">Career</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link a2" href="international-hotel.html">International Hotel</a>
        </li>
        <li class="nav-item">
                <a class="nav-link a2" href="career.html">Career</a>
            </li>
        <li class="nav-item">
          <a class="nav-link a2" href="hotel-lease-sell.html">Hotel Lease/Sell</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link a2" href="blog.html">Blog</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link a2" href="contact.html">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- END NAVBAR -->
  <div class="hospitality-introduction">
  <video playsinline autoplay muted loop poster="cake.jpg">
            <source src="intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <!-- <div class="homepage-introduction">
      <h2 class="main-description">
        Welcome To <span class="span1">Hospitality Minds</span>
      </h2>
      <h2 class="main-description">
        India's Leading <br />

        <span class="typewrite" data-period="1000" data-type='[ "Revenue Management Company", "Digital Marketing Company", "Website Development Company"]'>
          <span class="wrap"></span>
        </span>
        <br />
        for Hotels
      </h2>
    </div> -->
  </div>



  <section class="intro-2">
    <div class="growth-guaranteed text-center">
      <div>
        <div class="hm">
          <img src="img/we.jpg" width="255px" style="border-radius: 50%;" alt="" />
          <h3 style="font-size: 30px; color: #832161;">Hospitality Minds</h3>
        </div>
        <div>
          <h2><strong style="font-size: 70px; color: #e7298f;">+</strong></h2>
        </div>
        <div class="hotel">
          <a href='https://www.linkedin.com/posts/hospitalityminds_i-am-really-proud-to-share-this-great-moment-activity-6891283153823035392-Yorl?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/hotels.jpg" width="255px" style="border-radius: 50%;" alt="" /></a>
          <h3 style="font-size: 30px; color: #832161;">Hotels</h3>
        </div>
        <div>
          <h2 style="font-weight: 900;">
            <strong style="font-size: 70px; color: #e7298f;">=</strong>
          </h2>
        </div>
        <div class="growth">
          <img src="img/sales.jpg" width="255px" style="border-radius: 50%;" alt="" />
          <a href='https://www.linkedin.com/posts/hospitalityminds_hospitalityminds-hotel-hoteliers-activity-6915618337444016129-urYS?utm_source=linkedin_share&utm_medium=member_desktop_web'>
            <h3 style="font-size: 30px; color: #832161;">Growth Guaranteed</h3>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- <section class="post-covid-19">
    <div class="container">
      <h3 class="title">Don't suffer in Covid Grow your business with Hospitality Minds </h3>
      <div class="flexbox-content">
        <h4 class="para">Revive Your Hotel Business and Standout from Competition.</h4>
        <div class="button-container">
          <h4><a href="tel: +91 9967333442"><i class="fas fa-phone-alt"></i> Call Now</a></h4>
          <h4><a href="covid-19.html">Learn More</a></h4>
        </div>
      </div>

    </div>
  </section> -->



  <section class="born-for-hotels text-center">
    <a style='color:#d33383;' href='https://www.linkedin.com/posts/hospitalityminds_hospitality-management-hotels-activity-6919258196398247936-B6kw?utm_source=linkedin_share&utm_medium=member_desktop_web'>
      <h1 class="title">
        Born For Hotels- What else proof you need?
        <a href='https://www.linkedin.com/posts/hospitalityminds_hospitalityminds-testimonials-reviews-activity-6917065846326505472-Q568/?utm_source=linkedin_share&utm_medium=member_desktop_web'>
          <h4 class="para">Revive Your Hotel Business and Standout from Competition.</h4>
        </a>
      </h1>
    </a>
    <div class="container">
      <div class="row">
        <div class="par1">
          <p class="para">
          <p class="para">
            <b>Hospitality Minds</b> is a <a href="http://hospitalityminds.com/digital-marketing.html"><b>Marketing company</b></a> formed to simplify the life of Hotelier. We are the only company in India which gives everything under one roof right from making the best website to handle your digital marketing or managing your OTA. We are one of the <a href="http://hospitalityminds.com/revenuemanagement.html"><b>best Revenue Management company</b></a> , & <a href="https://hospitalityminds.com/digital-marketing.html">
              <b>Hotel digital marketing agency</b>
            </a> for Hotels, Resorts, Restaurants and Bars in India. A Hotel marketing agency for all your Hotel needs. Hospitality Minds is a luxury hotel marketing agency that increases your sales plus builds your brand presence in such a way that you get growth in overall business. Let us market your hotel and notice a visible growth in your business.
          </p>
          <p class="para">
            Our team is passionate about growing your business. We are known for our most personalized and attentive business working style. Our presence at your Hotel Brand will give more business and good vibes That's Guaranteed!
          </p>
          <p class="para">
            With 5 years + of inception we have catered to more than 300+ Hotels so what are you waiting for dial now and get all our experience now.
          </p>
        </div>
      </div>
    </div>
  </section>

  <style>
    .button {
      background-color: #d33383;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      border: none;
      color: #FFFFFF;
      cursor: pointer;
      display: inline-block;
      font-family: Arial;
      font-size: 20px;
      padding: 5px 10px;
      text-align: center;
      text-decoration: none;
      -webkit-animation: glowing 1500ms infinite;
      -moz-animation: glowing 1500ms infinite;
      -o-animation: glowing 1500ms infinite;
      animation: glowing 1500ms infinite;
    }

    @-webkit-keyframes glowing {
      0% {
        background-color: #d33383;
        -webkit-box-shadow: 0 0 3px #d33383;
      }

      50% {
        background-color: #d33383;
        -webkit-box-shadow: 0 0 40px #d33383;
      }

      100% {
        background-color: #d33383;
        -webkit-box-shadow: 0 0 3px #d33383;
      }
    }

    @-moz-keyframes glowing {
      0% {
        background-color: #d33383;
        -moz-box-shadow: 0 0 3px #d33383;
      }

      50% {
        background-color: #d33383;
        -moz-box-shadow: 0 0 40px #d33383;
      }

      100% {
        background-color: #d33383;
        -moz-box-shadow: 0 0 3px #d33383;
      }
    }

    @-o-keyframes glowing {
      0% {
        background-color: #d33383;
        box-shadow: 0 0 3px #d33383;
      }

      50% {
        background-color: #d33383;
        box-shadow: 0 0 40px #d33383;
      }

      100% {
        background-color: #d33383;
        box-shadow: 0 0 3px #d33383;
      }
    }

    @keyframes glowing {
      0% {
        background-color: #d33383;
        box-shadow: 0 0 3px #d33383;
      }

      50% {
        background-color: #d33383;
        box-shadow: 0 0 40px #d33383;
      }

      100% {
        background-color: #d33383;
        box-shadow: 0 0 3px #d33383;
      }
    }
  </style>


  <!-- ****************************    Our services start   *********************************** -->
  <style>
        .our13solutions {
            position: relative;
        }

        .padd_top30 {
            padding-top: 30px;
        }

        .nopadd {
            padding: 0px;
        }

        /* #rig {
            margin-left: 150px;
            padding: 0;
            font-size: 0;
            list-style: none;
            background-color: none;
        }

        #rig li {
            display: inline-block;
            *display: inline;
            width: 25%;
            text-align: center;
            vertical-align: middle;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .rig-cell {
            margin: 12px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.4);
            padding: 16px;
            border: none;
            color: #555;
            background-color: white;
            text-decoration: none;
            text-align: center;
            display: block;
            position: relative;
            overflow: hidden;
            
        }

        .rig-cell h3 {
            font-size: 18px;
            font-family: 'Oswald', sans-serif;
            font-weight: normal;
        }

        .rig-img1 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/revenue-management-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
        }

        .rig-img2 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/digital-marketing-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
        }

        .rig-img3 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/website-development-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
        }

        .rig-img4 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/sales-support-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
        }

        .rig-img5 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/orm-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
        }

        .rig-img6 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/hotel-audit-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
            
        }

        .rig-img7 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/graphic-design-bg.jpg);
            background-repeat: no-repeat;
            position: relative;
            
        }

        .rig-img8 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/hotel-photography.jpg);
            background-repeat: no-repeat;
            position: relative;
            
        }

        .rig-img9 {
            display: block;
            border: none;
            width: 100%;
            height: 0;
            padding-top: 83.461538%;
            background-size: cover;
            background-color: white;
            background-image: url(https://hospitalityminds.com/img/homepage-services/staff-training.jpg);
            background-repeat: no-repeat;
            position: relative;
            
        }

        .rig-img:after {
            position: absolute;
            top: 20px;
            right: 20px;
            bottom: 20px;
            left: 20px;
            border: 1px solid #fff;
            content: '+';
            color: white;
            padding-top: 14%;
            font-size: 30px;
            opacity: 0;
            filter: alpha(opacity=0);
            transition: all 0.3s;
            transform: scale(0);
        }

        #rig li:hover .rig-img:after {
            opacity: 1;
            transform: scale(1);
        }

        
        .rig-overlay {
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            background: white;
            background-size: 50px 50px;
            opacity: 0;
            filter: alpha(opacity=0);
            transition: all 0.3s;
        }

        #rig li:hover .rig-overlay {
            opacity: 0.5;
        }

        @media (max-width: 9000px) {
            #rig li {
                width: 25%;
            }
        }

        @media (max-width: 800px) {
            #rig li {
                width: 33.33%;
            }
        }

        @media (max-width: 500px) {
            #rig li {
                width: 50%;
            }
        }

        @media (max-width: 350px) {
            #rig li {
                width: 100%;
            }
        } */
        .text-size-p{
            font-size: 16px;
    padding-bottom: 10px;
    text-align: left;
        }
        .btn-text-size{
            font-size: 20px;
        }
        g.slice text{
            font-size: 10px;
    font-weight: 400;
        }
    </style>

    <!-- @############## -->

    <!-- ****************************    Our services start   *********************************** -->

    <section class="padd_top30 our13solutions">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary title" style="text-align: center;">Our Services</h2>
        </div>

        <div class="col-md-12 nopadd">
            <div class="owl-carousel owl-theme" id="challenges_sliderss">
                <div class="our_solutions0 solutions" id="solutions0" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6" style="font-size: 120px;">

                                <h3> our 13
                                    <span>solutions </span>
                                </h3>
                                <p >Based on 13 years of experience in the hospitality industry, we are proud to provide
                                    you with optimum marketing solutions that'll give your business a boost.
                                    <br> From offering marketing solutions in the field of SEO, SMO, Revenue Management,
                                    and so on we are here selling our experience. Hence, we will make your business
                                    fruitful with our expertise in this digital world.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->


                            </div>
                        </div>
                    </div>
                </div>

                <div class="our_solutions1 solutions" id="solutions1" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3>Travel Agency 
                                    <span>Marketing </span>
                                </h3>

                                <p class="text-size-p"> We are professional marketers to market your travel agency worldwide . <br><br>
                                    Make your Hassle-Free travel plans with us!
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions2 solutions" id="solutions2" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3>Hotel Interior 
                                    <span>Designing </span>
                                </h3>

                                <p class="text-size-p">We provide Solutions for every corner
                                    The designs you will crave for  and Designs that make your eyes sparkle.
                                    Design your hotels with us and serve the luxury to your guest.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions3 solutions" id="solutions3" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Revenue 
                                    <span>Manager</span>
                                </h3>

                                <p class="text-size-p"> Are you looking for Hotel Revenue Manager, Someone who can
                                    optimise all your OTA’s and grow business? Then you are at the right place. </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our_solutions4 solutions" id="solutions4" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Digital 
                                    <span>Marketing </span>
                                </h3>

                                <p class="text-size-p">Digital Marketing is an essential piece of your hotel
                                    business marketing strategy. Digital Marketing in hospitality has become as
                                    important as offline marketing.

                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions5 solutions" id="solutions5" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Sales 
                                    <span>Support </span>
                                </h3>

                                <p class="text-size-p">There is great revenue that a hotel can generate from its
                                    offline sales. Hospitality minds will represent hotels in specific city and helps to
                                    do tie-up with corporate houses and act as 24x7 representative for Hotels.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions6 solutions" id="solutions6" style="display: none; padding-bottom: 200px;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Online Reputation 
                                    <span>Management </span>
                                </h3>

                                <p class="text-size-p">Our Team ensures that your Online reputation management is
                                    always top class which will enable more bookings.</p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions7 solutions" id="solutions7" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Search Engine

                                    <span> Optimization </span>
                                </h3>

                                <p class="text-size-p">We help in taking your site at the top of Google's ranking,
                                    Improving your site's visibility,Your ultimate solution to website traffic.

                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="our_solutions8 solutions" id="solutions8" style="display: block; padding-bottom: 200px;" >
                    <div class="container" >
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Hotel Audit

                                    <!-- <span>Optimization </span> -->
                                </h3>

                                <p class="text-size-p">Do you know Hotel Audit can improve overall Hotel
                                    Appearance? We at Hospitality Minds conduct an Audit for your hotel where we look
                                    for point to enhance your hotel ambience.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="our_solutions9 solutions" id="solutions9" style="display: none;padding-bottom: 200px;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Graphic Design


                                    <!-- <span>Management </span> -->
                                </h3>

                                <p class="text-size-p"> Hospitality Minds does graphic and signage design for high-end hospitality projects all around the world.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our_solutions10 solutions" id="solutions10" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Website Design/

                                    <span>Development </span>
                                </h3>

                                <p class="text-size-p">As a Hospitality marketing agency , our website development
                                    team is highly focused to deliver a user-friendly website by doing a thorough study
                                    on market and competition analysis.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="our_solutions11 solutions" id="solutions11" style="display: none;padding-bottom: 200px;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Hotel 

                                    <span>Photography</span>
                                </h3>

                                <p class="text-size-p">We provide hotel photography on terms & Conditions.
                                </p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our_solutions12 solutions" id="solutions12" style="display: none;padding-bottom: 200px;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3>Staff Training

                                    <!-- <span>&amp; Photography </span> -->
                                </h3>

                                <p class="text-size-p">We provide staff training tpo exceptional hotels on terms & Conditions</p>
                                <!--<a href="https://www.internetmoguls.com/services.html" class="cta btn-text-size">KNow More </a>-->
                                <!--<a href="contact.html" class="cta cta_bg btn-text-size" >enquire now
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our_solutions13 solutions" id="solutions13" style="display: none;">
                    <div class="container">
                        <div class="row row_align">

                            <div class="col-md-6">
                                <h3> Influencer

                                    <span>marketing </span>
                                </h3>

                                <p class="text-size-p"> Where influencers meet and collaborate
                                    The best way to market your hotel. We help you to Promote your hotels through influencers on all the Social Media Platforms.
                                </p>
                                <a href="" class="cta btn-text-size">KNow More </a>
                                <a href="" class="cta cta_bg btn-text-size" >enquire now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- partial:index.partial.html -->

        <div class="solutionsbox_13">
            <div id="chart">
                <svg width="500" height="500">
                    <g class="slice" transform="translate(230,260)">
                        <g class="slice">
                            <g class="slice" id="solutionsnew1" onmouseover="showdiv('1','our_solutions1');"
                                onclick="showdiv('1','our_solutions1');">
                                <path class="NavinColor" fill="#d6d6d6"
                                    d="M1.4083438190194563e-14,-230A230,230 0 0,1 106.88632957006678,-203.65488590023827L0,0Z">
                                </path>
                                <text transform="rotate(-76.15384615384616)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="-1em" x="05" dx="-1.3em"> Travel Agency</tspan>
                                    <tspan class="em" dy="1.2em" x="05" dx="-0.2em">  Marketing</tspan>
                                    <!-- <tspan class="em" dy="-2em" x="0em" dx="-3.5em">   </tspan> -->
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew2" onmouseover="showdiv('2','our_solutions2');"
                                onclick="showdiv('2','our_solutions2');">
                                <path fill="#d6d6d6"
                                    d="M106.88632957006678,-203.65488590023827A230,230 0 0,1 189.28628915554097,-130.65489174816582L0,0Z">
                                </path>
                                <text transform="rotate(-48.46153846153847)translate(217)" text-anchor="end">
                                    <!-- <tspan class="em" dy="0.5em" x="0em" dx="-3.5em"> Hotel g </tspan> -->
                                    <tspan class="em" dy="-1em" x="05" dx="-1.3em"> Hotel</tspan>
                                    <tspan class="em" dy="1.2em" x="05" dx="-0.2em">  Interior Designing </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew3" onmouseover="showdiv('3','our_solutions3');"
                                onclick="showdiv('3','our_solutions3');">
                                <path fill="#d6d6d6"
                                    d="M189.28628915554097,-130.65489174816582A230,230 0 0,1 228.3230410425524,-27.72343645872433L0,0Z">
                                </path>
                                <text transform="rotate(-20.769230769230774)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="-1em" x="05" dx="-1.3em"> Revenue</tspan>
                                    <tspan class="em" dy="1.2em" x="05" dx="-0.2em">  Management </tspan>
                                    <!-- <tspan class="em" dy="0.5em" x="0em" dx="-3.5em">  Manager</tspan> -->
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew4" onmouseover="showdiv('4','our_solutions4');"
                                onclick="showdiv('4','our_solutions4');">
                                <path fill="#d6d6d6"
                                    d="M228.3230410425524,-27.72343645872433A230,230 0 0,1 215.05373581764542,81.55912401978317L0,0Z">
                                </path>
                                <text transform="rotate(6.92307692307692)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="1.2em" x="05" dx="-1.3em">Digital Marketing </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew5" onmouseover="showdiv('5','our_solutions5');"
                                onclick="showdiv('5','our_solutions5');">
                                <path fill="#d6d6d6"
                                    d="M215.05373581764542,81.55912401978317A230,230 0 0,1 152.51821139538293,172.1574720793532L0,0Z">
                                </path>
                                <text transform="rotate(34.61538461538461)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="1.2em" x="05" dx="-2.3em"> Sales Support </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew6" onmouseover="showdiv('6','our_solutions6');"
                                onclick="showdiv('6','our_solutions6');">
                                <path fill="#d6d6d6"
                                    d="M152.51821139538293,172.1574720793532A230,230 0 0,1 55.04260278613835,223.31661800799196L0,0Z">
                                </path>

                                <text transform="rotate(62.30769230769229)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="-1em" x="05" dx="0.3em"> Online Reputation</tspan>
                                    <tspan class="em" dy="1.2em" x="05" dx="-0.2em">  Management </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew7" onmouseover="showdiv('7','our_solutions7');"
                                onclick="showdiv('7','our_solutions7');">
                                <path fill="#d6d6d6"
                                    d="M55.04260278613835,223.31661800799196A230,230 0 0,1 -55.042602786138225,223.316618007992L0,0Z">
                                </path>

                                <text transform="rotate(360)translate(45)" text-anchor="end">
                                    <tspan class="em" dy="13em" x="0em" dx="-2em"> Search </tspan>
                                    <tspan class="em" dy="2.2em" x="0em" dx="-2em"> Engine </tspan>
                                    <tspan class="em" dy="2.2em" x="0em" dx="-1.2em"> Optimization </tspan>
                                </text>

                            </g>
                            <g class="slice our_solutions8" id="solutionsnew8"
                                onmouseover="showdiv('8','our_solutions8');" onclick="showdiv('8','our_solutions8');">
                                <path fill="#d6d6d6"
                                    d="M-55.042602786138225,223.316618007992A230,230 0 0,1 -152.51821139538285,172.1574720793533L0,0Z">
                                </path>
                                <text transform="rotate(-50 200 350)translate(217)" text-anchor="end">
                                    <tspan class="em" dy="1.4em" x="05" dx="-1.3em"> Hotel Audit </tspan>
                                    <!-- <tspan class="em" dy="-1em" x="05" dx="0.3em"> Hotel Audit </tspan> -->
                                    <!-- <tspan class="em" dy="1.2em" x="05" dx="0.3em">Audit </tspan> -->
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew9" onmouseover="showdiv('9','our_solutions9');"
                                onclick="showdiv('9','our_solutions9');">
                                <path fill="#d6d6d6"
                                    d="M-152.51821139538285,172.1574720793533A230,230 0 0,1 -215.0537358176454,81.55912401978324L0,0Z">
                                </path>
                                <text transform="rotate(320 100 250) translate(90)" text-anchor="end">
                                    <tspan class="em" dy="-1em" x="0em" dx="-3.5em">Graphic Design</tspan>
                                    <!-- <tspan class="em" dy="1.2em" x="-1em" dx="0.3em"> Management </tspan> -->
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew10" onmouseover="showdiv('10','our_solutions10');"
                                onclick="showdiv('10','our_solutions10');">
                                <path fill="#d6d6d6"
                                    d="M-215.0537358176454,81.55912401978324A230,230 0 0,1 -228.32304104255243,-27.723436458724148L0,0Z">
                                </path>
                                <text transform="rotate(360 45 50) translate(-100)" text-anchor="end">
                                    <tspan class="em" dy="1em" x="0em" dx="-3.5em">Website Design/</tspan>
                                    <tspan class="em" dy="1.2em" x="0em" dx="-0.5em"> Development </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew11" onmouseover="showdiv('11','our_solutions11');"
                                onclick="showdiv('11','our_solutions11');">
                                <path fill="#d6d6d6"
                                    d="M-228.32304104255243,-27.723436458724148A230,230 0 0,1 -189.2862891555411,-130.65489174816562L0,0Z">
                                </path>
                                <text transform="rotate(5 45 50)translate(-50)" text-anchor="end">
                                    <tspan class="em" dy="-3em" x="0em" dx="-7.5em">Hotel Photography </tspan>
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew12" onmouseover="showdiv('12','our_solutions12');"
                                onclick="showdiv('12','our_solutions12');">
                                <path fill="#d6d6d6"
                                    d="M-189.2862891555411,-130.65489174816562A230,230 0 0,1 -106.88632957006708,-203.6548859002381L0,0Z">
                                </path>
                                <text transform="rotate(40 45 50)translate(-150)" text-anchor="end">

                                    <tspan class="em" dy="1em" x="05em" dx="-4em"> Staff Training </tspan>

                                    <!-- <tspan class="em" dy="1.2em" x="05" dx="-0.2em"> Photography </tspan> -->
                                </text>
                            </g>
                            <g class="slice" id="solutionsnew13" onmouseover="showdiv('13','our_solutions13');"
                                onclick="showdiv('13','our_solutions13');">
                                <path fill="#d6d6d6"
                                    d="M-106.88632957006708,-203.6548859002381A230,230 0 0,1 -4.508123876326413e-13,-230L0,0Z">
                                </path>
                                <text transform="rotate(360 45 50)translate(-10)" text-anchor="end">
                                    <tspan class="em" dy="-16em" x="0em" dx="-1.5em"> Influencer </tspan>

                                    <tspan class="em" dy="1.2em" x="0em" dx="-1.5em"> Marketing </tspan>

                                </text>
                            </g>
                        </g>
                        <circle cx="0" cy="0" r="60" style="fill: white; cursor: pointer;"></circle>
                        <text class="5x_revenue" x="0" y="15" text-anchor="middle"
                            style="font-weight: bold; font-size: 30px;">5x</text>

                    </g>
                </svg>

            </div>

            <img src="assets/images/5xb.png" class="boxRevnue">
            <img src="assets/images/reach.png" class="boxRevnuereach">

        </div>

    </section>
    <!-- *******    Our services end   ******* -->

  <!-- <section class="services">
    <div class="container">
      <h2 class="title">Our Services</h2>
      <div class="course-grid">
        <div class="course-block">
          <div class="course-img-container">
            <a href='https://www.linkedin.com/posts/hospitalityminds_hospitalityminds-revenuemanagement-digitalamarketing-activity-6917452079082962944-Jpxf?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/homepage-services/revenue-management-bg.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Revenue Management</h2>
          <div class="course-content-container">
            <a href="revenuemanagement.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                We are specialized in Revenue Management Services and provide hoteliers with valuable revenue management solutions for the effective growth of the hotel.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container dm">
            <img src="img/homepage-services/digital-marketing-bg.jpg" alt="Hospitality Minds">
          </div>
          <h2 class="course-title">Digital Marketing</h2>
          <div class="course-content-container">
            <a href="digital-marketing.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                Social media is mandatory for business marketing strategy. What happens on social media stays on Google forever.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container wd">
            <img src="img/homepage-services/website-development-bg.jpg" alt="Hospitality Minds">
          </div>
          <h2 class="course-title">Website Development</h2>
          <div class="course-content-container">
            <a href="website.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                There are three responses to a piece of design - Yes, No, and WOW! Wow is the one to aim for.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container ss">
            <img src="img/homepage-services/sales-support-bg.jpg" alt="Hospitality Minds">
          </div>
          <h2 class="course-title">Sales Support</h2>
          <div class="course-content-container">
            <a href="salessupport.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                Creating your sales vision, converting them to goals and developing strategies is what we do every day.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container orm">
            <a href='https://www.linkedin.com/posts/hospitalityminds_hotelsaijashanshirdi-bookingcom-hospitality-activity-6905854196034129920-SDgD?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/homepage-services/orm-bg.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Online Reputation Management</h2>
          <div class="course-content-container">
            <a href="onlinereputationmanagement.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                Our ORM team validates all the feedback from guest be it Positive or Negative review and gives an appropriate reply which will give good image of a Hotel in the mind of clients.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container ha">
            <a href='https://www.linkedin.com/posts/hospitalityminds_hotel-hospitalityminds-luxury-activity-6907301536842846208-LUZM/?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/homepage-services/hotel-audit-bg.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Hotel Audit</h2>
          <div class="course-content-container">
            <a href="hotelaudit.html">


              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                If you're looking for change in services, sales or anything, we're here for you.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container gd">
            <a href='https://www.linkedin.com/posts/hospitalityminds_hospitalityminds-team-share-activity-6914872445053108224-36-R?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/homepage-services/graphic-design-bg.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Graphic Design</h2>
          <div class="course-content-container">
            <a href="graphicdesign.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                Our graphic designing team has a great taste and experience in making banners and offer images for hotels. We have created great offer banners for our hotels.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container hp">
            <a href='https://www.linkedin.com/posts/hospitalityminds_hotelsheldoninternational-hospitalityminds-activity-6913461701661110272-oSv5/?utm_source=linkedin_share&utm_medium=member_desktop_web'><img src="img/homepage-services/hotel-photography.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Hotel Photography</h2>
          <div class="course-content-container">
            <a href="#">


              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                Photography plays an important role for hotels all around the world. Excellent hotel photography will help boost hotel sales in the first place.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
        <div class="course-block">
          <div class="course-img-container st">
            <a href='https://www.linkedin.com/posts/hospitalityminds_testimonial-of-our-precious-client-west-activity-6909734688605532160-LXnQ?utm_source=linkedin_share&utm_medium=member_desktop_web'> <img src="img/homepage-services/staff-training.jpg" alt="Hospitality Minds"></a>
          </div>
          <h2 class="course-title">Staff Training</h2>
          <div class="course-content-container">
            <a href="hotelaudit.html">
              <i class="fas fa-quote-right" style="color: #fff;"></i>
              <p class="para">
                We also provide staff training services for our clients who need it. Staff training is essential for the smooth functioning of the hotel.
              </p>
              <div class="course-social-container">
                <a href="https://www.facebook.com/hospitalitymindsindia/" target="_blank">
                  <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/hospitalityminds/" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/91+91 9967333442" target="_blank">
                  <i class="fab fa-whatsapp"></i>
                </a>
              </div>
            </a>
          </div>
        </div>
        
      </div>
  </section> -->

  <!-- *******    Our services end   ******* -->



 

  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col-md-6 who-we-are-content">
          <h2 class="title">Who We Are ?</h2>
          <p class="para">
            We are one of the best hotel branding agencies in India. Our motto is to be a leading player in the hospitality industry. A Hospitality Digital marketing agency for Hotels - Resorts and Homestays we aim in providing exemplary service and strategy to grow the business of our hotels. Our services are all that a hotel needs to be independent and grow business from all the channels.

          </p>
          <h4 style="font-family: 'Poppins', sans-serif;color: var(--main-color);font-size: 30px;">You are Just a call away from Growing your Business? </h4>
          <a href="tel: +91 9967333442"> <button type="submit" class="button" style="width: 25%;">Call Now!</button></a>

        </div>
        <div class="col-md-6 ">
          <div id="carouselExampleCaptions1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
				<div class="carousel-item active">
                <div class="who-we-are-image10"></div>
              </div>
              <div class="carousel-item ">
                <div class="who-we-are-image"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image1"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image2"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image3"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image5"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image6"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image7"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image8"></div>
              </div>
              <div class="carousel-item">
                <div class="who-we-are-image9"></div>
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true">
                <i class="fas fa-chevron-left"></i>
              </span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true">
                <i class="fas fa-chevron-right"></i>
              </span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- start testimonial -->

  <!-- contact form -->
  <section class="page-contact-form">
    <h2>Interested to grow your business?</h2>
    <p>
      Please Fill-up the form to notify you that you're interested & we will
      get back to you asap. Thanks 😀
    </p>
    <div class="container-fluid">
      <form action="home-mail.php" method="post">
        <div class="row">
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput">Example label</label> -->
            <input type="text" name="name" class="form-control" autocomplete="off" id="formGroupExampleInput" placeholder="Name" />
          </div>
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput2">Another label</label> -->
            <input type="email" name="email" class="form-control" autocomplete="off" id="formGroupExampleInput2" placeholder="Email" />
          </div>
          <div class="form-group col-md-3">
            <!-- <label for="formGroupExampleInput2">Another label</label> -->
            <input type="phone" name="phone" class="form-control" autocomplete="off" id="formGroupExampleInput2" placeholder="Phone" />
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </section>



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
                <a href="https://www.linkedin.com/company/hospitality-minds-india/"><i class="fab fa-linkedin-in"></i></a>
              </p>
            </div>
          </div>


          <div class="col-md-3">
            <h3>Hospitality Minds</h3>
            <!-- <p> <img src="img/Hospitality.png" alt=""></p><br> -->
            <!-- <p><b>Born for Hotels</b></p> -->
            <p>
              <b style="color: white;">ADDRESS :</b> 201, Thawar Apartments,<br />
              Carter Road, Above Canara Bank, Borivali East,<br />
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
                <p><a href="policies.html">Policies</a>
                </p>
              </div>
              <div class="col-md-6">
                <p><a href="../Career/careers.html">Careers</a></p>
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
        &copy; <script>
          document.write(new Date().getFullYear());
        </script> . All Rights Reserved. Made with ❤️ by <a href="index.html" style="color: #ffffff; text-decoration: none;">Hospitality Minds</a>
      </p>
    </div>
  </section>



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
  <script src="assets/js/custom.js"></script>




  <script>
    document.querySelector('#offers').addEventListener("click", function() {
      let javar = '<?= $email ?>';

      if (javar != "") {
        location.href = 'pricing_packages.html'
      } else {
        document.querySelector('#popUpMain').classList.add("active");
      }
    });
  </script>

  <script>
    document.querySelector('#cancel').addEventListener("click", function() {
      document.querySelector('#popUpMain').classList.remove("active");
    });
  </script>





  <!--Start of Tawk.to Script
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5ba9c352b156da713cb3c5f5/1fd980ev0';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>

	
  
  <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
  End of Tawk.to Script-->
	
  <script src="js/owl.carousel.min.js"></script>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "Hospitality Minds",
  "image": "https://hospitalityminds.com/img/Hospitality.png",
  "@id": "https://hospitalityminds.com/",
  "url": "https://hospitalityminds.com/",
  "telephone": "91 +91 9967333442 / +91 9967333442",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "201, Thawar Apartments, Carter Road, Above Canara Bank, Borivali East, Mumbai-400066.",
    "addressLocality": "Mumbai",
    "postalCode": "400066",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 19.2222355,
    "longitude": 72.857986
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/hospitalitymindsindia",
    "https://www.instagram.com/hospitalityminds/",
    "https://hospitalityminds.com/",
    "https://www.linkedin.com/company/hospitalityminds",
    "https://www.youtube.com/channel/UCLswBWsOEMzyH5S8GhTVn1w/videos"
  ] 
}
</script>

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