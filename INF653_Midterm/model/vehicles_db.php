<?php
    function get_vehicles($sort = 'price', $make_id = null, $type_id = null, $class_id = null) {
        global $db;
        $query = 'SELECT v.vehicle_id, v.year, v.model, v.price, m.make_name, t.type_name, c.class_name
                  FROM vehicles v
                  INNER JOIN makes m ON v.make_id = m.make_id
                  INNER JOIN types t ON v.type_id = t.type_id
                  INNER JOIN classes c ON v.class_id = c.class_id';

        $conditions = [];
        $params = [];

        if ($make_id) {
            $conditions[] = 'v.make_id = :make_id';
            $params[':make_id'] = $make_id;
        }
        if ($type_id) {
            $conditions[] = 'v.type_id = :type_id';
            $params[':type_id'] = $type_id;
        }
        if ($class_id) {
            $conditions[] = 'v.class_id = :class_id';
            $params[':class_id'] = $class_id;
        }

        if (!empty($conditions)) {
            $query .= ' WHERE ' . implode(' AND ', $conditions);
        }

        if ($sort == 'year') {
            $query .= ' ORDER BY v.year DESC';
        } else {
            $query .= ' ORDER BY v.price DESC';
        }

        $statement = $db->prepare($query);
        foreach ($params as $key => $value) {
            $statement->bindValue($key, $value);
        }
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function delete_vehicle($vehicle_id) {
        global $db;
        $query = 'DELETE FROM vehicles WHERE vehicle_id = :vehicle_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicle_id', $vehicle_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($year, $model, $price, $make_id, $type_id, $class_id) {
        global $db;
        $query = 'INSERT INTO vehicles (year, model, price, make_id, type_id, class_id)
                  VALUES (:year, :model, :price, :make_id, :type_id, :class_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $statement->closeCursor();
    }
?>
