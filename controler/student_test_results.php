<?php
$History=$_POST['History'];
$Geography=$_POST['Geography'];
$Psychology=$_POST['Psychology'];
$Political_Science=$_POST['Political_Science'];
$Economics=$_POST['Economics'];
$Sociology=$_POST['Sociology'];
$Philosophy=$_POST['Philosophy'];
$Business_Studies=$_POST['Business_Studies'];
$Accountancy=$_POST['Accountancy'];
$English=$_POST['English'];
$Mathematics=$_POST['Mathematics'];
$Physics=$_POST['Physics'];
$Chemistry=$_POST['Chemistry'];
$Computer_Science=$_POST['Computer_Science'];
$Biology=$_POST['Biology'];
$Financial_Management=$_POST['Financial_Management'];
$cooking=$_POST['cooking'];
$Hotel_and_Catering_Laws=$_POST['Hotel_and_Catering_Laws'];

$arts=$History+$Geography+$Philosophy+$Political_Science+$Economics+$Sociology+$Philosophy;
$commerce=$Economics+$Business_Studies+$Accountancy+$English+$Mathematics+$Psychology+$Computer_Science;
$science=$Mathematics+$Physics+$Chemistry+$Computer_Science+$Biology+$English+$Philosophy;
// Start the session
session_start();
$_SESSION["arts"] =round($arts/49*100);
$_SESSION["commerce"] =round($commerce/49*100);
$_SESSION["science"] = round($science/49*100);
// $artss=round($_SESSION['arts']);
echo "<script>window.location='../student/Results/'</script>"
// echo "<script>console.log('$artss')</script>"





?>