<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$indexno=$_POST['index'];
$servername = "localhost:3308"; 
$username = "root";
$password = "";
$dbname="exam";



$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}else{
    $sql="select * from result where IndexNo='$indexno'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc())
        {
            ?>
            <table>
<tr>
<td>Index number</td>
<td><input type="textarea" value=<?php echo$row["IndexNo"];?> readonly></td>
</tr>
<tr>
<td>Name</td>
<td><input type="textarea" value=<?php echo$row["Name"];?> readonly></td>
</tr>
<tr>
<td>Maths</td>
<td><input type="textarea" value=<?php echo$row["Maths"];?> readonly></td>
</tr>
<tr>
<td>Physics</td>
<td><input type="textarea" value=<?php echo$row["Physics"];?> readonly></td>
</tr>
<tr>
<td>Chemistry</td>
<td><input type="textarea" value=<?php echo$row["Chemistry"];?> readonly></td>
</tr>
<tr>
<td>Biology</td>
<td><input type="textarea" value=<?php echo$row["Biology"];?> readonly></td>
</tr>
<tr>
<td>Rank</td>
<td><input type="textarea" value=<?php echo$row["Rank"];?> readonly></td>
</tr>
<tr>
<td>Z score</td>
<td><input type="textarea" value=<?php echo$row["Z score"];?> readonly></td>
</tr>

</table>
<a href="index.php"> back to home</a>
<?php
        }
    }else{
       header("location:index.php?message=in");
    }

}
?>
</body>
</html>