<!doctype html>
<html>
  <head>
    <title>Birthday Notification </title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
<style>
tabel
{
}
</style>
  <body background="p8PYNEn.jpg">
    <div align="center">
   <h1> <img src="cake1.png" alt="birthday" ><center>
       Birthday Notification</center>
    </h1>
    </div>
    <hr>
      <div style="padding:10px;"></div>
      <tabel>
      <center>
  
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "DOB";
  $date_array = [];
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $sql="SELECT sno,date from com";
  $result = $conn->query($sql);
  if($result-> num_rows > 0)
  {
    while($row=$result -> fetch_assoc())
    {
      $date_array[] = ($row["date"]);
          }
      echo "</tabel>";
  }
      else
      {
        echo " 0 result";
    }
    sort($date_array);

    for($x = 0; $x < count($date_array); $x++) {
      $date2= date_create($date_array[$x]);
      $date1= new DateTime();
      $diff=date_diff($date1,$date2);
      echo "<tr><div style='padding:10px;'></div>"."</td> Date:<td>".$date_array[$x]."    "."<td>||</td></td style='color:blue'>  Days To go:<td>".$diff->format("%a days")."</td><hr> </tr>";
      echo "<br>";
  }
  
  $conn->close();
  ?>
  </center>
  </tabel>
</form>
  </body>
</html>
