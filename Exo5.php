<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Saisissez le rayon du cercle : </h1>
    <form action="" method="post">
        <input type="text" name="rayon">
    </form>
    <?php
if(isset($_POST['rayon'])){
$rayon = $_POST['rayon'];
$diametre = 2 * $rayon;
$perimetre = 2 * 3.14 * $rayon;

$surface = 3.14 * $rayon ** 2;
        echo "<br>Diamètre : $diametre<br>";
        echo "Périmètre : $perimetre<br>";
        echo "Surface : $surface<br>";
}
?>
</body>

</html>