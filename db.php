<?php
try
 {
$pdo= new PDO('sqlite:./chinook.db');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Excetpion $e)
{
echo "Impossible d'accéder à la base de donnée SQLite : ".$e->getMessage();
die();
}

$sql= "select * from artists ar";
$stmp= $pdo->prepare($sql);
$stmp->execute();
$r=$stmp->fetchAll(PDO::FETCH_OBJ);

$artID;
if (isset($_GET['artID']))
{
    $artID=$_GET['artID'];
}

if (isset($_GET['artID']))
{
$sql= "select * from albums where ArtistId=".$artID;
$stmp= $pdo->prepare($sql);
$stmp->execute();
$albums=$stmp->fetchAll(PDO::FETCH_OBJ);
}

$albID;
if ( isset($_GET['albID']) ){
    $albID=$_GET['albID'];
}
if ( isset($_GET['albID']) ){
    $sql= "select * from tracks tr inner join albums al on tr.AlbumId=al.AlbumId where tr.AlbumId=".$albID;
$stmp= $pdo->prepare($sql);
$stmp->execute();
$tracks=$stmp->fetchAll(PDO::FETCH_OBJ);
}
