<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../../php/connectDB.php');
require_once('../../php/functions.php');
require_once('../../php/modules/header.php');
require_once('../../php/modules/load-items.php');
printHeader('Discover all Unturned items ID list. Find unique item details, names, and icons
 specific to all unturned maps. ', 'All maps Unturned Items ID List',
    'Discover all Unturned items ID list. Find unique item details, names, and icons
 specific to all unturned maps.');
?>

<main class="main">
<?php require_once ('../../php/modules/aside-nav.php'); ?>
<p>You can find all <strong>IDs list of Unturned items</strong> on this page that we have in our database.
The default table is limited for the better performance. Use search to find a particular <strong>item id</strong>.
</p>
<h2 class="category">All unturned items ID list</h2>
    <form action="" method="post" id="searchForm" autocomplete="off">
        <input type="text" name="search" id="searchInput" placeholder="search here">
        <button type="submit" name="submit">Search</button>
    </form>
    <?php totalCount($conn); ?>
    <table id="allItems" class="main__table">
        <thead>
        <tr>
            <th>Image</th>
            <th>Item name</th>
            <th>Item ID</th>
            <th>Map</th>
            <th>Type</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            searchTable($conn);
        } else {
            getAll($conn);
        }
        ?>
        </tbody>
    </table>
    <p class="category">Use search for more...</p>
</main>

<?php require_once('../../php/modules/footer.php'); ?>

</div>
</body>
</html>