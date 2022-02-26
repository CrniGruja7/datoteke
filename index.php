<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Citaj datoteku</h1>
    <?php
        $putanja = "datoteke/dat.txt";
        if(file_exists($putanja)){
            $sadrzaj=file_get_contents($putanja); // funkcija koja cita sve iz datoteke i smesta u prom. 'sadrzaj'
            $sadrzaj=str_replace("\n","<br>", $sadrzaj); // da bi islo u new line ovom funkcijom se menja /n za <br> i na kraju u kojoj datoteci.
            echo $sadrzaj;
        }
        else
        {
            echo "Datoteka ne postoji";
            exit();
        }
    ?>
    <hr>
    <?php
        if(file_exists($putanja)){
            $file = fopen($putanja, "r");
            $i = 0;
            while(($red=fgets($file))!=NULL){  // iscitava red po red funkcija fgets za string, dok ne dodje do praznog znaka i tu prestaje citanje
                echo "$i : $red <br>" ;
                $i++;
            }
            fclose($file); 
        }
        else{
            echo "Datoteka ne postoji";
            exit();
        }
    ?>
    <hr>
     <?php
        if(file_exists($putanja)){
            $file = fopen($putanja, "r");
            $i = 0;
            while(($k=fgetc($file))!=NULL){  // iscitava karakter po karakter funkcija fgetc otvorenog fajla
                echo "$i : $k <br>" ;
                $i++;
            }
            fclose($file); 
        }
        else{
            echo "Datoteka ne postoji";
            exit();
        }
    ?>
</body>
</html>