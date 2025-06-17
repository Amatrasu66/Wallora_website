<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wallora Upload Wallpapers</title>
  <link rel="stylesheet" href="../nav_footer/nav_footer.css">
  <link rel="stylesheet" href="../upload/imgupload.css">
  <link rel="stylesheet" href="../universal_background_css/universal_background.css">
  <style>
    /* .box1{
      border: 5px solid yellow;
    } */
  </style>
</head>
<body>
  <?php include("../nav_footer/navbar.php"); ?>
  <div class="box1">
    <h1>Upload a New Wallpaper</h1>
    <form action="uploadhandler.php" method="post" enctype="multipart/form-data">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Category:</label><br>
    <select name="category" required>
      <option value="aesthetic">Aesthetic</option>
      <option value="animals">Animals</option>
      <option value="anime">Anime</option>
      <option value="cityscapes">Cityscapes</option>
      <option value="dark">Dark</option>
      <option value="flowers">Flowers</option>
      <option value="light">Light</option>
      <option value="nature">Nature</option>
      <option value="technology">Technology</option>
      <option value="universe">Universe</option>
    </select><br><br>

    <label>Select Image:</label><br>
    <input type="file" name="wallpaper" accept="image/*" required><br><br>

    <button type="submit">Upload</button>
  </form>
</div>
  <?php include("../nav_footer/footer.php"); ?>

</body>
</html>