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
		$vehicles = list_vehicles();
        include('vehicle_list.php');
     //list makes
  } else if ($action == 'get_makes'){
      $vehicle_make = get_makes();
      include('vehicle_list.php');
  //vehicle add form
	  
  } else if ($action == 'show_add_form') {
      $vehicles = get_vehicles();
      include('add_vehicle_form.php');
      
  //sort by price
  } else if ($action == 'get_by_price') {
	$price = filter_input(INPUT_GET, 'price', FILTER_VALIDATE_INT);
	include('vehicle_list.php');
  //sort by year
  } else if ($action == 'get_by_year') {
 	$year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
	include('vehicle_list.php');
  //sort by class		      
  } else if ($action =='get_by_class') {
        $classes = filter_input(INPUT_GET, 'class_name');
	include('class_list.php');
  //sort by type		      
  } else if($action =='get_by_type'){
	$types = filter_input(INPUT_GET, 'type_name', FILTER_VALIDATE_INT);
	include('types_list.php');
 /*	   
    //delete vehicle	      
  } else if ($action == 'delete_vehicle') {
	      $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
	      if($vehicle_id == NULL) {
		      $error = "There are no vehicles to delete.";
		      include('errors/errors.php');
	      } else 
		      delete_vehicle($vehicle_id);
		      header("Location: .?action=get_vehicles"); 
  //add vehicle
  } else ($action == 'add_vehicle') {
      $type_name = filter_input(INPUT_POST, 'type_name');
      $class_name = filter_input(INPUT_POST, 'class_name');
      $make = filter_input(INPUT_POST, 'make');
      $model = filter_input(INPUT_POST, 'model');
      $year = filter_input(INPUT_POST, 'year');
      $price = filter_input(INPUT_POST, 'price');
		if($type_name == NULL|| $class_name == NULL || $make == NULL || $model == NULL || $year == NULL || $price == NULL) {
          $error = "Invalid vehicle data. Check all fields and try again.";
          include('errors/errors.php');
		} else 
          add_vehicle($type_name, $class_name, $make, $model, $year, $price);
          header("Location: .?action=list_vehicles");
  }
  */
?>         
      
