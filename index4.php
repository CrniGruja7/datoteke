<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezba 4</title>
</head>
<body>
    <h1>Dodavanje</h1>
    <form action="index4.php" method="GET">
        <input name="tekst" type="text" placeholder="Unesite tekst"/><br><br>
        <input type="date" name="datum"><br><br>

        <input type="submit" value="Klikni me"/>
    </form>
    <br>
    <?php
        if(isset($_GET['tekst']) && isset($_GET['datum']))
        {
            $tekst = $_GET['tekst'];
            $datum = $_GET['datum'];
            echo "Poslati podaci:<br> Tekst: $tekst <br> Datum: $datum";
        }
        else 
            echo "Dobrodosli na stranicu!!";
    ?>
</body>
</html>