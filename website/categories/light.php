<?php
include '../database_connection/database.php';  // your mysqli connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wallora Light Category</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../nav_footer/nav_footer.css">
  <link rel="stylesheet" href="../card_styling/cardstyling.css">
  <style>
    h1{
      text-align:center;
      padding:20px;
      margin:0;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-size: 2rem;
    }

  </style>
</head>
<body>
  <?php include("../nav_footer/navbar.php"); ?>

  <h1>Light Wallpapers</h1>

  <div class="gallery-container">
    <?php
      $res = mysqli_query($conn,
        "SELECT filename, title FROM wallpapers WHERE category='light' ORDER BY uploaded_at DESC"
      );
      if ($res && mysqli_num_rows($res) > 0):
        while ($row = mysqli_fetch_assoc($res)):
    ?>
      <div class="card">
        <img src="../../uploads/<?=htmlspecialchars($row['filename'])?>"
             alt="<?=htmlspecialchars($row['title'])?>">
        <a class="download-btn"
           href="../../uploads/<?=htmlspecialchars($row['filename'])?>"
           download>Download</a>
      </div>
    <?php
        endwhile;
      else:
    ?>
      <p style="text-align:center;">No light wallpapers found.</p>
    <?php endif; ?>
  </div>

    <?php include("../nav_footer/footer.php"); ?>
  
</body>
</html>