<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpuovina</title>
</head>
<body>
    <h1>Kpuovina</h1>
    <form action="index5.php" method="POST">
        <select name="kategorije" id="kategorije">
            <option value="0">--Izaberite opciju--</option>
            <?php
                $file = fopen("kategorije.txt", "r");
                while(($red=fgets($file))!=NULL)
                    echo "<option value='$red'>$red</option>";
                fclose($file);
            ?>
        </select>
        <br><br>
        <input type="text" name="model" placeholder="Unesite model"/><br><br>
        <input type="number" name="cena" id="cena" placeholder="Unesite cenu"/><br><br>
        <button type="submit">Kupi</button>
        <br>
    </form>
    <hr>
    <?php
        if(isset($_POST['kategorije'])) // da li smo setovali podatke 
        {
            $kat=$_POST['kategorije']; //citanje kategorije posto postoji
            if($kat != '0') // jer je value 0 odnosno 'izaberite opciju'
            {
                $model = $_POST['model']; //citanje modela
                $cena = $_POST['cena']; //citanje cene
                $stringzaupis = "$kat#$model#$cena\n";
                $file = fopen("proizvodi.txt", "a");
                fwrite($file, $stringzaupis);
                fclose($file);
            }
            else
                echo "<br><br>Niste izabrali kategoriju!";
        }
        else
            echo "<br><br>Dobrodosli na stranicu!!";
    ?>
    <hr>
    <?php
        $putanja="proizvodi.txt";
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