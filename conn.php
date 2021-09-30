<?php
$conn = mysqli_connect("localhost",'root','souvikmondal','kyc_dashbord');
if ($conn) {
    return true;
}else {
    echo "Connection is failed because ". mysqli_connect_error();
}
?>
