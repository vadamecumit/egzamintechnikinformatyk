<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>

<body>
    <section id="header">
        <h1>Portal dla wędkarzy</h1>
    </section>
    <section class="section" id="prawa">
        <img src="ryba1.jpg" alt="Sum" /><br />
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </section>

    <section class="section" id="lewa1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
                $p = new mysqli("localhost", "root", "", "wedkowanie");
                $z = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby inner join lowisko on ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3;";

                $res = $p->query($z);

                while($r = $res->fetch_array(MYSQLI_NUM))
                {
                    echo "<li>".$r[0]." pływa w rzece ".$r[1].", ".$r[2]."</li>";
                }
            ?>
        </ol>
    </section>
    <section class="section" id="lewa2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
            $z = "SELECT ID, nazwa, wystepowanie from ryby where styl_zycia = 1;";
            $res = $p->query($z);

            while($r = $res->fetch_array(MYSQLI_NUM))
            {
                echo "<tr>";

                for($i = 0; $i < count($r); ++$i)
                {
                    echo "<td>".$r[$i]."</td>";
                }

                echo "</tr>";
            }

            $p->close();

            ?>
        </table>
    </section>
    
    <section id="footer">
        <p>Stronę wykonał: 123456789012</p>
    </section>
</body>

</html>