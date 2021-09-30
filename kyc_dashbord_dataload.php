<?php
// include "../config/config.php";
include 'conn.php';
// $staff_id=verifyAutho();
$requestData = $_REQUEST;
include './kyc_dashbord_functions.php';
// $all_data = make_allData_asJSON($conn);

if ($requestData['date_range'] == 'ytd') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'today') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'last_week') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'last_month') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'last_6_month') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'last_1_year') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}
if ($requestData['date_range'] == 'custom_date') {
    count_specific_kyc($conn,$requestData['date_range'],$requestData['kyc_type'],$requestData['filter_type']);
}

?>
