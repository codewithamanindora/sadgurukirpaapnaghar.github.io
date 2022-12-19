<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>

      <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

   <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->


   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css" />

   <style>
      .success{
         color: green;
         font-weight: 700;
         padding: 5px;
         text-align: center;
      }
      .failed{
         color:red;
         font-weight: 700;
         padding: 5px;
         text-align: center;
      }
   </style>

</head>
<body>
    

     <!-- header section starts  -->

     <header class="header">
        <a href="#" class="logo"><img src="images/logo.png" id="main-logo" alt="logo" /></a>
  
        <nav class="navbar">
         <a href="./index.php">home</a>
         <a href="./index.php">services</a>
         <a href="./list.php">Ashram List</a>
         <a href="./gallery.html">Gallery </a>
         <a href="./index.php">blogs</a>
         <a href="./index.php">about</a>
         <a href="./contact.php">contact</a>
      </nav>
  
        <div class="icons">
           <div id="menu-btn" class="fas fa-bars"></div>
           <div id="info-btn" class="fas fa-info-circle"></div>
           <div id="search-btn" class="fas fa-search"></div>
           <a href="./Panel/adminlogin.php"><div id="login-btn"  class="fas fa-user"></div></a>
        </div>
  
        <form class="search-form">
           <input type="search" name="" placeholder="search here..." id="search-box" />
           <label for="search-box" class="fas fa-search"></label>
        </form>
  
        
  
     </header>
  
     <div class="contact-info">
        <div id="close-contact-info" class="fas fa-times"></div>
  
        <div class="info">
           <i class="fas fa-phone"></i>
           <h3>phone number</h3>
           <p>+123-456-7890</p>
           <p>+111-222-3333</p>
        </div>
  
        <div class="info">
           <i class="fas fa-envelope"></i>
           <h3>email address</h3>
           <p>shaikhanas@gmail.com</p>
           <p>anasbhai@gmail.com</p>
        </div>
  
        <div class="info">
           <i class="fas fa-map-marker-alt"></i>
           <h3>office address</h3>
           <p>mumbai, india - 400104</p>
        </div>
  
        <div class="share">
           <a href="#" class="fab fa-facebook-f"></a>
           <a href="#" class="fab fa-twitter"></a>
           <a href="#" class="fab fa-instagram"></a>
           <a href="#" class="fab fa-linkedin"></a>
        </div>
     </div>
  
  
  
     <!-- header section ends -->






     <!-- contact section starts  -->

   <section class="contact" id="contact">
    <h1 class="heading">contact us</h1>

    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d111100.15961542842!2d75.38171375629105!3d29.519857144796887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x391165b48502ca39%3A0x914a5a142313f67f!2sGF92%2BXP2%2C%20Inderpura%20Mohalla%2C%20Fatehabad%2C%20Haryana%20125050!3m2!1d29.519875499999998!2d75.451754!5e0!3m2!1sen!2sin!4v1671467384217!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <form method="POST">
          <h3>get in touch</h3>

          <input type="text" name="UName" placeholder="name" class="box" />

          <input type="email" name="Email" placeholder="email" class="box" />
          
          <input type="number" name="number" placeholder="phone" class="box" />

          <textarea name="msg" placeholder="message" class="box" id="" cols="30" rows="10"></textarea>

          <input type="submit" value="send message" name="submit" class="btn" />

       </form>
    </div>
 </section>
 









 <!-- contact section ends -->





























<!-- footer section starts  -->

<section class="footer">
<div class="links">
         <a class="btn" href="./index.php">home</a>
         <a class="btn" href="./index.php">services</a>
         <a class="btn" href="./list.php">Ashram List</a>
         <a class="btn" href="./gallery.html">Gallery</a>
         <a class="btn" href="./index.php">blogs</a>
         <a class="btn" href="./index.php">about</a>
         <a class="btn" href="./contact.php">contact</a>
      </div>
 
    <div class="credit">
       © 2022-2023 sadgurukirpaapnaghar.com
       <!-- created by <span>mr. Aman indora </span> | all rights reserved! -->
    </div>
 </section>
 
 <!-- footer section ends -->
 
 
 
 
 
 
 
 
 
 
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
 
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 
    <!-- custom js file link  -->
    <script src="./js/script.js"></script>  




</body>
</html>