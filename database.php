<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blooddonation"; 

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    // code to insert the data in database..
    // you will read all the values entered by the user in the previous
    $ml = $_GET['email'];
    $nm = $_GET['name'];
    $gr = $_GET['gender'];
    $age = $_GET['age'];
    $wt = $_GET['weight'];
    $pd = $_GET['past_donation'];
    $in = $_GET['infection'];
    $vc = $_GET['vaccination'];
    $di = $_GET['disease'];
    $tt = $_GET['tattoos'];
    $bt = $_GET['bloodtype'];
    
    $query = "insert into blooddonation ('$ml','$nm','$gr','$age','$wt','$pd,'$in','$vc','$di','$tt','$bt')";
    $data = mysqli_query($conn,$query)

    if($data)
    {
        echo "Data inserted intoo database";    
    }
    else
    {
        echo "Insertion Failed!";
    }
    
    echo "Connection OK";
}
else
{
    echo "Connection failed".mysqli_connect_error();
}
?>