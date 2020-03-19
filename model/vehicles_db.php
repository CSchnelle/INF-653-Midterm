<?php 
    function get_vehicles_by_class() {
        $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
        //write way to sort items
        global $db;
        if ($class_id == NULL || $class_id == FALSE) {
            $query = 'SELECT T.ItemNum, T.Title, T.Description, C.categoryName FROM todoitems T LEFT JOIN categories C ON T.categoryID = C.categoryID ORDER BY C.categoryID';
        } else {
            $query = 'SELECT T.ItemNum, T.Title, T.Description, C.categoryName FROM todoitems T LEFT JOIN categories C ON T.categoryID = C.categoryID WHERE T.categoryID = :category_id ORDER BY ItemNum';
        }
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function get_vehicle($item_id) {
        global $db;
        $query = 'SELECT * FROM vehicles WHERE ItemNum = :item_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':item_id', $item_id);
        $statement->execute();
        $item = $statement->fetch();
        $statement->closeCursor();
        return $item;
    }

    function delete_vehicle($item_id) {
        global $db;
        $query = 'DELETE FROM vehicles WHERE ItemNum = :item_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':item_id', $item_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($year, $make, $model, $price, $type_id, $class_id) {
        global $db;
        $query = 'INSERT INTO vehicles (Year, Make, Model, Price, type_id, class_id)
              VALUES
                 (:year, :make, :model, :price, :type_id, :class_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':make', $make);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $statement->closeCursor();
    }
?>
