<?php 

function connectDB() {
    $server = "localhost";
    $dbUsername = "dc01";
    $dbPassword = "123456789";
    $dbName = "webphone";
    // Kết nối
    $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword);
    mysqli_select_db( $dbconnect,  $dbName);
    return $dbconnect;
}

?>



