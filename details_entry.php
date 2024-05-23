<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
else
{
    echo "Connected";
}

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $role = $_POST['role'];
    $rating1 = $_POST['rating1'];
    $rating2 = $_POST['rating2'];
    $rating3 = $_POST['rating3'];
    $rating4 = $_POST['rating4'];
    $rating5 = $_POST['rating5'];
    $rating6 = $_POST['rating6'];
    $rating7 = $_POST['rating7'];

    $sql_query = "INSERT INTO entry_details (name,email,age,role,cleanliness,staffservice,facilities,comfortable,amenities,worthformoney,recommend)
    VALUES ('$name','$email','$age','$role','$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry Inserted Successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>