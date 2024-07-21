<?php
require_once (__DIR__ . '/../php/connectDB.php');


function totalCount($conn){
    $sql = "SELECT COUNT(*) as total_count FROM items";
    $sthCount = $conn->prepare($sql);
    $sthCount->execute();
    $totalCountResult = $sthCount->fetch(PDO::FETCH_ASSOC);
    $totalCount = $totalCountResult['total_count'];
    echo "<h3 class='totalCount'>Total amount of items in our database: " . $totalCount . "</h3>";
}

function getTypes($conn, $mapId) {
$sql = "SELECT `types`.`name`, `types`.`description`,`items`.`map_id`, `maps`.`map_name`
        FROM `types` 
        LEFT JOIN `items` ON `items`.`id_type` = `types`.`type_id`
        LEFT JOIN `maps` ON `items`.`map_id` = `maps`.`map_id`
        WHERE `items`.`map_id` = :map
        GROUP BY `types`.`type_id`";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':map', $mapId, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    outputCategories($result);
    return $result;
}
function outputCategories($result){
    if ($result) {
    echo '<ul>';
        echo '<li><a href="#" class="nav-types">Types</a></li>';
        foreach ($result as $row) {
            echo '<li><a href="#' . str_replace(' ', '', strtolower($row['name'])) . '">'. $row['name']. ' IDs </a></li>';
        }
    echo '</ul>';
    }
}
function printTables($conn,$result, $id){
    $sql = "SELECT `items`.`item_name`, `items`.`item_id`, `maps`.`map_id`, `types`.`name`,  `types`.`description`
FROM `items`
	LEFT JOIN `maps` ON `items`.`map_id` = `maps`.`map_id`
	LEFT JOIN `types` ON `items`.`id_type` = `types`.`type_id`
WHERE `maps`.`map_id` = :id AND `types`.`name` = :type";

    foreach ($result as $category){
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':type', $category['name'], PDO::PARAM_STR);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<h2 class="category" id="' . str_replace(' ', '', strtolower($category['name'])) . '">' .  $category['map_name'].' '. $category['name'] . ' IDs </h2>';
        echo '<div class="category__block"><h3 class="category category-info">'; echo $category['description']; echo '</h3></div>';

        echo "<table class='main__table'>
            <thead>
            <tr>
            <th>Item Name</th>
            <th>Item ID</th>
            </tr>
</thead>
";
        foreach ($items as $item){
            echo "<tr>";
            echo "<td>" . $item['item_name'] . "</td>";
            echo "<td>" . $item['item_id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

function searchTable($conn)
{
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $sql = "SELECT `items`.`item_name`, `items`.`item_image`, `items`.`item_id`, `maps`.`map_name`, `types`.`name`
FROM `items` 
	LEFT JOIN `maps` ON `items`.`map_id` = `maps`.`map_id` 
	LEFT JOIN `types` ON `items`.`id_type` = `types`.`type_id`
WHERE `items`.`item_name` LIKE :search OR `items`.`item_id` LIKE :search";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $item) {
            echo "<tr>";
            echo "<td><img src=\"./img/icons/" . $item['item_image'] . ".png\" alt=\"" . $item['item_name'] . "\" class=\"item__image\"></td>";
            echo "<td>" . $item['item_name'] . "</td>";
            echo "<td>" . $item['item_id'] . "</td>";
            echo "<td>" . $item['map_name'] . "</td>";
            echo "<td>" . $item['name'] . "</td>";
            echo "</tr>";
        }
    } else {
        getAll($conn);
    }
}

?>


