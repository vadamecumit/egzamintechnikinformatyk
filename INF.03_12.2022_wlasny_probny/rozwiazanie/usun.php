<?php
    $id = $_POST['int1'];

    $p = new mysqli("localhost", "root", "", "tajnabaza");
    $z = "DELETE FROM uzytkownicy WHERE ID = ".$id.";";
    $p->query($z);
    $p->close();

    header("Location: index.php");
?>