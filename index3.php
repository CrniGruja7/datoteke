<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ovo je upis u datoteku</h1>
    <?php
        $putanja = "datoteke/upis.txt";
        $StringZaUpis = "Ovo je NOVI  upisa u datoteku.\nOvo je NOVI novi red.";
        $file = fopen($putanja, "w");
        fwrite($file,$StringZaUpis);  // u koju datoteku uisujem, sta uisujem, 
        fclose($file);
        $sadrzaj = file_get_contents($putanja);
        $sadrzaj = str_replace("\n", "<br>", $sadrzaj);
        echo $sadrzaj;
    ?>
</body>
</html>