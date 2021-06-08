 <!DOCTYPE html>
 <html>
 <head>
 <title>Table with database</title>
 <style>

 body{

   background: url(back1.jpg);
   background-size: 2000px 1000px;
   background-repeat: no-repeat;
 }

 .a1{
   text-decoration: none;
   font-family: cursive;
   border: 1px solid rgba(0,0,0,.05);
   background-color: crimson;
   color: white;
   border-radius: 5px;
   font-size: 25px;
   padding: 0px 10px;
   pointer:cursor;
 }

 .a1:hover{
   pointer:cursor;
   background: green;
 	color: white;
   border-color: green;
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
   <form action="history.php" method="post">
     <input class="a1" type="submit" name="back" value="Back">
   </form>

 <table>
 <tr>
 <th>Start Address</th>
 <th>Destination address</th>
 <th>Date</th>
 <th>Start time</th>
 <th>Status</th>
 </tr>

 <?php
 require 'config.php';

 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }

 session_start();
 $id=$_SESSION['ID'];

 $sql = "SELECT start_addr,end_addr,date_journey,time_of_travel,rent_stat FROM historystatus where id= '".$id."'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {
   /*$duration=$row["time_of_travel"]/1000;
   $hrs = floor($duration/3600);
   $minutes= floor(($duration/60)%60);
   $dec= floor($duration%60);
   $cost =
   */
 echo "<tr><td>" . $row["start_addr"]. "</td><td>" . $row["end_addr"] . "</td><td>"
 . $row["date_journey"]. "</td><td>" .$row["time_of_travel"]. "</td><td>".$row["rent_stat"] . "</td></tr>";
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
