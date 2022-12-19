<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>sadgurukirpaapnaghar</title>


   <link rel="shortcut icon" type="image/png" href="./images/logo.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" />

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- <link rel="stylesheet" href="./css/gallery.css"> -->

<style>
   #loader{
      position: fixed;
      width: 100%;
      height: 100vh;
      z-index: 1;
      overflow: visible ;
      background: #fff url(./images/preloader.gif) no-repeat center center;
   }
</style>


</head>

<body>

   <!-- preloder  -->
   <div id="loader"></div>


   <!-- header section starts  -->

   <header class="header">
      <!-- We<span>Build</span> -->
      <a href="index.php" class="logo"><img src="images/logo.png" id="main-logo" alt="logo" /></a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="#services">services</a>
         <a href="list.php">Ashram List</a>
         <a href="gallery.html">Gallery </a>
         <a href="#blogs">blogs</a>
         <a href="#about">about</a>
         <a href="contact.php">contact</a>
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
         <p>+91-99928-72204</p>
         <p>+91-99999-99999</p>
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
         <p>Fatehabad, Haryana 125050</p>
      </div>

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
      </div>
   </div>

   <!-- header section ends -->


   <!-- home section starts  -->

   <section class="home" id="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <section class="swiper-slide slide" style="background: url(images/banner-1.jpg) no-repeat">
               <!-- <div class="content">
               <h3>we provide best service</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div> -->
            </section>

            <section class="swiper-slide slide" style="background: url(images/Banner-4.jpg) no-repeat">
               <!-- <div class="content">
               <h3>from concept to creation</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div> -->
            </section>

            <section class="swiper-slide slide" style="background: url(images/Banner-2.jpg) no-repeat">
               <!-- <div class="content">
               <h3>making dream come to life</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div> -->
            </section>

            <section class="swiper-slide slide" style="background: url(images/Banner-3.jpg) no-repeat">
               <!-- <div class="content">
               <h3>from concept to creation</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div> -->
            </section>
         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">
      <h1 class="heading">Thoughts of Swami Sadanad</h1>

      <div class="row">
         <div class="video">
            <video src="images/thought-vid.mp4" loop muted autoplay></video>
         </div>

         <div class="content">
            <!-- <h3>SwaSwami Sdanad’s thoughts about cow protection and human safety</h3> -->
            <h3>गाय संरक्षण और मानव सुरक्षा के बारे में स्वामी सदानद के विचार</h3>
            <p>
               स्वामी सदानंद एक हिंदू संत हैं जो भारत में गोकुल मिशन का नेतृत्व कर
               रहे हैं। वह गौ रक्षा और मानव सुरक्षा के महत्व का प्रचार करते रहे
               हैं। उनका मानना है कि अगर गायों की सुरक्षा नहीं होगी तो लोग सुरक्षित
               नहीं रहेंगे. यदि गायों की रक्षा नहीं की जाती है, तो इससे मनुष्यों
               में भी अपराध दर में वृद्धि होगी। <br>
               स्वामी सदानंद एक आध्यात्मिक नेता और मानव सुरक्षा संस्थान के संस्थापक हैं। उनका मानना है कि मनुष्य दो
               जन्मजात वृत्ति के साथ पैदा होता है: अस्तित्व और सुरक्षा।
            </p>
            <a href="#services" class="btn">read more</a>
         </div>
      </div>

      <div class="box-container">
         <div class="box">
            <h3 id="number">10+</h3>
            <p>वर्षों का अनुभव</p>
         </div>

         <div class="box">
            <h3 class="counter-numbers">101+</h3>
            <p>गौशाला</p>
         </div>

         <div class="box">
            <h3 class="counter-numbers">50+</h3>
            <p>वृद्ध आश्रम</p>
         </div>

         <div class="box">
            <h3 class="counter-numbers">245+</h3>
            <p>सक्रिय कार्यकर्ता</p>
         </div>
      </div>
   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="services" id="services">
      <h1 class="heading">आश्रम के सेवा विभागों के संक्षिप्त विवरण</h1>

      <div class="box-container">
         <div class="box">
            <img src="images/cow_service.png" alt="" />
            <h3>गौ सेवा</h3>
            <p>
               हम गौ की देखभाल करते हैं और सुनिश्चित करते हैं कि यह कभी उबाऊ न हो
            </p>
         </div>

         <div class="box">
            <img src="images/hospital_service.png" alt="" />
            <h3> हॉस्पिटल </h3>
            <p>
               हमारा लक्ष्य सभी के लिए सर्वोत्तम चिकित्सा देखभाल प्रदान करना है।
            </p>
         </div>

         <div class="box">
            <img src="images/tree_service.png" alt="" />
            <h3> वृक्षारोपण </h3>
            <p>
               वृक्षारोपण केवल एक बार का काम नहीं है। हम इसे साल भर लगातार करते हैं।
            </p>
         </div>

         <div class="box">
            <img src="images/vridh.png" alt="व्रद्ध आश्रम" />
            <h3>व्रद्ध आश्रम </h3>
            <p>
               किसी स्वर्ग से कम नहीं है अपनों के सताए हुए लोगों के लिए गुरु वृद्धा आश्रम

            </p>
         </div>
         <div class="box">
            <img src="images/marriage.png" alt="" />
            <h3>निर्धन कन्या विवहा </h3>
            <p>
               गरीब कन्या विवाह आर्थिक रूप से वंचित महिलाओं की शादी आर्थिक रूप से संपन्न पुरुषों से कराने में माहिर है।
            </p>
         </div>

         <div class="box">
            <img src="images/blood_camp.png" alt="" />
            <h3>रक्त दान </h3>
            <p>
               आज इस संसार में रक्तदान से अनमोल उपहार और कोई नहीं है|
            </p>
         </div>

         <div class="box">
            <img src="images/food.png" alt="" />
            <h3>अन्न दान </h3>
            <p>
               अन्न दान करना बहुत ही पुण्य का कार्य होता है। यह एक ऐसा दान है, जिसके द्वारा व्यक्ति भूखे को तृप्त कराता
               है।
            </p>
         </div>

         <div class="box">
            <img src="images/school.png" alt="" />
            <h3>विधालय </h3>
            <p>
               विद्यालय वह स्थान है, जहाँ शिक्षा ग्रहण की जाती है। "विद्यालय एक ऐसी संस्था है, जहाँ बच्चों के शारीरिक,
               मानसिक, बौद्धिक एवं नैतिक गुणों का विकास होता है।
            </p>
         </div>
      </div>
   </section>

   <!-- services section ends -->

   <!-- projects section starts  -->

   <section class="projects" id="projects">
      <h1 class="heading">our Image Gallery </h1>

      <div class="box-container">
         <a href="images/gallery06.jpg" class="box">
            <div class="image">
               <img src="images/gallery06.jpg" alt="" />
            </div>
            <!-- <div class="content">
               <div class="info">
                  <h3>dream home</h3>
                  <p>construction, design</p>
               </div>
               <i class="fas fa-plus"></i>
            </div> -->
         </a>

         <a href="images/gallery07.jpg" class="box">
            <div class="image">
               <img src="images/gallery07.jpg" alt="" />
            </div>
            <!-- <div class="content">
               <div class="info">
                  <h3>dream home</h3>
                  <p>construction, design</p>
               </div>
               <i class="fas fa-plus"></i>
            </div> -->
         </a>

         <a href="images/galler07.JPG" class="box">
            <div class="image">
               <img src="images/galler07.JPG" alt="" />
            </div>
            <!-- <div class="content">
               <div class="info">
                  <h3>dream home</h3>
                  <p>construction, design</p>
               </div>
               <i class="fas fa-plus"></i>
            </div> -->
         </a>
      </div>
      <div class="mydiv" style="text-align: center;">
         <a href="gallery.html" class="btn text-center" id="moreimgs">More Images</a>
      </div>
      <!-- <button type="button" class="btn btn-primary">Centered button</button>   -->
   </section>


   <!-- projects section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">
      <h1 class="heading">Swami Sadanad quotes</h1>

      <div class="swiper reviews-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <p>
                  में ऐसी शिक्षा चाहिए,<br>
                  जिससे चरित्र का निर्माण हो,<br>
                  मन की शक्ति बड़े,<br>
                  बुद्धि का विकास हो<br>
                  और मनुष्य अपने पैरों पर खड़ा हो सके।
               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3> श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>
                  जब तक लाखों लोग भूखे और अज्ञानी है,<br>
                  तब तक मैं उस प्रत्येक व्यक्ति को गद्दार मानता हूँ,<br>
                  जो उनके बल पर शिक्षित हुआ<br>
                  और अब वह उसकी ओर ध्यान नहीं देता।<br><br>


               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3> श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>
                  अगर धन दूसरों की भलाई करने में मदद करें,<br>
                  तो इसका कुछ मूल्य है,<br>
                  अन्यथा ये सिर्फ बुराई का ढेर है,<br>
                  और इससे जितना जल्दी छुटकारा मिल जाए<br>
                  उतना बेहतर है।
               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3>श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>
                  जिस प्रकार केवल एक ही बीज<br>
                  पूरे जंगल को पुनर्जीवित करने के लिए पर्याप्त है,<br>
                  उसी प्रकार एक ही मनुष्य विश्व में क्रांतिकारी<br>
                  बदलाव लाने के लिए पर्याप्त है।<br><br>

               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3>श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>
                  किसी मकसद के लिए खड़े हो तो एक पेड़ की तरह,<br>
                  जीयो तो एक बीज की तरह,<br>
                  ताकि दोबारा उग कर उसी मकसद के लिए<br>
                  फिर से जंग कर सको।<br><br>
               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3>श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <p>
                  परेड में पीछे मुड़ बोलते ही पहला आदमी आखरी<br>
                  और आखिरी आदमी पहले नंबर पर आ जाता है,<br>
                  जीवन में कभी आगे होने का घमंड
                  और आखरी होने <br> का गम न करें,
                  पता नहीं कब जिंदगी बोल दे पीछे मुड़।<br><br>

               </p>
               <div class="user">
                  <img src="images/iconimg.jpg" alt="" />
                  <div class="info">
                     <h3>श्री स्वामी सदानद</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- reviews section ends -->

   <!-- pricing section starts  -->

   <!-- <section class="pricing" id="pricing">
      <h1 class="heading">our pricing</h1>

      <div class="box-container">
         <div class="box">
            <i class="fas fa-home"></i>
            <h3>basic plan</h3>
            <div class="price"><span>$</span>250<span>/mo</span></div>
            <div class="list">
               <p>interior design</p>
               <p>refurbishment</p>
               <p>material supply</p>
               <p>maintenance</p>
               <p>24/7 support</p>
            </div>
            <a href="#" class="btn">choose plan</a>
         </div>

         <div class="box">
            <i class="fas fa-building"></i>
            <h3>premium plan</h3>
            <div class="price"><span>$</span>650<span>/mo</span></div>
            <div class="list">
               <p>interior design</p>
               <p>refurbishment</p>
               <p>material supply</p>
               <p>maintenance</p>
               <p>24/7 support</p>
            </div>
            <a href="#" class="btn">choose plan</a>
         </div>

         <div class="box">
            <i class="fas fa-city"></i>
            <h3>ultimate plan</h3>
            <div class="price"><span>$</span>1250<span>/mo</span></div>
            <div class="list">
               <p>interior design</p>
               <p>refurbishment</p>
               <p>material supply</p>
               <p>maintenance</p>
               <p>24/7 support</p>
            </div>
            <a href="#" class="btn">choose plan</a>
         </div>
      </div>
   </section> -->

   <!-- pricing section ends -->

   

   <!-- blogs section starts  -->

   <section class="blogs" id="blogs">
      <h1 class="heading">our blogs</h1>

      <div class="swiper blogs-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog1.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     घर की माता को रुला कर देवी माता पूजा करने सा कोई फल नहीं मिलता
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog2.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Assumenda, nobis!
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog3.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Assumenda, nobis!
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog4.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Assumenda, nobis!
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog5.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Assumenda, nobis!
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/blog6.png" alt="" />
               </div>
               <div class="content">
                  <h3>blog title goes here</h3>
                  <p>
                     Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Assumenda, nobis!
                  </p>
                  <a href="#" class="btn">read more</a>
               </div>
            </div>
         </div>
      </div>
      <div style="text-align: center;">
         <a href="#" class="btn">More blogs </a>
      </div>
   </section>

   <!-- blogs section ends -->

   <!-- client logo section starts -->

   <section class="logo-container">
      <div class="swiper logo-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide">
               <img src="./images/logo.png" alt="" />
            </div>
            <div class="swiper-slide slide">
               <img src="./images/service-logo-2.png" alt="" />
            </div>
            <div class="swiper-slide slide">
               <img src="./images/service-logo-3.png" alt="" />
            </div>
            <div class="swiper-slide slide">
               <img src="./images/service-logo-4.png" alt="" />
            </div>
            <div class="swiper-slide slide">
               <img src="./images/service-logo-1.png" alt="" />
            </div>
            <div class="swiper-slide slide">
               <img src="./images/service-logo-6.png" alt="" />
            </div>
         </div>
      </div>
   </section>

   <!-- client logo section ends -->

   <!-- footer section starts  -->

   <section class="footer">
      <div class="links">
         <a class="btn" href="./index.php">home</a>
         <a class="btn" href="#services">services</a>
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
   <script src="js/script.js"></script>

   <script>
      lightGallery(document.querySelector(".projects .box-container"));
   </script>



<!-- loader  -->
<script>
   var loader;
   function loadNow(opacity){
      if(opacity <= 0){
         displayContent();
      }else{
         loader.style.opacity = opacity;
         window.setTimeout(function(){
            loadNow(opacity - 0.05);
         }, 100);
      }
   }

   function displayContent(){
      loader.style.display = 'none';
      document.getElementById('content').style.display = 'block';
   }

   document.addEventListener("DOMContentLoaded",function(){
      loader = document.getElementById('loader');
      loadNow(1);
   })

</script>





</body>

</html>