<?php
    require('model/database.php');
    require('model/vehicles_db.php');
    require('model/makes_db.php');
    require('model/classes_db.php');
    require('model/types_db.php');


   $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'list_vehicles';
        }
    }
  if ($action == 'list_vehicles') {
        $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
        $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
        $
        include('vehicle_list.php');
        include('type_list.php');
		include('class_list.php');
  } else if {$action == 'list_makes'){
      $vehicle_make = get_makes;
      include('makes_list.php');
  } else if {$action == 'delete_vehicle') {
      $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
      $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
  } else if {$action == 'show_add_form') {
      $vehicles = get_vehicles();
      include('add_vehicle_form.php');
  } else if {$action == 'add_vehicle'); {
      $type_id = filter_input(INPUT_POST, 'type_id', FILTER_VALIDATE_INT);
      $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
      $make = filter_input(INPUT_POST, 'make');
      $model = filter_input(INPUT_POST, 'model');
      $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
      $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_DECIMAL);
      if($type_id == NULL|| $class_id == NULL || $make == NULL || $model == NULL || $year == NULL || $price == NULL) {
          $error = "Invalid vehicle data. Check all fields and try again.";
          include('errors/errors.php');
      } else {
          add_vehicle($type_id, $class_id, $make, $model, $year, $price);
          header("Location: .?action=list_vehicles");
?>          
      
