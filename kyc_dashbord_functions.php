<?php
include 'conn.php';
// onload total data
function count_specific_kyc($conn,$date_range,$kyc_type,$filter_type,$date_spliter=[],$start_date = "",$end_date = ""){
  include 'flags.php';
  // one Exception if the date range is YTD
  if ($date_range == 'ytd') {
    $data_as_JSON = [];
    $sql = "SELECT COUNT(*) as per_kyc FROM kyc_table";
    $run_query = mysqli_query($conn,$sql);
    $per_kyc = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type) as per_kyc from kyc_table a group by(kyc_type)";
    $run_query = mysqli_query($conn,$sql);
    $per_kyc_ = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    foreach ($per_kyc_ as $kyc) {
      array_push($per_kyc,$kyc);
    }
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status) as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $kyc_status = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender) as filter from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_status = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $dis_Year = get_distinct_year($conn);
    $bar_chart_data = [];
    foreach ($dis_Year as $year) {
      $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and YEAR(created_at) = {$year['dis']}) as count from kyc_table a group by(kyc_type)";
      $run_query = mysqli_query($conn,$sql);
      $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
      array_push($bar_chart_data,$result);
    }
    $data_as_JSON = [
      'per_kyc' => $per_kyc,
      'kyc_status' => $kyc_status,
      'filter_status' => $filter_status,
      'dis_year' => $dis_Year,
      'bar_chart_data' => $bar_chart_data
    ];
    echo json_encode($data_as_JSON);
  }
  if ($date_range == 'today') {
    $data_as_JSON = [];
    $sql = "SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} UNION ALL SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range} GROUP BY(kyc_type)";
    $run_query = mysqli_query($conn,$sql);
    $per_kyc = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "";
  }
}

### Get Distinct Years of all 1.
function get_distinct_year($conn){
  include 'flags.php';
  $sql = "SELECT DISTINCT YEAR(created_at) as dis from kyc_table ORDER BY(YEAR(created_at)) ASC";
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

?>
