<?php
// Accounts Controller

require_once '../library/connections.php';
require_once '../model/main-model.php';
require_once '../model/accounts-model.php';
require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();

$navList = createNavlist($classifications);



$action = filter_input(INPUT_GET, 'action');
if
 ($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
}

switch ($action) {
  case 'login':
    include '../view/login.php';
  break;
  case  'registration':
    // Filter and store the data
    $clientFirstname = filter_input(INPUT_POST, 'clientFirstname' , FILTER_SANITIZE_STRING);
    $clientLastname = filter_input(INPUT_POST, 'clientLastname' , FILTER_SANITIZE_STRING);
    $clientEmail = filter_input(INPUT_POST, 'clientEmail' , FILTER_SANITIZE_EMAIL);
    $clientPassword = filter_input(INPUT_POST, 'clientPassword' , FILTER_SANITIZE_STRING);

    // Check for missing data
  if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($clientPassword)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/registration.php';
    exit; 
 }

 // Hash the checked password
 $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);

 // Send the data to the model
  $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);

  // Check and report the result
  if($regOutcome === 1){
    $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
    include '../view/login.php';
    exit;
  } else {
    $message = "<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
    include '../view/registration.php';
    exit;
  }
   case 'loginuser':
    $clientEmail = filter_input(INPUT_POST, 'clientEmail' , FILTER_SANITIZE_EMAIL);
    $clientPassword = filter_input(INPUT_POST, 'clientPassword' , FILTER_SANITIZE_STRING);
   // Check for missing data
   if(empty($clientEmail) || empty($clientPassword)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include '../view/login.php';
    exit; 
 }  
  default:
  
  break;
 }
?>