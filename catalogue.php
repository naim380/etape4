<?php
// On crée notre array $article1
$article1 = [
    'nom' => 'chocolat',   
    'photo' => 'image',
    'prix' => '4.5 euro'];
    echo $article1 ['nom'] ." ". $article1 ['photo'] ." ". $article1 ['prix'] ." ";

// On crée notre array $article2
$article2 = [
    'nom' => 'pomme',   
    'photo' => 'image',
    'prix' => '2.5 euro'];
    echo $article2 ['nom'] ." ". $article2 ['photo'] ." ". $article2 ['prix']." ";

// On crée notre array $article3
$article3 = [
    'nom' => 'fraise',   
    'photo' => 'image',
    'prix' => '3.5 euro'];
    echo $article3 ['nom'] ." ". $article3 ['photo'] ." ". $article3 ['prix']." ";

    $tousmesarticles = [$article1,$article2,$article3]; 
    foreach ($tousmesarticles as $article){
    echo $article ['nom'],
     $article ['photo'],
     $article ['prix'];
    }
?>
// exercice 4

<?php include("functions.php");?>
<?php displayItem1();?>
<?php displayItem2();?>
<?php displayItem3();?>

<?php displayItem('fraise','image','3.5 euro')?>