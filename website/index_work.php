<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wallora</title>
    <link rel="stylesheet" href="nav_footer/nav_footer.css">
  <!-- <link rel="stylesheet" href="index_work.css"> -->
  <style>
    /* *{
        margin: 0;
        padding: 0;
    } */

    body{
      margin: 0;
      padding: 0;
    }
    
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
      background: #007bff;
      color: #fff;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 4px; */
    }
    
    .hero .btn-primary:hover {
      background: #0056b3;
    }
    
    .nav{
        padding: 1rem 0;
    }

    .foot1{
        border: 5px solid black;
        padding: 0;
    }
/* 
    .footer {
        background: #222;
        color: #fff;
        text-align: center;
        padding: 2rem;
        
    } */

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

  <!-- Footer -->
   <div class="foot1">
    <?php include 'nav_footer/footer.php'; ?>
   </div>

</body>
</html>