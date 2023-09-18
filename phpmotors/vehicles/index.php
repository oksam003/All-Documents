<?php
// Vehicle Controller

require_once '../library/connections.php';
require_once '../model/main-model.php';
require_once '../model/vehicles-model.php';
require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();
$navList = createNavlist($classifications);


//$classifications = getClassifications();

/*$navList = '<ul>';
$navList .="<li><a href='/phpmotors/index.php' title='View 
the PHP Motors home page'>Home</a></li>";
foreach ($classifications as $classification) {
    $navList .= "<li><a href='/phpmotors/index.php?action="
    .urlencode($classification['classificationName'])
    ."' title='View our$classification[classificationName]
     product line'>$classification[classificationName]</a></li>";
}
$navList .='</ul>';*/


$selectList = '<select required id="classificationId" name="classificationId">';
$selectList .= '<option value="" selected disabled hidden>Choose a Classification</option>';
foreach ($classifications as $classification) {
    $selectList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";
}
$selectList .='</select>';

$action = filter_input(INPUT_GET, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
  case 'classification':
    include '../view/add-classification.php';
  break;
  case  'vehicle':
    include '../view/add-vehicle.php';
    break;
  case 'addvehicle':
    // Filter and store the data
    $invMake = filter_input(INPUT_POST, 'invMake');
    $invModel = filter_input(INPUT_POST, 'invModel');
    $invDescription = filter_input(INPUT_POST, 'invDescription');
    $invImage = filter_input(INPUT_POST, 'invImage');
    $invThumbnail = filter_input(INPUT_POST, 'invThumbnail');
    $invPrice = filter_input(INPUT_POST, 'invPrice');
    $invStock = filter_input(INPUT_POST, 'invStock');
    $invColor = filter_input(INPUT_POST, 'invColor');
    $classificationId = filter_input(INPUT_POST, 'classificationId');

    // Check for missing data
  if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/add-vehicle.php';
    exit; 
 }

 // Send the data to the model
  $addOutcome = addVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);

  // Check and report the result
  if($addOutcome === 1){
    $message = "<p>Thanks for adding the $invMake $invModel!</p>";
    include '../view/vehicle-man.php';
    exit;
  } else {
    $message = "<p>Sorry, but your attempt to add a vehicle failed. Please try again.</p>";
    include '../view/add-vehicle.php';
    exit;
  }
  case 'addclassification':
    $classificationName = filter_input(INPUT_POST, 'classificationName');
    if(empty($classificationName)){
      $message = '<p>Please provide a classification name.</p>';
      include '../view/add-classification.php';
      exit; 
   }
   $addOutcome = addClassification($classificationName);

  // Check and report the result
  if($addOutcome === 1){
    $message = "<p>Thanks for adding $classificationName!</p>";
    header('Location: ../vehicles/index.php');
    exit;
  } else {
    $message = "<p>Sorry, but your attempt to add a classification failed. Please try again.</p>";
    include '../view/add-classification.php';
    exit;
  }
  default:
   include '../view/vehicle-man.php';
   break;
 }
?>