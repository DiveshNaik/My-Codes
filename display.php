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
<button class="button" onclick="window.location.href='index.html'">Home</button><br>
<table class="table">

    <thead class="thead">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Actions</th>
    </thead >
    <tbody>
        <?php
            $con=mysqli_connect("localhost","root","","test");
            $sq="select * from dataa";
            
                $result=mysqli_query($con,$sq);
                if($result==true)
                {
                    while($row=mysqli_fetch_array($result))
                {
                    
                    $id=$row[0];
                    $a=$row[1];
                    $b=$row[2];
            
                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".$a."</td>";
                    echo "<td>".$b."</td>";
                    echo "<td><a href='update.php?updid=$id'>Edit</a></td>";
                    echo "<td><a 
                                href='?delid=$id'
                                onClick=\"javascript: return confirm('Are you sure you want to delete ?')\"
                                >Delete</a></td>";
                    echo "</tr>";
                }
            }

            if(isset($_GET['delid'])){
                $delete_id=$_GET['delid'];
                $sq="delete from dataa where id='$delete_id'";
                $result=mysqli_query($con,$sq);
                if($result==true){
                    echo "<script> 
                                    alert('Data Deleted Succesfully');
                        </script>";
                    
                }
                else
                {
                    echo "Error".mysqli_error($con);
                }
            }
        
       
        ?>
    </tbody>
</table>
</div>
</body>
</html>