<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodawanie obecnosci</title>
</head>
<body>
    <php?
    $connect=mysqli_connect('localhost','root','','4ti');
    if(connect){
        echo "połczylismy sie z bazą";
        $zapytanie="SELECT * from przedmiot";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $przedmiot[]=$wiersz['nazwaPrzedmiot'];
                    $idprzedmiot[]=$wiersz['id'];
    }
    else
    {
        echo "błąd połczenia";
    }
    mysqli_close("$connect");
    ?>
    <header>
        <h1> dodawanie obecnosci</h1>
    </header>
    <main>
    <?php
                for($i=0;$i<count($imie);$i++){
                    echo "<option value=$idosoba[$i]> $imie[$i] $nazwisko[$i]</option>";
                }
            ?>
    </main>
    <footer>
        dusikowski
    </footer>
</body>
</html>