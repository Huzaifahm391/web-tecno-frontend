<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
 <link rel="shortcut icon" type="image/png" href="images/favicon.png">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" 
 rel="stylesheet"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div>
  <ul>
    <div class="topnav-left">
 <li><a href="https://www.tecno-mobile.com/pak/homepage"> 
  <img src="https://www.tecno-mobile.com/fileadmin/sitedesign/Resources/Public/Image/TECNO-logo.png"
  height="20px" 
    style="transition: none; transform: none; padding-left: 20px;"></li></a>
   
  <li>
    <div class="dropdown">
      <div>
    <button class="dropbtn">Phones
      
    </button>
    <div class="dropdown-content">
      
        
      <a href="products/tecnocamon1.php" class="horizontal"><img src="images/camon.png"></a>
        
      <a href="products/tecnospark.php" class="horizontal"><img src="images/spark.png"></a>
      <a href="products/tecnopop.php" class="horizontal"><img src="images/pop.png"></a>
      <a href="products/tecnopova.php" class="horizontal"><img src="images/pova.png"></a>
       
  </div>
  </div></div></div>



  <div class="topnav-right">
  <li><a  href="https://www.tecno-mobile.com/pak/store">Find Stores</a></li>
  <li><a href="https://www.tecno-mobile.com/pak/support">Support</a></li>
  <li><a href="https://spot.tecno.com/pk/index.php">Community</a></li>
   
   <li><div class="dropdown">
    <button class="dropbtn" >Shop Online</i>
          </button>
    <div class="dropdown-content">
      <a href="login/log.php">My Order</a>
      <a href="https://www.tecno-mobile.com/pak/return-policy">Return Policy</a>
      <a href="https://www.tecno-mobile.com/pak/shopping-help">Shopping Help</a>
      <a href="https://www.tecno-mobile.com/pak/customer-service">Customer Service</a>
      <a href="https://www.tecno-mobile.com/pak/genuine-guaranteed">Genuine Guaranteed</a>
    </div>
  </div>
  
 
 <li><a class="icon-bar" href="login/log.php"><i class="fa fa-sign-in"></i></a></li>
 <li><a class="icon-bar"><i class="fa fa-search" ></i></a></li>

</div>
</ul>

<div class="slideshow-container">
  <div class="mySlides fade">
     <img src="https://shop.tecno-mobile.com/media/banner_pic/c/a/camon-19-pro-mondrian-pc.png"
    width="100%" ><button class="btn3">Learn More</button><button class="btn4">Buy Now</button>
  </div>

  <div class="mySlides fade">
    <img src="https://shop.tecno-mobile.com/media/banner_pic/c/a/camon19_pro_pc.png"
    width="100%"><button class="btn3">Learn More</button><button class="btn4">Buy Now</button>
  </div>

  <div class="mySlides fade">
    <img src="https://shop.tecno-mobile.com/media/banner_pic/c/a/camon19_neo_pc.jpg"
    width="100%"><button class="btn3">Learn More</button><button class="btn4">Buy Now</button>
  </div>
  <div class="mySlides fade">
    <img src="https://shop.tecno-mobile.com/media/banner_pic/_/-/_-1.png"
    width="100%"><button class="btn3" style="top: 65%; left: 65%;">Learn More</button>
    <button class="btn4" style="top: 65%; left: 75%">Buy Now</button>
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

        
<button onclick="topFunction()" id="myBtn" title="Go to top"> &uarr;</button>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>



<div>
  <h1 class="ribbon" style="text-align: center; ">
 Recomendation of the Month   
  </h1>
</div>

<div class="flex-container">

  <div class="flex-child flexContent">
   <div class="container2"><a href="products/tecnospark.php">
    <img src="images/spark01.png" width="95%" height="80%" id="borderR">
  </a>
  <div class="container4">
    <figcaption>Spark 8C</figcaption>
    <p>More Details in your Photo</p>
  
   <button class="btn2">Learn More</button><button class="btn3">Buy Now</button>
   </div>
   </div>
  </div>
  
  <div class="flex-child flexContent">
     <div class="container2"><a href="products/tecnocamon1.php">
       <img src="images/camon01.jpg" width="95%" height="80%" id="borderR"></a>
       <div class="container4">
    <figcaption>Spark 8C</figcaption>
    <p>Your Ultra Shine in the Night</p>
       <button class="btn2">Learn More</button><button class="btn3">Buy Now</button>
     </div> 
     </div>
  </div>

   <div class="flex-child flexContent">
   <div class="container2"><a href="products/tecnocamon1.php"><img src="images/camon02.png" width="95%" height="80%" id="borderR"></a>
    <div class="container4">
    <figcaption>Spark 8C</figcaption>
    <p>48MP Bright Night Portrait</p>
       <button class="btn2">Learn More</button><button class="btn3">Buy Now</button>
  </div>
</div>
</div>
</div> 
<div class="flex-container ">
  <div class="flex-child flexContent divMargin">
<h1> <span class="ribbon">Explore TECNO</span></h1>

<video width="80%" height="60%"  controls id="borderV">
  <source src="Videos/01.mp4" type="video/mp4">
</video>
<figcaption>CAMON 19 Series Video</figcaption>
    </div>
    
  

<div class="flex-child flexContent divMargin">
 <h1> <span class="ribbon"> NEWS</span></h1> 
<div class="images-slideshow">
        <div class="imageSlides fade">
            <img src="images/news01.jpg" width="95%" height="340px" id="borderR">
            <figcaption><span>Tecno Launces 19 Pro - Industry's First 64MP</span><br>
             <span> RGBW Technology and Slimmest Bezzel in Pakistan</span></figcaption>
        </div>
        <div class="imageSlides fade">
            <img src="images/news02.jpg" width="95%" height="340px" id="borderR">
            <figcaption><span>TECNO Mobile donates tons of food supplies to flood</span><br>
             <span> victims under the #TECNOFundsForFlood Campaign</span></figcaption>
        </div>
        <div class="imageSlides fade">
            <img src="images/news03.png" width="95%" height="340px" id="borderR">
            <figcaption><span>#ANNOUNCEYOURSELF: LIVE THE DREAM, SIGN FOR  </span><br>
             <span> MANCHESTER CITY AND WIN VIP TICKETS WITH TECNO</span>
             <span>MOBILE’S NEW AUGMENTED REALITY EXPERIENCE</span></figcaption>
        </div>
        <div class="imageSlides fade">
            <img src="images/news04.jpg" width="95%" height="340px" id="borderR">
            <figcaption>CAMON 19 Series Video</figcaption>
        </div>
        <div class="imageSlides fade">
            <img src="images/news05.jpg" width="95%" height="340px" id="borderR">
            <figcaption>CAMON 19 Series Video</figcaption>
        </div>

        <a class="slider-btn previous" onclick="setSlides(-1)">❮</a>
        <a class="slider-btn next" onclick="setSlides(1)">❯</a>
</div>
<script type="text/javascript">
  var currentIndex = 1;
displaySlides(currentIndex);

function setSlides(num) {
    displaySlides(currentIndex += num);
}

  function displaySlides(num) {
    var x;
    var slides = document.getElementsByClassName("imageSlides");
    if (num > slides.length) { currentIndex = 1 }
    if (num < 1) { currentIndex = slides.length }
    for (x = 0; x < slides.length; x++) {
        slides[x].style.display = "none";
    }
    slides[currentIndex - 1].style.display = "block";
}
</script>
  </div>
</div>





      <h1 class="ribbon">Brand</h1>

  

<div class="flex-container">
  <div class="flex-child flexContent divMargin">
    <div class="container2"><a href="https://www.tecno-mobile.com/pak/about-us">
      <img src="Images/stopat.png" width="95%" height="100%" id="borderR"></a>
      <figcaption>Brand Intro</figcaption>
      <button class="btn2">Learn More</button>
  </div>
  </div>
  <div class="flex-child flexContent divMargin">
    <div class="container2">
    <a href="https://www.tecno-mobile.com/pak/brand-list"><img src="images/brandStory.png" width="95%"
     height="100%" id="borderR"></a>
     <figcaption>Brand Story</figcaption>
      <button class="btn2">Learn More</button>
    </div>
  </div>
<div class="flex-child flexContent divMargin">
    <div class="container2">
    <video width="500" height ="400" controls style="border-radius: 30px 30px 30px 30px;">
  <source src="Videos/02.mkv" type="video/mp4">
</video>
<figcaption>Brand Movie</figcaption>
  <button class="btn2">Learn More</button>
</div>
  </div>
</div>
 <h1 class="ribbon">Software</h1>
<div class="flex-container">
  <div class="flex-child flexContent divMargin container">
    <a href="https://tecno-mobile.com/pak/hios-index"><img src="images/HiOS.png"
      id="borderR"><button class="btn">Learn More</button> </a>
    
  </div>
  <div class="flex-child flexContent divMargin container">
    <a href="https://tecno-mobile.com/pak/hios-index"><img src="images/tecnoSpot.png" 
        id="borderR" ><button class="btn">Learn More</button></a>    
  </div>
</div>


<footer class="footer">
  <div class="flex-container">
    <div class="flex-child">
      
      <h3>About TECNO</h3>
      <a href="https://tecno-mobile.com/pak/about-us">About Us</a><br><br>
      <a href="">News</a>
  </div>
  <div class="flex-child">
    <h3>Products</h3>
    <a href="">Camon</a><br><br>
    <a href="">SPARK</a><br><br>
    <a href="">POVA</a><br><br>
    <a href="">POP</a>
  </div>
  
  <div class="flex-child">
    <h3>Products</h3>
    <a href="">FAQ</a><br><br>
    <a href="">Downloads</a><br><br>
    <a href="">Carlcare</a><br><br>
    <a href="">Warranty Check</a><br><br>
    <a href="">Security Response Center</a>
  </div>
  <div class="flex-child">
    <h3>Shopping Help</h3>
    <a href="">My Order</a><br><br>
    <a href="">Return Policy</a><br><br>
    <a href="">Shopping Help</a><br><br>
    <a href="">Customer Service</a><br><br>
    <a href="">Genuine Guaranteed</a>
  </div>
  <div class="flex-child">
    <h3>APP & Services</h3>
    <a href="">HIOS</a><br><br>
    <a href="">Boomplay Music</a>
  </div>
  <div class="flex-child">
    <img src="images/tecnologo.png">
    <div style="padding-left: 50px;">
    <a class="icon-bar2" href="https://www.facebook.com/TecnoMobilePakistan/"><i class="fa fa-twitter">
    </i></a>
    <a class="icon-bar2" href="https://www.facebook.com/TecnoMobilePakistan/"><i class="fa fa-facebook">
    </i></a>
    <a class="icon-bar2" href="https://www.facebook.com/TecnoMobilePakistan/"><i class="fa fa-instagram">
    </i></a>
  </div>
  </div>
  </div>
  <hr><br>
  <div class="foot-data">
  <a href="">Privacy Policy<span>|</span></a>
  <a href="">Terms of Use<span>|</span></a>
  <a href="">Site Map</a>
   <span class="flag-icon flag-icon-pk"></span><span>Pakistan</span>
   <span class="topnav-right">©2021-2025 TECNO Mobile</span>
   </div>
</footer>
</body>
</html>