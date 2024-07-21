<?php
require_once ('../../php/connectDB.php');
require_once ('../../php/functions.php');
require_once ('../../php/modules/header.php');
printHeader('Discover Buak Unturned items ID list. Find unique item details, names, and icons
 specific to Buak. ', 'Buak Unturned Items ID List',
    'Discover Buak Unturned items ID list. Find unique item details, names, and icons specific
     to Buak.');
$mapId = 6;
?>

<main class="main">
    <?php require_once ('../../php/modules/aside-nav.php'); ?>
    <?php require_once ('../../php/modules/aside-nav-right.php'); ?>
    <div class="container">
    <h2><strong>Buak</strong> is a Curated Survival map that is available in <strong>Unturned</strong>.</h2>
    <h3>You can download this map in <a href='https://steamcommunity.com/sharedfiles/filedetails/?id=3000549606' target='_blank'>Steam.</a>
    The developers of Buak are: Toothy Deerryte, Witness Protection, staswalle, Paulfest.
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
