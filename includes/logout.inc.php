<?php
/**
 * Created by PhpStorm.
 * User: Jesse
 * Date: 13-12-2017
 * Time: 16:03
 */
if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}