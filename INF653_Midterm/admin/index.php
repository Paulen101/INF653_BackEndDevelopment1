<?php
    $base_path = '../';
    require('../model/database.php');
    require('../model/vehicles_db.php');
    require('../model/makes_db.php');
    require('../model/types_db.php');
    require('../model/classes_db.php');

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
        if (!$action) {
            $action = 'list_vehicles';
        }
    }

    switch ($action) {
        case 'list_vehicles':
            $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
            $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
            $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
            $sort = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_SPECIAL_CHARS);
            if (!$sort) $sort = 'price';

            $makes = get_makes();
            $types = get_types();
            $classes = get_classes();
            $vehicles = get_vehicles($sort, $make_id, $type_id, $class_id);
            include('../view/admin_vehicle_list.php');
            break;

        case 'delete_vehicle':
            $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
            if ($vehicle_id) {
                delete_vehicle($vehicle_id);
            }
            header("Location: .");
            break;

        case 'show_add_form':
            $makes = get_makes();
            $types = get_types();
            $classes = get_classes();
            include('../view/add_vehicle.php');
            break;

        case 'add_vehicle':
            $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
            $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
            $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
            $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
            $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);

            if ($year && $model && $price && $make_id && $type_id && $class_id) {
                add_vehicle($year, $model, $price, $make_id, $type_id, $class_id);
                header("Location: .");
            } else {
                $error_message = "Invalid vehicle data. Check all fields and try again.";
                include('../view/error.php');
            }
            break;

        case 'list_makes':
            $makes = get_makes();
            include('../view/make_list.php');
            break;

        case 'add_make':
            $make_name = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_SPECIAL_CHARS);
            if ($make_name) {
                add_make($make_name);
                header("Location: .?action=list_makes");
            } else {
                $error_message = "Invalid make name.";
                include('../view/error.php');
            }
            break;

        case 'delete_make':
            $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
            if ($make_id) {
                try {
                    delete_make($make_id);
                    header("Location: .?action=list_makes");
                } catch (PDOException $e) {
                    $error_message = "Cannot delete make as it is assigned to vehicles.";
                    include('../view/error.php');
                }
            }
            break;

        case 'list_types':
            $types = get_types();
            include('../view/type_list.php');
            break;

        case 'add_type':
            $type_name = filter_input(INPUT_POST, 'type_name', FILTER_SANITIZE_SPECIAL_CHARS);
            if ($type_name) {
                add_type($type_name);
                header("Location: .?action=list_types");
            } else {
                $error_message = "Invalid type name.";
                include('../view/error.php');
            }
            break;

        case 'delete_type':
            $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
            if ($type_id) {
                try {
                    delete_type($type_id);
                    header("Location: .?action=list_types");
                } catch (PDOException $e) {
                    $error_message = "Cannot delete type as it is assigned to vehicles.";
                    include('../view/error.php');
                }
            }
            break;

        case 'list_classes':
            $classes = get_classes();
            include('../view/class_list.php');
            break;

        case 'add_class':
            $class_name = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_SPECIAL_CHARS);
            if ($class_name) {
                add_class($class_name);
                header("Location: .?action=list_classes");
            } else {
                $error_message = "Invalid class name.";
                include('../view/error.php');
            }
            break;

        case 'delete_class':
            $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
            if ($class_id) {
                try {
                    delete_class($class_id);
                    header("Location: .?action=list_classes");
                } catch (PDOException $e) {
                    $error_message = "Cannot delete class as it is assigned to vehicles.";
                    include('../view/error.php');
                }
            }
            break;
    }
?>
