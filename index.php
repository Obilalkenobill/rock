<?php 
require "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistes de musique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.jpg" type="images/jpg" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="stylesheet.css">
    
</head>
<body>
    <div class="batt"></div>
    <table class="table table-striped table-hover">
    <caption>Liste des artistes</caption>
    <thead>
    <tr>
      <th class="table-light">Découvrez ces Artistes</th>
</tr>
  </thead>
    <tbody>
        <?php 
    foreach($r as $art)
    {
        echo "<tr class=\"table-light\"><td class=\"table-light\"><a href='album.php?artID=".($art->ArtistId)."&artiste=".($art->Name)."'>".($art->Name)."</a></td></tr>";
    }?>
    </tbody>
</table>
<footer class="font-effect-fire" >CopyRock &copy M.B. Prod. </footer>
</body>
</html>