<?php

if (isset($_POST['submit'])) {
    include_once 'database.inc.php' ;

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $reden = mysqli_real_escape_string($conn, $_POST['reden']);
    $evenement = mysqli_real_escape_string($conn, $_POST['evenement']);
    $datum = mysqli_real_escape_string($conn, $_POST['datum']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $adres = mysqli_real_escape_string($conn, $_POST['adres']);

    if (empty($name) || empty($reden) || empty($evenement) || empty($datum) || empty($time) || empty($adres)) {
        header("Location: ../afspraak.php?afspraak=leeg");
        exit();
    } else {
        $sql = "INSERT INTO afspraken (name, reden, evenement, datum, time, adres)
                VALUES ('$name', '$reden', '$evenement', '$datum', '$time', '$adres');";
        $result = mysqli_query($conn, $sql);
        header("Location: ../topper.php");
        exit();
    }
}