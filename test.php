<?php
$distinct_year=[];
function get_distinct_year($conn,$date_range,$kyc_type,$filter_type,$start_date = "",$end_date = ""){
  include 'flags.php';
  $sql = "SELECT DISTINCT YEAR(created_at) as dis_year from kyc_table ORDER BY(YEAR(created_at)) ASC";
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct days in a week
function get_distinct_day_in_week($conn){
  $sql = "";
  for ($i=1; $i <= 7; $i++) {
    if ($i == 7) {
      $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY ";
      break;
    }
    $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY as day UNION";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct days of last month
function get_distinct_day_in_LastMonth($conn){
  $sql = "";
  for ($i=1; $i <= 30; $i++) { 
    if ($i == 30) {
      $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY ";
      break;
    }
    $sql .= " SELECT DATE(NOW()) - INTERVAL ". $i ." DAY as day UNION";
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct months in last 6 Month
function get_distinctMonth_for_6_Month($conn){
  $sql = "";
  for ($i = 0; $i < 6; $i++) { 
    if ($i == 0) {
      $sql .= "SELECT MONTHNAME(NOW()) as MONTHNAME , MONTH(NOW()) as MONTH_NUMBER UNION";
    }
    if ($i == 5) {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER ";
      break;
    }
    else {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER UNION ";
    }
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// get distinct months in last 6 Month
function get_distinctMonth_for_12_Month($conn){
  $sql = "";
  for ($i = 0; $i < 12; $i++) { 
    if ($i == 0) {
      $sql .= "SELECT MONTHNAME(NOW()) as MONTHNAME , MONTH(NOW()) as MONTH_NUMBER UNION";
    }
    if ($i == 11) {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER ";
      break;
    }
    else {
      $sql.= " SELECT MONTHNAME(NOW() - INTERVAL ".$i." month), MONTH(NOW() - INTERVAL ".$i." month) as MONTH_NUMBER UNION ";
    }
  }
  $run_query = mysqli_query($conn,$sql);
  $result = mysqli_fetch_all($run_query,MYSQLI_ASSOC);
  return $result;
}

// for testing only FIXME:
$distinct_year =  get_distinct_year($conn,'ytd','total_kyc','gender');
echo "<h4>For All the Unic Years For YTD</h4>"."<br>";
foreach ($distinct_year as $year) {
  echo $year['dis_year'] . "<br>";
}
// ===========================
echo "<br>";
// ===========================
$distinct_Days_of_Lastweek = get_distinct_day_in_week($conn);
echo "<h4>For All the Days in last Week</h4>"."<br>";
foreach ($distinct_Days_of_Lastweek as $day) {
  echo $day['day']. '<br>';
}
// ===========================
echo "<br>";
$distinct_Days_of_LastMonth = get_distinct_day_in_LastMonth($conn);
echo "<h4>For All the Days in Last Month</h4>"."<br>";
foreach ($distinct_Days_of_LastMonth as $day) {
  echo $day['day']. "<br>";
}
echo "<br>";
$get_distinctMonth_for_6_Month = get_distinctMonth_for_6_Month($conn);
echo "<h4>For Last 6 Month Name and Index Number</h4>"."<br>";
foreach ($get_distinctMonth_for_6_Month as $month) {
  echo "Month_Name - {$month['MONTHNAME']} and Month_Number - {$month['MONTH_NUMBER']}"."<br>";
}
echo "<br>";
$get_distinctMonth_for_12_Month = get_distinctMonth_for_12_Month($conn);
echo "<h4>For Last 12 Month Name and Index Number</h4>"."<br>";
foreach ($get_distinctMonth_for_12_Month as $month) {
  echo "Month_Name - {$month['MONTHNAME']} and Month_Number - {$month['MONTH_NUMBER']}"."<br>";
}
// For Testing only 
$full_Json_data = [
  $distinct_year,
  $distinct_Days_of_Lastweek,
  $distinct_Days_of_LastMonth,
  $get_distinctMonth_for_6_Month,
  $get_distinctMonth_for_12_Month
];

$demo = [
  [23,45,55,20,36,60,15,35],
  [22,35,18,36,68,71,65,77],
  [41,52,43,47,56,25,35,60],
  [35,48,77,51,63,49,62,49],
  [25,36,42,55,31,37,80,60]
];