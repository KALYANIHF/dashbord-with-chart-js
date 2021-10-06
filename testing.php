<?php
include 'conn.php';
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");
// grab all the data
$name = htmlspecialchars($_POST['name']);
$kyc_type = htmlspecialchars($_POST['kyc_type']);
$kyc_status = htmlspecialchars($_POST['kyc_status']);
$gender = htmlspecialchars($_POST['gender']);
$marital_status = htmlspecialchars($_POST['marital_status']);
$caste = htmlspecialchars($_POST['caste']);
$religion = htmlspecialchars($_POST['religion']);
$current_date = htmlspecialchars($_POST['current_date']);
$date = date('h:i:s a', time());
$current_date.= " ". $date;

if (htmlspecialchars(isset($_POST['submit']))) {
    if (!empty($name) && !empty($kyc_type) && !empty($kyc_status) && !empty($gender) && !empty($marital_status) && !empty($caste) && !empty($religion) && !empty($current_date)) {
        $sql = "INSERT INTO `kyc_table`(`kyc_type`, `status`, `member_name`, `gender`, `marital_status`, `caste`, `religion`, `created_at`) VALUES ('$kyc_type','$kyc_status','$name','$gender','$marital_status','$caste','$religion','$current_date')";
        if (mysqli_query($conn,$sql)) {
            echo "<script>alert('Insert Successfully')</script>";
        }
    }else {
        echo "<script>alert('Please select all the input fields')</script>";
    }  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="heading p-4 text-center">
            <h3>Form for the DashBord (Only For Testing)</h3>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="name">Member Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="kyc_type">Kyc Type</label>
                <select class="custom-select mr-sm-2" name="kyc_type" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Kyc Type</option>
                    <option value="self">Self</option>
                    <option value="shg">Shg</option>
                    <option value="jlg">Jlg</option>
                    <option value="or">Organization</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="custom-select mr-sm-2" name="kyc_status" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Kyc Status</option>
                    <option value="approve">Approve</option>
                    <option value="reject">Reject</option>
                    <option value="pending">Pending</option>
                    <option value="seek_con">Seek Conformation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="custom-select mr-sm-2" name="gender" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="transgender">Transgender</option>
                    <option value="mixed">Mixed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="marital_status">Marital Status</label>
                <select class="custom-select mr-sm-2" name="marital_status" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Marital Status</option>
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="caste">Caste</label>
                <select class="custom-select mr-sm-2" name="caste" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Caste</option>
                    <option value="st">St</option>
                    <option value="sc">Sc</option>
                    <option value="obc">Obc</option>
                    <option value="general">General</option>
                    <option value="minority">Minority</option>
                </select>
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <select class="custom-select mr-sm-2" name="religion" class="form-control" id="inlineFormCustomSelect">
                    <option value="">Choose Religion</option>
                    <option value="hindu">Hindu</option>
                    <option value="muslim">Muslim</option>
                    <option value="christian">Christian</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Select Date</label>
                <input type="date" max="<?php echo date("Y-m-d")?>" name="current_date" id="current_date">
            </div>
            <input type="submit" class="btn btn-success" value="Submit" name="submit">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
</html>