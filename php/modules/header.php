<?php
function printHeader($info = 'Discover an extensive catalog featuring a comprehensive
                list of <strong>Unturned item IDs</strong>, showcasing the name, ID, and icon of each item.',
                     $title = 'UNTURNED ID LIST', $meta='Explore the complete Unturned item ID list at UnturnedHow. 
    Discover the unique IDs, names, and icons of every in-game item. 
    A comprehensive catalog for Unturned players seeking detailed information on all items.'){
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="' . $meta . '">

    <title>' . $title . '</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
</head>


<body class="body">
<div class="container">
    <header class="header" id="header">
        <div class="overlay">
            <h1 class="title">' .$title . '</h1>
            <p class="text">'  . $info . '
            </p>';
    require("nav.php");
    require("media.php");
    echo '</div>
<a href="#header" aria-label="Go to Top Menu"><div class="up-button">
</div></a>
    </header>';
};