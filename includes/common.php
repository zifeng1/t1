<?php
$con=mysqli_connect("t1.cbikw04eie8m.us-east-1.rds.amazonaws.com","admin","12345678","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
