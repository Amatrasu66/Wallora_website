<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wallora</title>
  <link rel="stylesheet" href="nav_footer/nav_footer.css">
  <link rel="stylesheet" href="index.css">
  <style>
    html{ 
      scroll-behavior: smooth; 
      margin:0; 
    }

    .stdfontarial{
      font-family: Arial, sans-serif;
    }

    .stdfont{
      font-family: 'Times New Roman', Times, serif;
    }

    /* Hero */
    .hero {
      background: #666;
      color: #fff;
      text-align: center;
      padding: 60px 20px;
    }

    .hero .btn-primary {
      display: inline-block;
      margin-top: 1rem;
      background: #007bff;
      color: #fff;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 4px;
    }

    .hero .btn-primary:hover {
      background: #0056b3;
    } 

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      }

    body{
      margin: 0;
      font-family: Arial, sans-serif; 
      background-color: #D2D2D2;
      background-image:
        repeating-linear-gradient(
          to right, transparent 0 100px, #25283b22 100px 101px
        ),
        repeating-linear-gradient(
          to bottom, transparent 0 100px, #25283b22 100px 101px
        );
    }
    
    body::before{
      position: absolute;
      width: min(1400px, 90vw);
      top: 10%;
      left: 50%;
      height: 90%;
      transform: translateX(-50%);
      content: '';
      background-image: url(images/bg.png);
      background-size: 100%;
      background-repeat: no-repeat;
      background-position: top center;
      pointer-events: none;
    } 
  </style>
</head>

<body id="top">

<?php include 'nav_footer/navbar.php'; ?>

  <!-- //Hero Section -->
  <div class="hero">
    <h1>Discover Stunning Wallpapers</h1>
    <p>Find the perfect background to personalize your devices.</p>
    <a href="categories.php" class="btn-primary">Explore Now</a>
  </div> 

  <div class="banner">
    <div class="slider" style="--quantity: 10">
      <div class="item" style="--position: 1"><img src="../index.html_images/dragon_1.jpg" alt="dragon_1"></div>
      <div class="item" style="--position: 2"><img src="../index.html_images/dragon_2.jpg" alt="dragon_2"></div>
      <div class="item" style="--position: 3"><img src="../index.html_images/dragon_3.jpg" alt="dragon_3"></div>
      <div class="item" style="--position: 4"><img src="../index.html_images/dragon_4.jpg" alt="dragon_4"></div>
      <div class="item" style="--position: 5"><img src="../index.html_images/dragon_5.jpg" alt="dragon_5"></div>
      <div class="item" style="--position: 6"><img src="../index.html_images/dragon_6.jpg" alt="dragon_6"></div>
      <div class="item" style="--position: 7"><img src="../index.html_images/dragon_7.jpg" alt="dragon_7"></div>
      <div class="item" style="--position: 8"><img src="../index.html_images/dragon_8.jpg" alt="dragon_8"></div>
      <div class="item" style="--position: 9"><img src="../index.html_images/dragon_9.jpg" alt="dragon_9"></div>
      <div class="item" style="--position: 10"><img src="../index.html_images/dragon_10.jpg" alt="dragon_10"></div>
    </div>
    <div class="content">
      <h1 data-content = "WALLORRA">
        WALLORRA
      </h1>
      <div class="author">
        <h2>AMATRASU</h2>
      </div>
      <div class="model"></div>
    </div>
  </div>

<!-- //Footer -->
<div class="footer">
  <p class="stdfontarial"><strong>Wallora</strong></p>
  <p class="stdfontarial">© 2025 Wallora Wallpapers. All rights reserved.</p>
  <p>
    <a class="stdfontarial" href="/website web1/website/contact.php" style="color:#fff;text-decoration:none;">Privacy Policy</a> |
    <a class="stdfontarial" href="/website web1/website/contact.php" style="color:#fff;text-decoration:none;">Terms of Service</a>
  </p>
</div>

</body>
</html>