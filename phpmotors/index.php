<?php
// This is the main controller

require_once 'library/connections.php';
require_once 'model/main-model.php';
require_once 'library/functions.php';

// Get the array of classifications
$classifications = getClassifications();
$navList = createNavlist($classifications);


$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action){
    case 'something':
       
    break;
      
      default:
       include 'view/home.php';
     }
?>