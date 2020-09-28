<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
</head>

<body>
    <center>
        <h1>Result</h1>
        <br><br>
        <?php 
if ($_GET['bmi']) { 
$mass = $_GET['mass'];
$height = $_GET['height'];
function bmi($mass,$height) {
$bmi = $mass/($height*$height);
return $bmi;
} 
$bmi = bmi($mass,$height);
if ($bmi <= 18.5) {
$output = "Under Weight";
} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
$output = "Normal Weight";
} else if ($bmi > 24.9 AND $bmi<=29.9) {
$output = "Over Weight";
} else if ($bmi > 30.0) {
$output = "OBESE";
}
echo "You Are"." $output";
}
?>
        <br><br>
        <a href="index.php"><input type="submit" class="laban" value="Back to Calculator"></a>
</body>
</center>

</html>