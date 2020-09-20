<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Train Route</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->



  </head>
  <body>
      <header>
    <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #dddddd;
    } 
    </style>



<h2 align="center" class="h">Purchase History</h2>

<table>
  <tr>
    <th>PASSENGER  FIRST NAME</th>
    <th>PASSENGER  LAST NAME</th>
    <th>EMAIL</th>
    <th>TRAVEL FROM</th>
    <th>TRAVEL TO</th>
    <th>TRAVEL DATE</th>
    <th>NO OF SEAT</th>
    <th>CLASS</th>
    <!-- <th>TRAIN NAME</th> -->
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT  passenger_fname, passenger_lname, passenger_email, travel_from, travel_to, date, seat, class  FROM booking ";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["passenger_fname"] ."</td><td>".$row["passenger_lname"] ."</td><td>".$row["passenger_email"] ."</td><td>".$row["travel_from"] ."</td><td>".$row["travel_to"] ."</td><td>".$row["date"] ."</td><td>".$row["seat"] ."</td><td>".$row["class"] ."</td></tr>";
  }
  echo "</table>";
} else{
  echo "0 result";
}
$conn->close();
 ?>


</table>
</header>
</body>
</html>
