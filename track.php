<?php 
require "db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Tracks de <?php echo $_GET['alb']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="logo.jpg" type="images/jpg" /> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">

    
    <style>

        .batt{
            background:url("fond.jpg");
            background-repeat: repeat-y;
    background-size: cover;
    width:60vw;
    height:50vh;
    margin-left:auto;
    margin-right:auto;
        }
   
    </style>
</head>
<body class="font-effect-fire">
<div class="batt"></div>
<table class="table table-striped table-hover">
    <caption>TRACKS ALBUM "<?php echo $_GET['alb']?>"</caption>
    <thead>
    <tr>
      <th class="table-light">Tracks de l'album "<?php echo $_GET['alb']?>"</th>
      <th class="table-light">Millisecondes</th>
      <th class="table-light">Bytes</th>
      <th class="table-light">Prix</th>
</tr>
  </thead>
    <tbody>
        <?php 
    foreach($tracks as $track)
    {
        echo "<tr class=\"table-light\" ><td class=\"table-light\">".($track->Name)."</td><td class=\"table-light\">".($track->Milliseconds)."</td><td class=\"table-light\">".($track->Bytes)."</td><td class=\"table-light\">".($track->UnitPrice)."</td></tr>";
    }?>
    </tbody>
</table>

</body>
</html>