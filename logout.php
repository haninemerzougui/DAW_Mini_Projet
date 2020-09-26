<?php
error_reporting(0);
session_start();
 // KILL THE SSSION DATA
 if (isset($_SESSION['user'])) {
     session_destroy();
 header('Location: /login1.php');
 }
 else {
    header('Location: /login1.php');
}
   ?>