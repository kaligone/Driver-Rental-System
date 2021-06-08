<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>

body{

  background: url(back1.jpg);
  background-size: 2000px 1000px;
  background-repeat: no-repeat;
  /*background-position: top;
  background-repeat: no-repeat
  background-attachment: fixed;
*/
}

.a1{
  text-decoration: none;
  font-family: cursive;
  border: 1px solid rgba(0,0,0,.05);
  background-color: rgba(0,0,0,.05);
  color: white;
  border-radius: 5px;
  font-size: 25px;
  padding: 0px 10px;

}

.a1:hover{
  background: crimson;
	color: white;
  border-color: crimson;
  text-transform:uppercase;
}

table {
position: absolute;
top: 80px;
width: 100%;
color: green;
font-family:monospace;
text-transform: uppercase;
font-size: 20px;
text-align: left;
background-color: white;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color:white }

</style>
</head>
<body>
  <form action="driver_list.php" method="post">
    <input class="a1" type="submit" name="back" value="Back">
  </form>

<table>
<tr>
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "driverrentalsystem");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, fname, lname ,available_status FROM driverregistrationdetails";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"] . "</td><td>"
. $row["lname"]. "</td><td>" . $row["available_status"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

if(isset($_POST['back']))
{
    header('Location:welcomepage.php',true,301);
}

$conn->close();
?>
</table>
</body>
</html>
