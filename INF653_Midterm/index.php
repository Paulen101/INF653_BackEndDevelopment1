<?php
    $base_path = '';
    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/makes_db.php');
    require('model/types_db.php');
    require('model/classes_db.php');

    // Get parameters for filtering and sorting
    $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
    $sort = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$sort) $sort = 'price';

    // Get data from model
    $makes = get_makes();
    $types = get_types();
    $classes = get_classes();
    $vehicles = get_vehicles($sort, $make_id, $type_id, $class_id);

    include('view/vehicle_list.php');
?>
