

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.html" class="logo">Booky Point</a>

   <nav class="navbar">
      <a href="home2.html">home</a>
      <a href="about.html">about</a>
      <a href="book.html">review</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>review now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">review your fav!</h1>

   <form action="book_form.html" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>book name :</span>
            <input type="text" placeholder="enter book name" name="book_name">
         </div>
            <textarea placeholder="enter your review" name="review_data" style="height:200px;width: 600px;font-size:14pt;"></textarea>
         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html">  home</a>
         <a href="about.html">  about</a>
         <!--<a href="package.html"> <i class="fas fa-angle-right"></i> package</a> -->
         <a href="book.html">  book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#">  ask questions</a>
         <a href="#">  about us</a>
         <a href="#">  privacy policy</a>
         <a href="#">  terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#">  +123-456-7890 </a>
         <a href="#">  +111-222-3333 </a>
         <a href="#">  sankarmr@gmail.com </a>
         <a href="#">  chennai, india - 600100 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#">  facebook </a>
         <a href="#">  twitter </a>
         <a href="#">  instagram </a>
         <a href="#">  linkedin </a>
      </div>

   </div>

   <!--<div class="credit"> created by <span>mr.sankar</span> | all rights reserved! </div> -->

</section>

<!-- footer section ends -->








<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>