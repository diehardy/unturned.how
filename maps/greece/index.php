<?php
require_once ('../../php/connectDB.php');
require_once ('../../php/functions.php');
require_once ('../../php/modules/header.php');
printHeader('Discover Greece Unturned items ID list. Find unique item details, names, and icons
 specific to Greece. ', 'Greece Unturned Items ID List',
    'Discover Greece Unturned items ID list. Find unique item details, names, and icons specific
     to Greece.');
     $mapId = 15;

?>

<main class="main">
    <?php require_once ('../../php/modules/aside-nav.php'); ?>
    <?php require_once ('../../php/modules/aside-nav-right.php'); ?>
    <div class="container">
            <h2><strong>Greece</strong> is a Curated Survival map that is available in <strong>Unturned</strong>.</h2>
    <h3>You can download this map in <a href='https://steamcommunity.com/workshop/filedetails/?id=1702240229' target='_blank'>Steam.</a>
    The developer is the creator of the game: SDGNelson.
    </h3>
            <p class="types__title">Choose a type of items: </p>
            <nav class="items__list">
                <?php
                $result= getTypes($conn, $mapId);
                ?>

            </nav>
        <?php printTables($conn, $result, $mapId);?>
    </div>
</main>
<?php require_once ('../../php/modules/footer.php'); ?>
