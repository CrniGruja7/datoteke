<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prozivodi</h1>
    <?php
        $putanja="datoteke/proizvodi.txt";
        if(file_exists($putanja)){
            $file = fopen($putanja, "r"); // referenciranje na datoteku (pristupanje datoteci)
            $i=0;
            while(($red = fgets($file))!=NULL){
                echo "<div style='border:2px solid blue; margin:5px'>";
                $tmpNiz = explode("#", $red); //funkcija koja unistava # u ovom slucaju
                for($j=0;$j<count($tmpNiz);$j++){
                    echo $tmpNiz[$j]."<br>";
                }
                $i++;
                echo "</div>";
            }
            fclose($file);
        }
        else
        echo "Datoteka ne postoji!!<br>";
        exit();
    ?>
</body>
</html>