<html>
<head>
    <title>Display</title>
    <style>
        body{
            background: #D071F9;
        }
        table{
            background-color: white;
        }
    </style>
</head>
</html>
<?php
 include("connection.php");
error_reporting(0);
$query="SELECT * FROM wipro";
$data=mysqli_query($connection,$query);

$total=mysqli_num_rows($data);




// echo $total;



if($total !=0){
    ?>
<!-- html table -->

<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border="1px" cellspacing="7" width="98%">
    <tr>
    <th width="5%">ID</th>
    <th width="10%">First Name</th>
    <th width="10%">Last Name</th>
    <th width="8%">Gender</th>
    <th width="15%">Email</th>
    <th width="10%">Phone</th>
    <th width="20%">Address</th>
    <th width="20%">operation</th>
    
</tr>


    <?php

       while($result=mysqli_fetch_assoc($data))
       {
        echo "<tr>
                <td>".$result['ID']."</td>
                <td>".$result['First_Name']."</td>
                <td>".$result['Last_Name']."</td>
                <td>".$result['Gender']."</td>
                <td>".$result['Email']."</td>
                <td>".$result['Phone']."</td>
                <td>".$result['Address']."</td>

                <td><a href='update_design.php?id=$result[ID]'>Update</a></td>
         </tr>";
       }
}
else{
    echo "Table has no record";
}
?>
</table>
</center>
<!-- echo $result['First_Name']." ".$result['Last_Name']." ".$result['Gender']." ".$result['Email']." " .$result['Phone']." ".$result['Address']."<br>"; -->