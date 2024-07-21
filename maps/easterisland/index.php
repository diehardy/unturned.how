<?php
require_once ('../../php/connectDB.php');
require_once ('../../php/functions.php');
require_once ('../../php/modules/header.php');
printHeader('Discover Easter Island Unturned items ID list. Find unique item details, names, and icons
 specific to Easter Island. ', 'Easter Island Unturned Items ID List',
    'Discover Easter Island Unturned items ID list. Find unique item details, names, and icons specific
     to Easter Island.');
$mapId = 11;
?>

<main class="main">
    <?php require_once ('../../php/modules/aside-nav.php'); ?>
    <?php require_once ('../../php/modules/aside-nav-right.php'); ?>
    <div class="container">
    <h2><strong>Easter Island</strong> is a Curated Survival map that is available in <strong>Unturned</strong>.</h2>
    <h3>You can download this map in <a href='https://steamcommunity.com/workshop/filedetails/?id=1983200271' target='_blank'>Steam.</a>
    The developers of Easter Island are: Paladin, Spebby, Nolam, MeloCa.
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
