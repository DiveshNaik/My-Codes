<?php
//------------database name -------------------//
$db_name='test';
//------------table name -----------------//
$table_name='dataa';
//------------table fields ----------------//
$col1='name';
$col2='email';
//-----------Connection to database-------------//
$con=mysqli_connect("localhost","root","",$db_name);



//-------------Saving data to database-----------------
if(isset($_POST['save']))
{
    echo $_POST['iphone'];
    // $a=$_POST['iname'];
    // $b=$_POST['iemail'];
    // $sql="INSERT INTO $table_name($col1,$col2) VALUES ('$a','$b')";
    // $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    // if($result > 0)
    // {
    //     echo "<script> 
    //                     alert('Data Saved Succesfully');
    //                     window.location.href='display.php';
    //         </script>";
    // }
    // else
    // {
    //     echo "Error".mysqli_error($con);
    // }
}





?>




