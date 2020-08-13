<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Brush+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Vows VR</title>
</head>
<body>
<?php $random = rand(1, 10);
      $randomGradient = "linear-gradient(to bottom,pink, black";
        if ($random <= 3) {
            $randomGradient = "linear-gradient(to right,blue, grey";
        } elseif ($random <= 6) {
            $randomGradient = "linear-gradient(to right,grey, blue";
        } elseif ($random <= 9) {
            $randomGradient = "linear-gradient(to left,blue, pink";
        } else {
            $randomGradient = "linear-gradient(to left,pink, black";
        }

        echo "<style>body {background-image: " . $randomGradient . "</style>";
?>
<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include 'footer.php'?>
</body>
</html>