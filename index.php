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
  if ($action == 'get_vehicles') {
        $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
        $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
        $
        include('vehicle_list.php');
     //list makes
  } else if {$action == 'get_makes'){
      $vehicle_make = get_makes();
      include('vehicle_list.php');
  //vehicle add form
  } else if {$action == 'show_add_form') {
      $vehicles = get_vehicles();
      include('add_vehicle_form.php');
  //add vehicle
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
   //delete vehicle	      
  } else if {$action == 'delete_vehicle'); {
	      $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
	      if($vehicle_id == NULL) {
		      $error = "There are no vehicles to delete.";
		      include('errors/errors.php');
	      } else {
		      delete_vehicle($vehicle_id);
		      header("Location .?action=list_vehicles");
  //sort by price		      
  } else if {$action == 'get_by_price'); {
	$price = filter_input(INPUT_GET, 'price', FILTER_VALIDATE_INT);
	include(vehicle_list.php);
  //sort by year		      
  } else if {$action == 'get_by_year'); {
 	$year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
	include(vehicle_list.php);
  //sort by class		      
  } else if ($action =='get_by_class'); {
        $classes = filter_input(INPUT_GET, 'class_name');
	include(vehicle_list.php);
  //sort by type		      
  } else {$action =='get_by_type');{
	types = filter_input(INPUT_GET, 'type_name', FILTER_VALIDATE_INT);
	include(vehicle_list.php);
 	 }
  }
				   
?>          
      
