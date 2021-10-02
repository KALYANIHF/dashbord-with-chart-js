<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';
// $all_data = make_allData_asJSON($conn);
count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type'],$requestData['start_date'],$requestData['end_date']);

?>
