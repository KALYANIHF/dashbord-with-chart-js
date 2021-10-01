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
    $dis_time = get_distinct_year($conn);
    $bar_chart_data = [];
    foreach ($dis_time as $year) {
      $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and YEAR(created_at) = {$year['dis']}) as count from kyc_table a group by(kyc_type)";
      $run_query = mysqli_query($conn,$sql);
      $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
      array_push($bar_chart_data,$result);
    }
    $data_as_JSON = [
      'per_kyc' => $per_kyc,
      'kyc_status' => $kyc_status,
      'filter_status' => $filter_status,
      'dis_time' => $dis_time,
      'bar_chart_data' => $bar_chart_data
    ];
    echo json_encode($data_as_JSON);
  }
  else{
    $data_as_JSON =[];
    $sql = "SELECT COUNT(*) as per_kyc FROM kyc_table WHERE ${$date_range}";
    $run_query = mysqli_query($conn,$sql);
    $per_kyc = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.kyc_type = a.kyc_type and ${$date_range}) as per_kyc from kyc_table a group by(kyc_type)";
    $run_query = mysqli_query($conn,$sql);
    $per_kyc_ = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    foreach ($per_kyc_ as $kyc) {
      array_push($per_kyc,$kyc);
    }
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status and ${$date_range}) as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $kyc_status = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender and ${$date_range}) as filter from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_status = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    if ($date_range == 'today') {
      $dis_time = get_today_Date($conn);
      $bar_chart_data = [];
      foreach ($dis_time as $val) {
        $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and date(created_at) = '{$val['dis']}') as count from kyc_table a group by(kyc_type)";
        $run_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
        array_push($bar_chart_data,$result);
      }
    }
    if ($date_range == 'last_week') {
      $dis_time = get_distinct_day_in_week($conn);
      $bar_chart_data = [];
      foreach ($dis_time as $val) {
        $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and date(created_at) = '{$val['dis']}') as count from kyc_table a group by(kyc_type)";
        $run_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
        array_push($bar_chart_data,$result);
      }
    }
    if ($date_range == 'last_month') {
      $dis_time = get_distinct_day_in_LastMonth($conn);
      $bar_chart_data = [];
      foreach ($dis_time as $val) {
        $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and date(created_at) = '{$val['dis']}') as count from kyc_table a group by(kyc_type)";
        $run_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
        array_push($bar_chart_data,$result);
      }
    }
    if ($date_range == 'last_6_month') {
      $dis_time = get_distinctMonth_for_6_Month($conn);
      $bar_chart_data = [];
      foreach ($dis_time as $val) {
        $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and monthname(created_at) = '{$val['dis']}') as count from kyc_table a group by(kyc_type)";
        $run_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
        array_push($bar_chart_data,$result);
      }
    }
    if ($date_range == 'last_1_year') {
      $dis_time = get_distinctMonth_for_12_Month($conn);
      $bar_chart_data = [];
      foreach ($dis_time as $val) {
        $sql = "select a.kyc_type,(select count(*) from kyc_table x where x.kyc_type = a.kyc_type and monthname(created_at) = '{$val['dis']}') as count from kyc_table a group by(kyc_type)";
        $run_query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
        array_push($bar_chart_data,$result);
      }
    }
    $data_as_JSON =[
      'per_kyc' => $per_kyc,
      'kyc_status' => $kyc_status,
      'filter_status' => $filter_status,
      'dis_time' => $dis_time,
      'bar_chart_data' => $bar_chart_data
    ];
    echo json_encode($data_as_JSON);
  }
}

### function count on kyc status
function count_kyc_Status($conn,$date_range,$kyc_type_,$filter_type,$date_spliter=[],$start_date = "",$end_date = ""){

  include 'flags.php';
  // first query
  
  if ($kyc_type_ == 'total_kyc' && $date_range == 'ytd') {
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status) as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $status_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender) as gender from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  }
  if ($kyc_type_ != 'total_kyc' && $date_range == 'ytd') {
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status and kyc_type = '{$kyc_type_}') as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $status_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender and kyc_type = '{$kyc_type_}') as gender from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  }
  if ($kyc_type_ == 'total_kyc' && $date_range != 'ytd') {
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status and ${$date_range}) as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $status_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender and ${$date_range}) as gender from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  }
  if ($kyc_type_ != 'total_kyc' && $date_range != 'ytd') {
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.status = a.status and kyc_type = '{$kyc_type_}' and ${$date_range}) as status from kyc_table a group by(status)";
    $run_query = mysqli_query($conn,$sql);
    $status_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
    $sql = "SELECT (SELECT COUNT(*) FROM kyc_table x WHERE x.gender = a.gender and kyc_type = '{$kyc_type_}' and ${$date_range}) as gender from kyc_table a group by(gender)";
    $run_query = mysqli_query($conn,$sql);
    $filter_data = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  }

  $kyc_status_data = [
      'status' => $status_data,
      'gender' => $filter_data
    ];
  echo json_encode($kyc_status_data);
}
### Get Distinct Years of all 1.
function get_distinct_year($conn){
  include 'flags.php';
  $sql = "SELECT DISTINCT YEAR(created_at) as dis from kyc_table ORDER BY(YEAR(created_at)) ASC";
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

### Get Today Date 
function get_today_Date($conn){
  include 'flags.php';
  $sql = "SELECT DATE(current_date) as dis";
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct days in a week
function get_distinct_day_in_week($conn){
  $sql = "SELECT DATE(NOW()) as dis UNION ";
  for ($i=1; $i < 7; $i++) {
    if ($i == 6) {
      $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY ";
      break;
    }
    $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY as dis UNION";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct days of last month
function get_distinct_day_in_LastMonth($conn){
  $sql = "SELECT DATE(NOW()) as dis UNION ";
  for ($i=1; $i < 30; $i++) { 
    if ($i == 29) {
      $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY ";
      break;
    }
    $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY as dis UNION";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct months in last 6 Month
function get_distinctMonth_for_6_Month($conn){
  $sql = "SELECT MONTHNAME(NOW()) as dis, MONTH(NOW()) as MONTH_NUMBER UNION ";
  for ($i = 1; $i < 6; $i++) { 
    
    if ($i == 5) {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER ";
      break;
    }
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER UNION ";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct months in last 6 Month
function get_distinctMonth_for_12_Month($conn){
  $sql = "SELECT MONTHNAME(NOW()) as dis, MONTH(NOW()) as MONTH_NUMBER UNION ";
  for ($i = 1; $i < 12; $i++) { 
    
    if ($i == 11) {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER ";
      break;
    }
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER UNION ";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

?>
