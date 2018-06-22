<?php
//Require music data to use variable in this file
require_once "includes/database.inc.php";
//Get the result set from the database with a SQL query
$query = "SELECT * FROM afspraken";
$result = mysqli_query($conn, $query);
//Loop through the result to create a custom array
$afspraken = [];
while ($row = mysqli_fetch_assoc($result)) {
    $afspraken[] = $row;
}
//Close connection
mysqli_close($conn);
?>

<?php

    include_once 'header.php';


    ?>

<table class="afspraken">
    <thead>
    <tr>
        <th>datum</th>
        <th>naam</th>
        <th>soort</th>
        <th>evenement</th>
        <th>tijd</th>
        <th>adres</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($afspraken as $afspraak) { ?>
        <tr>
            <td><?= $afspraak['datum']; ?></td>
            <td><?= $afspraak['name']; ?></td>
            <td><?= $afspraak['reden']; ?></td>
            <td><?= $afspraak['evenement']; ?></td>
            <td><?= $afspraak['time']; ?></td>
            <td><?= $afspraak['adres']; ?></td>
            <td><a href="delete.php?id=<?= $afspraak['u_id'];?>"><button type="submit" name="delete">Delete</button></a></td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<?php
    include_once 'footer.php';

    ?>
