<?php
//Connect to MySQL
$con = mysqli_connect("localhost","root","","ShoutIt"); // the empty space is for password

//Test Connection
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
