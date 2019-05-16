<?php
/**
 * Header
 * User: saifeddine
 * Date: 2019-02-18
 * Time: 15:32
 */

session_start();

switch ($_SERVER['PHP_SELF']) {
    default:
        $title = 'Evenementen planner';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Evenementen planner</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/css/grids.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

<div class="container-fluid">


    <div class="row center-xs">
        <div class="col-xs-12 col-md-4">
            <header>
                <h1><?php echo $title ?></h1>
            </header>
        </div>
    </div>