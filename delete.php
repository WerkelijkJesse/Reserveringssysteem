<?php
require_once "includes/database.inc.php";

if(!$_GET['u_id']) {
    echo "id niet meegegeven";
}
else {
    $afspraakId = $_GET['u_id'];
    // Query voorbereiden
    $query= "DELETE FROM afspraken  WHERE id = $afspraakId";
    if(mysqli_query($conn, $query)) {
        mysqli_close($conn);
        //Redirect to homepage after deletion & exit script
        header("Location: afspraak.php");
        exit;
    }
    else {
        echo "fout in query: ".$query;
    }
}