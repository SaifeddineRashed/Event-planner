<?php
/**
 * Header
 * User: saifeddine
 * Date: 2019-02-18
 * Time: 15:32
 */

session_start();

include './includes/constants.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo SITE_TITLE ?></title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/grids.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>

<header class="header">

    <!-- Desktop menu -->
    <div class="header-menu row">
        <div class="col-md-7">
            <a href="###">
                <img src="assets/logo.png" alt="evenement planner logo"/>
            </a>
        </div>

        <nav class="col-md-5" style="text-align: right;">

            <?php if (!isset($_SESSION['fname']) && !isset($_SESSION['lname'])) { ?>
                <li><a href="account.php">
                        <i style="padding-right:5px;" class="fas fa-user"></i>Account
                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <button type="submit" class="logout-btn">
                        <i style="padding-right:5px;" class="fas fa-sign-out-alt"></i>Logout
                    </button>
                </li>
            <?php } ?>

        </nav>
    </div>

    <div class="mobile-bar">

        <ul style="float: left;">
            <li><a class="open-toggle" href="#"><i class="fas fa-bars"></i></a></li>
        </ul>

        <ul style="float: right;">
            <li><a href="account.php"><i style="padding-right:5px;" class="fas fa-user"></i></a></li>
        </ul>

        <div class="popup-menu close-menu col-xs-12">

            <button class="close-toggle"><i class="far fa-times-circle"></i></button>

            <nav class="col-xs-12">
                <ul>
                    <li><a href="###">Logout</a></li>
                </ul>
            </nav>
        </div>

    </div>


</header>
