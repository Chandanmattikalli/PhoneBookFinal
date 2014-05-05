<?php  
$con=mysqli_connect("localhost","root","root","phonebook");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM details");


echo "<br>";
echo "<h1>REPEATED CONTACTS</h1>";
print"<table border=\"1\"align='center'>";
print"<tr><td>Group</td><td>Name</td><td>Ph. No.</td></tr>";


while(($row = mysqli_fetch_array($result))!=0)
  {
    $result1 = mysqli_query($con,"SELECT * FROM details");
    while(($row1 = mysqli_fetch_array($result1))!=0)
    {
        if($row[0]!=$row1[0] && $row[1]===$row1[1])
        {
            print"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
            print"<tr><td>$row1[0]</td><td>$row1[1]</td><td>$row1[2]</td></tr>";
            print"<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
        }
    }

  }
      echo "</table>";
      
      echo "<br>";
      echo "<br>";
      echo "<br><br>";echo "<br>";echo "<br>";echo "<br>";
      
      echo "<input type='button' value='click here to go back to main page' onclick='back();'>";
     mysqli_close($con);
?> 
<script>
    function back()
    {
        window.location.replace("phone_book.php")  ;
    }
</script>