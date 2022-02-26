<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadata 1</title>
    <style>
        .unos{
            border: 1px solid black;
        }
        #dugme{
            background-color: gray;
            font-weight: bold;
        }
    </style>
</head>
<body >
    <h1>Molim vas unesite proizvod koji zelite da kupite</h1>
    <br> 
    <form action="zad1.php" method="POST" >
        <input class="unos" type="number" name="id" id="id" placeholder="Unesite id proizvoda"><br><br>
        <input class="unos" type="text" name="vrsta" id="vrsta" placeholder="Unesite naziv proizvoda"><br><br>
        <input class="unos" type="number" name="ime" id="ime" placeholder="Unesite cenu proizvoda"><br><br>
        <button type="submit" name="proizvod" id="dugme">Kupi</button>
    </form>
    <?php
        if(isset($_POST['proizvod'])){
            $putanja = "datoteke/proizvodii.txt";
            $id = $_POST['id'];
            $vrsta = $_POST['vrsta'];
            $ime = $_POST['ime'];
            if($id == " " or $vrsta == " " or $ime == " "){
                echo "Niste popunili sve vezano za proizvod";
            }
            else 
                $proizvod = "$id#$vrsta#$ime\n";
                $file = fopen($putanja, "a+"); // otvoren za pisanje sa mogucnoscu da se dopise nesto
                fwrite($file, $proizvod); // u fajl zapisi proizvod
                fclose($file);
        }
        else
            echo "Dobro dosili na stranicu!";
    ?>
    <h1 style="color: blue;">Kupljeni proizvodi</h1>
    <?php
        $putanja = "datoteke/proizvodii.txt";
        if(file_exists($putanja)){
            $file = fopen($putanja, "r");
            $i = 0;
            while(($red = fgets($file))!=NULL){
                $tmpNiz = explode("#", $red);
                for($j=0;$j<count($tmpNiz);$j++){
                    echo $tmpNiz[$j]."<br>";
                }
                $i++;
            }
            fclose($file);
        }
        else
            echo "Fajl ne postoji.";
    ?>
</body>
</html>