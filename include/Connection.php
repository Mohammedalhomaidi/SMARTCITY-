<?php 
session_start();

$server = "localhost";
$root = "root";
$password = "";
$dbname = "SmartCity";

// Create connection
$conn = new mysqli($server, $root, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // Select database
    $conn->select_db($dbname);

    // Create Users table
    $sql = "CREATE TABLE IF NOT EXISTS Users (
        UserID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        Password VARCHAR(100) NOT NULL,
        Email VARCHAR(150) DEFAULT NULL UNIQUE,
         Role VARCHAR(10) NOT NULL DEFAULT 'User',
        Date DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    if (!$conn->query($sql)) {
        echo "Error creating Users table: " . $conn->error;
    }

    // Create Admin table
    $sql = "CREATE TABLE IF NOT EXISTS Admin (
        UserID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(255) NOT NULL,
        Password VARCHAR(100) NOT NULL,
        Email VARCHAR(150) DEFAULT NULL UNIQUE,
        Role VARCHAR(10) NOT NULL DEFAULT 'Admin',
        Date DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
    if (!$conn->query($sql)) {
        echo "Error creating Admin table: " . $conn->error;
    }

    // Create Avatar table
    $sql = "CREATE TABLE IF NOT EXISTS Avatar (
        AvatarID INT AUTO_INCREMENT PRIMARY KEY,
        AvatarName VARCHAR(255) NOT NULL,
        AvatarDetails TEXT NOT NULL,
        AvatarImage VARCHAR(50) NOT NULL,
        Author_id INT NOT NULL,
        Publish_Date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (Author_id) REFERENCES Users(UserID)
    )";
    if (!$conn->query($sql)) {
        echo "Error creating Avatar table: " . $conn->error;
    }

    // Create Smart_City table
    $sql = "CREATE TABLE IF NOT EXISTS Smart_City (
        CityID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        City_environment VARCHAR(120) NOT NULL,
        City_Name VARCHAR(120) NOT NULL,
        Publish_Date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
        Details VARCHAR(120) NOT NULL,
        Link VARCHAR(120) NOT NULL,
        File VARCHAR(120) NOT NULL,
        Image VARCHAR(120) DEFAULT NULL,
        Video VARCHAR(120) DEFAULT NULL,
        AvatarID INT NOT NULL,
        approve VARCHAR(120) NULL,
        FOREIGN KEY (AvatarID) REFERENCES Avatar(AvatarID)
    )";
    if (!$conn->query($sql)) {
        echo "Error creating Smart_City table: " . $conn->error;
    }

    // Create Instructions table
    $sql = "CREATE TABLE IF NOT EXISTS Instructions (
        InstructionsID INT AUTO_INCREMENT PRIMARY KEY,
        Content VARCHAR(120) NOT NULL,
        Title VARCHAR(120) NOT NULL,
        Publish_Date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
        AvatarID INT NOT NULL,
        SmartCityID INT NOT NULL,
        FOREIGN KEY (AvatarID) REFERENCES Avatar(AvatarID),
        FOREIGN KEY (SmartCityID) REFERENCES Smart_City(CityID)
    )";
    if (!$conn->query($sql)) {
        echo "Error creating Instructions table: " . $conn->error;
    }

    // Check if Admin table has records and insert if not
    $sql = "SELECT * FROM Admin";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
       $password= md5('Admin');
        $sql = "INSERT INTO Admin (Name, Password, Email)
        VALUES ('Admin', '$password', 'Admin@gmail.com')";
        if (!$conn->query($sql)) {
            echo "Error inserting Admin user: " . $conn->error;
        }
    }
} else {
    echo "Error creating database: " . $conn->error;
}
?>
