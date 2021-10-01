<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';
count_kyc_byFilter($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);