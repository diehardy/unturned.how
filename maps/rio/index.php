<?php
require_once ('../../php/connectDB.php');
require_once ('../../php/functions.php');
require_once ('../../php/modules/header.php');
printHeader('Discover Rio de Janeiro Unturned items ID list. Find unique item details, names, and icons
 specific to Rio de Janeiro. ', 'Rio de Janeiro Unturned Items ID List',
    'Discover Rio de Janeiro Unturned items ID list. Find unique item details, names, and icons specific
     to Rio de Janeiro.');
     $mapId = 14;

?>

<main class="main">        
    <?php require_once ('../../php/modules/aside-nav.php'); ?>
    <?php require_once ('../../php/modules/aside-nav-right.php'); ?>
    <div class="container">
    <h2><strong>Rio de Janeiro</strong> is a Curated Survival map that is available in <strong>Unturned</strong>.</h2>
    <h3>You can download this map in <a href='https://steamcommunity.com/workshop/filedetails/?id=1821848824' target='_blank'>Steam.</a>
    The developers of Rio de Janeiro are: L2, FlodotelitoKifo, Nolam, Leprechaun12.
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
