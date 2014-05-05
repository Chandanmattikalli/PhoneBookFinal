<?php
$name= $_GET["name"]; echo "GROUP:".$name."<br>";

$con=mysqli_connect("localhost","root","root","phonebook");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  $sql="INSERT INTO groups VALUES('$name')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
echo " SUCCESSFULLY ADDED...!!!!!";
echo "<input type='button' value='click here to go back to main page' onclick='back();'>";
mysqli_close($con);
?>
<script>
    function back()
    {
        window.location.replace("phone_book.php")  ;
    }
</script>