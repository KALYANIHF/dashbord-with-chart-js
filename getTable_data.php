<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';

getTotal_TableData($conn,$requestData['date_range'],$requestData['kyc_type']);