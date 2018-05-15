<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo php 2</title>
  </head>
  <body>
  <?php
echo "Mois";
echo "<br>";
echo "<br>";
$Table = array("Janvier", "février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
foreach ($Table as $value) {
  echo $value . "<br />";
}
echo "<br>";

//EXO 2
echo $Table[2];

echo "<br>";
echo "<br>";

//EXO 3
echo $Table[5];

echo "<br>";

//EXO 4
 $Table[7] = "Août";

echo "<br>";

//EXO 5
 $asso = array(
   '09' => 'Ariege',
   '11' => 'Aude',
   '12' => 'Aveyron',
   '30' => 'Gard',
   '31' => 'Haute-Garonne',
   '32' => 'Gers',
   '34' => 'Herault',
   '46' => 'lot',
   '48' => 'Lozere',
   '65' => 'Haute-Pyrénée',
   '66' => 'Pyrénées-Orientale',
   '81' => 'Tarn',
   '82' => 'Tarn-et-Garonne');
   echo "<br>";

   //EXO 6
   echo $asso['30'];
echo "<br>";

//EXO 7
$asso['75'] = 'Paris';
echo $asso['75'];
echo "<br>";

//EXO 8
foreach ($Table as $value) {
  echo $value . "<br>";

}
echo "<br>";

//EXO 9

foreach ($asso as $values) {
  echo $values . "<br>";
}
echo "<br>";

//EXO 10
foreach ($asso as$key => $value) {
  echo $value .' : ' .$key . '<br>';
}
   ?>
 </body>
 </html>
