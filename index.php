<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodawanie obecnosci</title>
</head>
<body>
    <form>
    <php?
    $connect=mysqli_connect('localhost','root','','4ti');
    if(connect){
        echo "połczylismy sie z bazą";
    
                $zapytanie="SELECT * from dane";
                $wynik=mysqli_query($connect,$zapytanie);
                while($wiersz=mysqli_fetch_array($wynik)){
                    $imie[]=$wiersz['imie'];
                    $nazwisko[]=$wiersz['nazwisko'];
                    $idosoba[]=$wiersz['id'];
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
        <table>
            <thead>
                <tr>
                    <th>Lp.</th>
                    <th>imie i nazwisko</th>
                    <th>czy jest obecny?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    for($i=0;$i<count($imie);$i++){
                        echo "<tr>";
                        echo "<th>$idosoba[$i]</th>";
                        echo "<td>$imie[$i]$nazwisko[$i]</td>";
                        echo "<td><input type='checkbox' name='obecny$idosoba[$i]'id='obecny$idosoba[$i]'></td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="zapisz obecnosc">
                </form>
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
</html
