<?php
$stmt="CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL ,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    role TINYINT(2) NOT NULL,
    status TINYINT(1) NOT NULL,
    UNIQUE (username),
    UNIQUE (email)    
)";
include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Table Created Successfully";}
else {echo "Error Creating table or might be exist";
}

//creating table for categories
$stmt="CREATE TABLE IF NOT EXISTS categories(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL ,
    status TINYINT(1) NOT NULL,
    UNIQUE (username)
    )";
    include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Cateegories Created Successfully";}
else {echo "Error Creating table or might be exist";
}

$stmt="CREATE TABLE IF NOT EXISTS post(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250) NOT NULL,
    keyword VARCHAR(250) NOT NULL,
    description VARCHAR(250) NOT NULL,
    heading VARCHAR(250) NOT NULL,
    shortstory VARCHAR(250) NOT NULL,
    fullstory VARCHAR(250) NOT NULL,
    image VARCHAR(100) NOT NULL,
    postdate VARCHAR(50) NOT NULL,
    category_id TINYINT(4) NOT NULL,
    user_id TINYINT(2) NOT NULL,
    status TINYINT(1) NOT NULL,
    UNIQUE (heading)
    )";
include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Post Created Successfully";}
else {echo "Error Creating table or might be exist";
}

//creating table for comments
$stmt="CREATE TABLE IF NOT EXISTS comment(
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id TINYINT(1) NOT NULL,
    user_id TINYINT(1) NOT NULL,
    comment TINYINT(1) NOT NULL
    )";

include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Comment Created Successfully";}
else {echo "Error Creating table or might be exist";
}
mysqli_close($conn);
?>