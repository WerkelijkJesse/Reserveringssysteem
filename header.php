<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>
<body>

<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a> </li>
            </ul>
            <ul>
                <li><a href="afspraak.php">Afspraak Maken</a> </li>
            </ul>
            <?php
            if(isset($_SESSION['u_id'])) { ?>
            <ul>
                <li><a href="gemaakt.php">Afspraken</a></li>
            </ul>
            <?php } ?>
            <div class="nav-login">
                <?php
                if(isset($_SESSION['u_id'])) { ?>
                    <form action = "includes/logout.inc.php" method = "POST" >
                    <button type="submit" name="submit" > Logout</button >
                </form >
                <?php }else { ?>
                    <form action = "includes/login.inc.php" method = "POST" >
                    <input type = "text" name = "uid" placeholder = "Username/e-mail" >
                    <input type = "password" name = "pwd" placeholder = "Password" >
                    <button type = "submit" name = "submit" > Log in </button >
                </form >

                <?php } ?>
            </div>



        </div>
    </nav>
</header>