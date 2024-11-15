<?php

if (isset($_POST['submit'])) {
  $background = $_POST['background'];
  setcookie('background', $background, time() + (86400 * 30), "/");
}


if (isset($_COOKIE['background'])) {

  $background = $_COOKIE['background'];
} else {
  $background = '#ffffff';
}


$color = array(
  'black' => "#000000",
  'white' => "#ffffff",
  'red' => "#ff0000",
  'blue' => "#0000ff"
);
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <style>
    body {
      background-color: <?php echo $background; ?>;

    }
  </style>
</head>

<body>
  <h1>background color</h1>
  <form method="post" action="">

    <label for="background">Background Color:</label>
    <select name="background" id="background">
      <?php
      
      foreach ($color as $name => $value) {
        echo "<option value=\"$value\" " . ($background == $value ? "selected" : "") . ">$name</option>";
      }
      ?>
    </select>
    <br>
    <input type="submit" name="submit" value="Save">
  </form>
  <h2>Confirmation:</h2>
  <p>Background Color: <?php echo $background; ?></p>
</body>

</html>