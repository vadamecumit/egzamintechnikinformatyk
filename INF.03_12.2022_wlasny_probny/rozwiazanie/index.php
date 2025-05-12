<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Strona główna</title>
        <link rel="stylesheet" href="styl.css" type="text/css" >
    </head>
    <body>
        <section id="header">
            <div>
                <a href="index.php"><h2>TOP SECRET ORGANISATION</h2></a>
                <p>Tajna organizacja zrzeszająca tajnych ludzi</p>
            </div>
        </section>
        <section class="section" id="lewy">
            <h3>Zlikwiduj tajnego członka</h3>
            <form method="POST" action="usun.php">
                <label for="int1">ID:</label>
                <input type="number" id="int1" name="int1" min="1" placeholder="id w postaci liczby" required><br />
                <button type="submit">Usuń</button>
            </form>
        </section>
        <section class="section" id="prawy">
            <table>
                <caption>Tajna tabela z listą tajnych członków</caption>
                <tr>
                    <th>ID</th><th>LOGIN</th><th>EMAIL</th><th>IMIĘ</th><th>NAZWISKO</th>
                </tr>
                <?php
                    $p = new mysqli("localhost", "root", "", "tajnabaza");

                    $p->set_charset("utf8");

                    $z = "SELECT ID, LOGIN, EMAIL, IMIE, NAZWISKO FROM uzytkownicy;";
                    
                    $res = $p->query($z);

                    while($row = $res->fetch_array(MYSQLI_NUM))
                    {
                        echo "<tr>";
                        for($i = 0; $i < count($row); ++$i)
                        {
                            echo "<td>".$row[$i]."</td>";
                        }
                        echo "</tr>";
                    }
                    $p->close();
                ?>
            </table>
        </section>
        <section id="footer">
            <p>Copyright XYZ, <?php echo date('Y') ?></p>
        </section>
    </body>
</html>