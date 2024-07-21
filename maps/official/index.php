<?php
require_once ('../../php/connectDB.php');
require_once ('../../php/functions.php');
require_once   ('../../php/modules/header.php');
printHeader('Discover Official Maps in Unturned items ID list. Find unique item details, names, and icons
 specific to Official maps.', 'Official Maps Unturned Items ID List',
    'Discover Official Maps in Unturned items ID list. Find unique item details, names, and icons specific
     to PEI, Washington, Yukon, Germany, France, Hawaii, Greece, Cyprus,
 Belgium, Rio de Janeiro, Liberator');
$mapId = 5;
?>

<main class="main">
    <?php require_once ('../../php/modules/aside-nav.php'); ?>
    <?php require_once ('../../php/modules/aside-nav-right.php'); ?>
    <div class="container">
    <p>You can find all <strong>IDs of Unturned items</strong> for official maps at this page. The list of all official maps:</p>
    <ol class='maps__list'>
    <li>Washington</li>
    <li>PEI</li>
    <li>Germany</li>
    <li>Russia</li>
    <li>Yukon</li>
    </ol>
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
