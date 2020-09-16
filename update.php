<?php
$db_name='test';
$table_name='dataa';
$col1='name';
$col2='email';

$con=mysqli_connect("localhost","root","",$db_name);
$did="";
$dname="";
$demail="";

if(isset($_GET['updid'])){
    $updid=$_GET['updid'];
    $s="select * from $table_name where id='$updid'";
    if($r=mysqli_query($con,$s))
    {
        $row=mysqli_fetch_assoc($r);
        $did=$row['id'];
        $dname=$row['name'];
        $demail=$row['email'];
        
    }
    
}

if(isset($_POST['update'])){
    $i=$_GET['updid'];
    $aa=$_POST['uname'];
    $bb=$_POST['uemail'];
    $up_sql="UPDATE $table_name SET $col1='$aa',$col2='$bb' where id='$i' ";
    $result=mysqli_query($con,$up_sql);
    if($result==true){
       echo "<script> 
       alert('Updated Succesfully');
       window.location.href='display.php';
       </script>";
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
    <table class="table">
            <thead>
                <th colspan="2" class="thead">Updation</th>
            </thead>
            <tbody>
                <tr>
                    <td><label for="id">Id:</label></td>
                    <td> <?php echo $did; ?><br></td>
                </tr>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="uname" placeholder="Enter your name" required value="<?php echo $dname; ?>" onkeypress="return isCharKey(event)"/></td>
                </tr>
                <tr>
                    <td><label for="name">Phone No:</label></td>
                    <td><input type="tel" name="uemail" placeholder="Enter email" required value="<?php echo $demail; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="update" class="button-save" value="Update" />
                    </td>
                </tr>
    </form>
    </div>
</body>
</html>

    
