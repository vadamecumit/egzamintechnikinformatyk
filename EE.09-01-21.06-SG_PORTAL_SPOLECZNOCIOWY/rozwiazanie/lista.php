<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista przyjaciół</title>
        <link rel="stylesheet" href="styl.css" type="text/css">
    </head>
    <section id="header">
        <h1>Portal Społecznościowy - moje konto</h1>
    </section>
    <section id="blokGlowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi Znajomi</h2>
        <?php
            $p = new mysqli("localhost", "root", "", "dane");
            $z = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id = 1 OR Hobby_id = 2 OR Hobby_id = 6;";
            $w = $p->query($z);
            
            while($t = $w->fetch_array(MYSQLI_NUM))
            {
                echo "
                    <div id=\"zdjecie\">
                        <img src=\"$t[3]\" alt=\"przyjaciel\">
                    </div>
                    <div id=\"opis\">
                        <h3>$t[0] $t[1]</h3>
                        <p>Ostatni wpis: $t[2]</p>
                    </div>
                    <div id=\"linia\">
                        <hr>
                    </div>
                ";
            }
            $p->close();
        ?>
    </section>
    <section class="footer">
        Stronę wykonał: 123456789123
    </section class="footer">
    <section class="footer">
        <a href="mailto:ja@portal.pl">napisz do mnie</a>
    </section class="footer">
</html>