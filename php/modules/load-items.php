<?php

function getAll($conn){
    $itemsNewCount = $_POST['itemNewCount'];
    print_r($itemsNewCount);
    $sql = "SELECT `items`.`item_name`, `items`.`item_image`, `items`.`item_id`, `maps`.`map_name`, `types`.`name`
FROM `items` 
	LEFT JOIN `maps` ON `items`.`map_id` = `maps`.`map_id` 
	LEFT JOIN `types` ON `items`.`id_type` = `types`.`type_id` LIMIT 50";

    $stmt = $conn->prepare($sql);
 //   $stmt -> bindParam(:itemsNewCount, $itemsNewCount, PDO::PARAM_INT);

    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $item) {
        echo "<tr>";
        echo "<td><img src=\"../../img/icons/" . $item['item_image'] . ".png\" alt=\"" . $item['item_name'] . "\" class=\"item__image\"></td>";
        echo "<td>" . $item['item_name'] . "</td>";
        echo "<td>" . $item['item_id'] . "</td>";
        echo "<td>" . $item['map_name'] . "</td>";
        echo "<td>" . $item['name'] . "</td>";
        echo "</tr>";
    }
}
    
    ?>