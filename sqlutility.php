<?php
    $host = $_GET['host'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];
    $db = $_GET['pass'];
    
    $query = $_GET['query'];


    $con = mysqli_connect($host, $login, $pass);
    if ($con->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

    $db = mysqli_select_db($con, $db);
    if(!$db)
    {
        echo 'Could not connect to db';
    }

	$query = mysqli_real_escape_string($con, $query);
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==0) { echo "error"; }
    
    while($row = mysqli_fetch_array($result)) {
        echo $row; 
    }

?>

