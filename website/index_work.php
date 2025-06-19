<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wallora</title>
    <link rel="stylesheet" href="nav_footer/nav_footer.css">
  <link rel="stylesheet" href="index_work.css">
  <link rel="stylesheet" href="universal_background_css/universal_background.css">
  <style>
    /* *{
        margin: 0;
        padding: 0;
    } */

    /* body{
      margin: 0;
      padding: 0;
      background-color: #D2D2D2;
      background-image:
      repeating-linear-gradient(
        to right, transparent 0 100px, #25283b22 100px 101px
      ),
      repeating-linear-gradient(
        to bottom, transparent 0 100px, #25283b22 100px 101px
      );
    } */
    
    /* Hero */ 
    .hero {
      margin: 0;
      padding: 0;
      background: #666;
      color: #fff;
      text-align: center;
      padding: 60px 20px;
      background-image: url(../index.html_images/bannerimg2.jpg);
      height: 70vh;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      
    } 

    .hero .btn-primary {
      display: inline-block;
      margin-top: 1rem;
      background: #952c4f;
      color: #fff;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 4px; 
    }
    
    .hero .btn-primary:hover {
      background: #60233c ;
      transition: background 0.3s;
    }

    .nav{
        padding: 1rem 0;
    }

  </style>
</head>
<body id="top">

  <!-- Navbar -->
    <?php include 'nav_footer/navbar.php'; ?>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Discover Stunning Wallpapers</h1>
    <p>Find the perfect background to personalize your devices.</p>
    <a href="categories.php" class="btn-primary">Explore Now</a>
  </div>

  <div class="banner">
    <div class="slider" style="--quantity: 10">

      <div class="item" style="--position: 1">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_1.jpg" alt="dragon_1">
        </a>
      </div>
      <div class="item" style="--position: 2">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_2.jpg" alt="dragon_2">
        </a>
      </div>
      <div class="item" style=" --position: 3">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_3.jpg" alt="dragon_3">
        </a>
      </div>
      <div class="item" style="--position: 4">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_4.jpg" alt="dragon_4">
        </a>
      </div>
      <div class="item" style="--position: 5">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_5.jpg" alt="dragon_5">
        </a>
      </div>
      <div class="item" style="--position: 6">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_6.jpg" alt="dragon_6">
        </a>
      </div>
      <div class="item" style="--position: 7">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_7.jpg" alt="dragon_7">
        </a>
      </div>
      <div class="item" style="--position: 8">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_8.jpg" alt="dragon_8">
        </a>
      </div>
      <div class="item" style="--position: 9">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_9.jpg" alt="dragon_9">
        </a>
      </div>
      <div class="item" style="--position: 10">
        <a href="categories/dragon.php">
          <img src="../index.html_images/dragon_10.jpg" alt="dragon_10">
        </a>
      </div>
    </div>
    <div class="content">
      <h1 data-content="WALLORA">
          WALLORA
      </h1>
      <div class="author">
        <h2>AMATRASU</h2>
        <p>
          Transform your screen into a canvas of inspiration with Wallora.
        </p>
      </div>
      <div class="model"></div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'nav_footer/footer.php'; ?>

</body>
</html>