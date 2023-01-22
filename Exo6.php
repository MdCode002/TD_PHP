<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="x">
    </form>
    <?php
    if(isset($_POST['x'])){
        $x = $_POST['x'];
        for($i=1;$i<$x/2;$i++){
            if($x%$i==0){
                echo $i . "<br>";
            }
        }
    }
?>
</body>

</html>