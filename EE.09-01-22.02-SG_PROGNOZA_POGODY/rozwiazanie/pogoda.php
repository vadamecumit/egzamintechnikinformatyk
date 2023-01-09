<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prognoza pogody Wrocław</title>
        <link rel="stylesheet" href="styl2.css" type="text/css">
    </head>
    <body>
        <header>
            <section id="hlewy">
                <img src="logo.png" alt="meteo">
            </section>
            <section id="hsrodek">
                <h1>Prognoza dla Wrocławia</h1>
            </section>
            <section id="hprawy">
                <p>maj, 2019 r.</p>
            </section>
        </header>
        <section id="glowny">
            <table>
                <thead>
                    <tr>
                        <th>DATA</th>
                        <th>TEMPERATURA W NOCY</th>
                        <th>TEMPERATURA W DZIEŃ</th>
                        <th>OPADY [mm/h]</th>
                        <th>CIŚNIENIE [hPa]</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $p = new mysqli("localhost", "root", "", "prognoza");
                        $z = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy;";
                        $res = $p->query($z);

                        while($r = $res->fetch_array(MYSQLI_NUM))
                        {
                            echo "<tr>";
                                for($i = 2; $i < count($r); ++$i)
                                {
                                    echo "<td>$r[$i]</td>";
                                }
                            echo "</tr>";
                        }
                        $p->close();
                    ?>
                </tbody>
            </table>
        </section>
        <section id="lewy">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </section>
        <section id="prawy">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
        <footer>
            <p>Stronę wykonał: 12345678912</p>
        </footer>
    </body>
</html>