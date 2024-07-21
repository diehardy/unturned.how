<?php
require_once("../../php/connectDB.php");
require_once("../../php/functions.php");
?>
<nav class="nav-aside nav-aside-right">
    <?php getTypes($conn, $mapId); ?>
</nav>
