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
        <input type="text" name="y">
        <button>Valider</button>
    </form>
    <?php
    if (isset( $_POST['x']) && isset( $_POST['y'])){
        $x = $_POST['x'];
        $y = $_POST['y']; 
        $ppcm = $x*2;
        if($y > $x){
         $ppcm = $y*2;  
        }
        while(($ppcm % $x !=0)||($ppcm % $y !=0)){
            $ppcm++;
        }
        echo "<br> Le ppcm  de " . $x . " et  " . $y." est ". $ppcm;
    };    
    ?>
</body>

</html>