<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>website</title>
    <!--Linking Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!--Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
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
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#menu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
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
       <section class="about-section" id="about">
           <div class="section-content">
               <div class="about-image-wrapper">
                   <img src="img/About-Barista.jpeg" alt="About" class="about-image">
               </div>
               <div class="about-details">
                   <h2 class="section-title">About Us</h2>
                   <p class="text">At Coffee House in Berndorf, Germany, we pride ourselves on being a go-to destination for coffee lovers and conversation seekers alike. We're dedicated to providing an expectional coffee experience in a cozy and inviting atmosphere, where guests can relax, unwind, and enjoy their time in comfort.
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
       <section class="menu section" id="menu">
           <h2 class="section-title">Our Menu</h2>
           <div class="section-content">
               <ul class="menu-list">
                   <li class=menu-item>
                       <img src="img/hot-beverages.png" alt="Hot Beverages" class="menu-image"/>
                       <div class="menu-details">
                           <h3 class="name">Hot Beverages</h3>
                           <p class="text">Wide range of Steaming hot coffee to make you fresh and light.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="img/cold-beverages.png" alt="Cold Beverages" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Cold Beverages</h3>
                           <p class="text">Creamy and frothy cold coffee to make you cool.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="img/refreshment.png" alt="Refreshment" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Refreshment</h3>
                           <p class="text">Fruit and icy refreshing drink to make feel refresh.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="img/special-combo.png" alt="Special Combos" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Special Combos</h3>
                           <p class="text">Your favorite eating and drinking combations.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="img/desserts.png" alt="Desserts" class="menu-image">
                       <div class="menu-details">
                           <h3 class="name">Desserts</h3>
                           <p class="text">Satite your palate and take you on a culinary treat.</p>
                       </div>
                   </li>
                   <li class=menu-item>
                       <img src="img/burger-frenchfries.png" alt="Burger & French Fries" class="menu-image">
                       <div class="menu-details"> <h3 class="name">Hot Beverages</h3>
                           <p class="text">Quick bites to satisfy your small size hunger.</p>
                       </div>
                   </li>
               </ul>
           </div>
       </section>

       <!-- Testimonials section -->
       <section class="testimonials-section" id="testimonials">
           <h2 class="section-title">Testimonials</h2>
           <div class="section-content">
               <div class="slider-container swiper">
                   <div class="slider-wrapper ">
                       <ul class="testimonials-list swiper-wrapper">
                           <li class="testimonial swiper-slide">
                               <img src="img/user-1.jpeg" alt="User" class="user-image">
                               <h3 class="name">Kylie Jenner</h3>
                               <i class="feedback">"Loved the French roast. Perfectly balanced and rich. Will order again"</i>
                           </li>
                           <li class="testimonial swiper-slide">
                               <img src="img/user-2.jpeg" alt="User" class="user-image">
                               <h3 class="name">Kanye West</h3>
                               <i class="feedback">"Great espresso blend! Smooth and bold flavor. Fast shipping too!"</i>
                           </li>
                           <li class="testimonial swiper-slide">
                               <img src="img/user-3.jpeg" alt="User" class="user-image">
                               <h3 class="name">Justin Bieber</h3>
                               <i class="feedback">"Fantastic mocha flavor. Fresh and aromatic. Quick shipping!"</i>
                           </li>
                           <li class="testimonial swiper-slide">
                               <img src="img/user-4.jpeg" alt="User" class="user-image">
                               <h3 class="name">Rosé</h3>
                               <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly recommend.   "</i>
                           </li>
                           <li class="testimonial swiper-slide">
                               <img src="img/user-5.jpeg" alt="User" class="user-image">
                               <h3 class="name">Jeon Jungkook</h3>
                               <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                           </li>
                       </ul>

                       <div class="swiper-slide-button swiper-pagination"></div>
                       <div class="swiper-slide-button swiper-button-prev"></div>
                       <div class="swiper-slide-button swiper-button-next"></div>
                   </div>
               </div>
           </div>
       </section>

       <!-- Gallery section -->
       <section class="gallery-section" id="gallery">
           <h2 class="section-title">Gallery</h2>
           <div class="section-content">
               <ul class="gallery-list">
                   <li class="gallery-item">
                       <img src="img/gallery-1.jpeg" alt="Gallery" class="gallery-image">
                   </li>
                   <li class="gallery-item">
                       <img src="img/gallery-2.jpeg" alt="Gallery" class="gallery-image">
                   </li>
                   <li class="gallery-item">
                       <img src="img/gallery-3.jpeg" alt="Gallery" class="gallery-image">
                   </li>
                   <li class="gallery-item">
                       <img src="img/gallery-4.jpeg" alt="Gallery" class="gallery-image">
                   </li>
                   <li class="gallery-item">
                       <img src="img/gallery-5.jpeg" alt="Gallery" class="gallery-image">
                   </li>
                   <li class="gallery-item">
                       <img src="img/gallery-6.jpeg" alt="Gallery" class="gallery-image">
                   </li>
               </ul>
           </div>
       </section>

       <!-- Contact section -->
       <section class="contact-section" id="contact">
           <h2 class="section-title">Contact Us</h2>
           <div class="section-content">
               <ul class="contact-info-list">
                   <li class="contact-info">
                       <i class="fa-solid fa-location-crosshairs"></i>
                       <p>123 Campsite Avenue, Wilderness, CA 98765</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-regular fa-envelope"></i>
                       <p>info@coffeeshopwebsite.com</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-solid fa-phone"></i>
                       <p>123 456-78909</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-regular fa-clock"></i>
                       <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-regular fa-clock"></i>
                       <p>Saturday: 10:00 AM - 3:00 PM</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-regular fa-clock"></i>
                       <p>Sunday: Closed</p>
                   </li>
                   <li class="contact-info">
                       <i class="fa-solid fa-globe"></i>
                       <p>www.codingnepalweb.com</p>
                   </li>
               </ul>

               <form action="#" class="contact-form">
                   <input type="text" placeholder="Your name" class="form-input" required>
                   <input type="email" placeholder="Your email" class="form-input" required>
                   <textarea placeholder="Your message" class="form-input" required></textarea>
                   <button class="submit-button">Submit</button>
               </form>
           </div>
       </section>

       <!-- Footer section -->
       <footer class="footer-section">
       <div class="section-content">
           <p class="copyright-text">© 2024 Coffee Shop</p>
           <div class="social-link-list">
               <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
               <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
               <a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
           </div>

           <p class="policy-text">
                <a href="#" class="policy-link">Privacy policy</a>
                <span class="separator">•</span>
                <a href="#" class="policy-link">Refund policy</a>
           </p>
       </div>
       </footer>
   </main>
<!-- linking Swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!--linking custom script -->
<script src="{{asset('js/homepage.js')}}"></script>
</body>
</html>









