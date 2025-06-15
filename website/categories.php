<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wallora Categories</title>
  <link rel="stylesheet" href="nav_footer/nav_footer.css">
  <style>

    body{
      margin: 0;
      padding: 0;
    }
    /* Categories */
    .category-container {
      text-align:center;
      padding:60px 20px;
      background:#f8f9fa;
    }
    .category-container h2 {
      margin-bottom:1rem;
      font-size:2rem;
    }
    .category-btn {
      display:inline-block;
      margin:0.5rem;
      padding:0.75rem 1.5rem;
      background:#007bff;
      color:#fff;
      text-decoration:none;
      border-radius:4px;
      font-weight:500;
      transition:background 0.3s;
    }
    .category-btn:hover {
      background:#0056b3;
    }

  </style>
</head>
<body>

  <?php include("nav_footer/navbar.php"); ?>

  <!-- Categories Section -->
  <div class="category-container">
    <h2>Explore Categories</h2>
    <a href="categories/aesthetic.php" class="category-btn">Aesthetic</a>
    <a href="categories/animals.php" class="category-btn">Animals</a>
    <a href="categories/anime.php" class="category-btn">Anime</a>
    <a href="categories/cityscapes.php" class="category-btn">Cityscapes</a>
    <a href="categories/dark.php" class="category-btn">Dark</a>
    <a href="categories/flowers.php" class="category-btn">Flowers</a>
    <a href="categories/light.php" class="category-btn">Light</a>
    <a href="categories/nature.php" class="category-btn">Nature</a>
    <a href="categories/technology.php" class="category-btn">Technology</a>
    <a href="categories/universe.php" class="category-btn">Universe</a>
  </div>

  <?php include("nav_footer/footer.php"); ?>
</body>
</html>