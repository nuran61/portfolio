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

   </main>
</body>
</html>
