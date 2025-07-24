<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website</title>
    <!--Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style/css/homepage.css')}}">


</head>
<body>
<!-- Header / Navbar -->
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <div class="logo-container">
                    <img src="icons/coffee-cup.png" alt="Coffee Icon" class="logo-icon">
                    <h2 class="logo-text">Coffee</h2>
                </div>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>
   <main>
       <!-- Hero section -->
       <section class="hero-section">
           <div class="section-content">
               <div class="hero-details">
                   <h2 class="title">Best Coffee</h2>
                   <h3 class="subtitle">Make your day great with our special coffee!</h3>
                   <p class="description">Welcome to our coffee paradise, where every bean tells a story and every cup sparks joy.</p>

                   <div class="buttons">
                       <a href="#" class="button order-now">Order Now</a>
                       <a href="#" class="button contact-us">Contact-Us</a>
                   </div>
               </div>
               <div class="hero-iamge-wrapper">
                   <img src="img/coffee-hero-section.png" alt="Hero"
                   class="hero-image">

               </div>
           </div>
       </section>

       <!-- About secction -->
       <section class="about-section">
           <div class="section-content">
               <div class="about-image-wrapper">
                   <img src="img/About-Barista.jpeg" alt="About" class="about-image">
               </div>
               <div class="about-details">
                   <h2 class="section-title">About Us</h2>
                   <p class="text">At Coffee House in Berndorf, Germany, we pride ourselves on being a go-to destination for coffee lovers and conversatşon seekers alike. We're dedicated to providing an expectional coffee experience in a cozy and inviting atmosphere, where guests can relax, unwind, and enjoy their time in comfort.
                   </p>
                   <div class="social-link-list">
                       <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                       <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                       <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
                   </div>
               </div>
           </div>
       </section>

       <!--Menu section -->
       <section class="Menu section">
           <div class="section-content">
               <ul class="menu-list">
                   <li class=menu-item>
                       <img src="images/hot-beverages.png" alt="Hot Beverages" class="menu-image"/>
                       <div class="menu-details">
                           <h3 class="name">Hot Beverages</h3>
                           <p class="text">Wide range of Steaming hot coffee to make you fresh and light.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="images/cold-beverages.png" alt="Cold Beverages" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Cold Beverages</h3>
                           <p class="text">Creamy and frothy cold coffee to make you cool.</p>
                       </div>
                   </li
                   <li class=menu-item>
                       <img src="images/refreshment.png" alt="Refreshment" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Refreshment</h3>
                           <p class="text">Fruit and icy refreshing drink to make feel refresh.</p>
                       </div>
                   </li
                   <li class=menu-item>
                       <img src="images/special-commbo.png" alt="Special Combos" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Special Combos</h3>
                           <p class="text">Your favorite eating and drinking combations.</p>
                       </div>
                   </li
                   <li class=menu-item>
                       <img src="images/desserts.png" alt="Desserts" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Desserts</h3>
                           <p class="text">Satite your palate and take you on a culinary treat.</p>
                       </div>
                   </li
                   <li class=menu-item>
                       <img src="images/burger-frenchfries.png" alt="Burger & French Fries" class="menu-image">
                       <div class="menu-details"> <h3 class="name">Hot Beverages</h3>
                           <p class="text">Quick bites to satisfy your small size hunger.</p>
                       </div>
                   </li
               </ul>
           </div>
       </section>
   </main>

<script src="{{asset('js/homepage.js')}}"></script>
</body>
</html>
