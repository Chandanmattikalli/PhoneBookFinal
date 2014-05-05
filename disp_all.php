<?php  
$con=mysqli_connect("localhost","root","root","phonebook");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM details");


echo "<br>";
echo "<h1>ALL CONTACTS</h1>";
print"<table border=\"1\"align='center'>";
print"<tr><td>Group</td><td>Name</td><td>Ph. No.</td></tr>";


while(($row = mysqli_fetch_array($result))!=0)
  {
            print"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    

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